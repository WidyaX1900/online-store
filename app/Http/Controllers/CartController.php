<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $total = $request->cost * $request->purchase_amount;
        $product = Product::findOrFail($request->product_id);
        $qty = $product->qty - $request->purchase_amount;

        $product->update([
            'qty' => $qty
        ]);

        $cart = Cart::create([
            'product_id' => $request->product_id,
            'buyer_id' => $request->buyer_id,
            'cost' => $total,
            'purchase_date' => Carbon::now(),
            'purchase_amount' => $request->purchase_amount,
        ]);

        if($cart){
            session()->flash('status', 'success');
            session()->flash('result', 'Purchase');
            session()->flash('action', 'successfull');
        }

        return redirect('/product');
    }

    public function index()
    {
        $carts = Cart::with('product')
                ->where('buyer_id', Auth::user()->id)                
                ->get();
        
        $totalCost = [];

        foreach($carts as $cart){

            $totalCost[] = $cart->cost;
        }        
        
        $totalCost = array_sum($totalCost);
        
        return view('product.cart', ['carts' => $carts, 'total' => $totalCost]);   
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $category = Category::get(['id', 'name']);
        $products = Product::all();

        return view('product.index', ['category' => $category, 'products' => $products]);
    }

    public function store(ProductRequest $request)
    {
        $file = $request->file('photo');
        $file->storeAs('products', $file->hashName());

        $fileName = $file->hashName();

        $product = Product::create([
            'name' => $request->name,
            'cost' => $request->cost,
            'category_id' => $request->category_id,
            'qty' => $request->qty,
            'photo' => $fileName
        ]);

        if($product){

            session()->flash('status', 'success');
            session()->flash('result', 'Successfull');
            session()->flash('action', 'add Data');
        }

        return redirect('/product');
    }
}

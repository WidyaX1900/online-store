<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function show(Product $product)
    {
        return view('product.info', ['product' => $product]);   
    }

    public function edit(Request $request)
    {
        $product = Product::findOrfail($request->id);
        echo json_encode($product);   
    }

    public function update(Request $request, Product $product)
    {
        $fileName = $request->oldFile;

        $validate = $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'category_id' => 'required',
            'qty' => 'required',
        ]);

        if($request->file('photo')){
            
            $file = $request->file('photo');
            $file->storeAs('products', $file->hashName());
            $fileName = $file->hashName();

            Storage::disk('public')->delete('products/'.$request->oldFile);
        }

        $product->update([
            'name' => $request->name,
            'cost' => $request->cost,
            'category_id' => $request->category_id,
            'qty' => $request->qty,
            'photo' => $fileName
        ]);

        if($product){
            session()->flash('status', 'success');
            session()->flash('result', 'Successfull');
            session()->flash('action', 'update Data');
        }

        return redirect('/product');
    }
}

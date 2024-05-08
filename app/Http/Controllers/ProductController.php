<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.new');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:80',
            'price' => 'required',
            'stock' => 'nullable',
            'category_id' => 'required|exists:categories,id'
        ]);

        $product = Product::create($validated);
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|max:80',
            'price' => 'required',
            'stock' => 'nullable',
            'category_id' => 'required|exists:categories,id'
        ]);

        $product->update($validated);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        $product = new Product();
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $suppliers = Supplier::orderBy('created_at', 'DESC')->get();
        return view('products.create', compact('categories', 'suppliers'))->with(['product' => $product]);
    }


    public function store(Request $request)
    {
        $product = new Product();
        $this->validate($request, [
            'number' => 'required',
            'name' => 'required',
            'total_quantity' => 'required',
            'minimum_quantity' => 'required',
            'category' => 'required',
            'supplier' => 'required'
        ]);
        $product->fill($request->all());
        $condition = $product->total_quantity <= $product->minimum_quantity;
        $product->status = $condition ? 'COMPRAR' : 'OK';
        $product->save();
        return redirect()->route('products.index')->with('success', 'CREATE');
    }


    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }


    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $suppliers = Supplier::orderBy('created_at', 'DESC')->get();
        return view('products.edit', compact('product', 'categories', 'suppliers'));
    }


    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $this->validate($request, [
            'number' => 'required',
            'name' => 'required',
            'total_quantity' => 'required',
            'minimum_quantity' => 'required',
            'category' => 'required',
            'supplier' => 'required'
        ]);
        $product->fill($request->all());
        $condition = $product->total_quantity <= $product->minimum_quantity;
        $product->status = $condition ? 'COMPRAR' : 'OK';
        $product->save();
        return redirect()->route('products.index')->with('success', 'UPDATE');
    }


    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'DELETE');
    }
}

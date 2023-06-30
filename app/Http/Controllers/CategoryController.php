<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return view('categories.index', compact('categories'));
    }


    public function create()
    {
        $createCategory = new Category();
        return view('categories.index')->with(['createCategory' => $createCategory]);
    }


    public function store(Request $request)
    {
        $category = new Category();
        $this->validate($request, [
            'name' => 'required'
        ]);
        $category->fill($request->all());
        $category->save();
        return redirect()->route('categories.index')->with('success', 'CREATE');
    }


    public function show(string $id)
    {
        $showCategory = Category::findOrFail($id);
        return view('categories.index', compact('showCategory'));
    }


    public function edit(string $id)
    {
        $updateCategory = Category::findOrFail($id);
        return view('categories.index', compact('updateCategory'));
    }


    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $this->validate($request, [
            'name' => 'required'
        ]);
        $category->fill($request->all());
        $category->save();
        return redirect()->route('categories.index')->with('success', 'UPDATE');
    }


    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'DELETE');
    }
}

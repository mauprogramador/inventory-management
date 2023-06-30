<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::orderBy('created_at', 'DESC')->get();
        return view('suppliers.index', compact('suppliers'));
    }


    public function create()
    {
        $createSupplier = new Supplier();
        return view('suppliers.index')->with(['createSupplier' => $createSupplier]);
    }


    public function store(Request $request)
    {
        $category = new Supplier();
        $this->validate($request, [
            'name' => 'required'
        ]);
        $category->fill($request->all());
        $category->save();
        return redirect()->route('suppliers.index')->with('success', 'CREATE');
    }


    public function show(string $id)
    {
        $showSupplier = Supplier::findOrFail($id);
        return view('suppliers.index', compact('showSupplier'));
    }


    public function edit(string $id)
    {
        $updateSupplier = Supplier::findOrFail($id);
        return view('suppliers.index', compact('updateSupplier'));
    }


    public function update(Request $request, string $id)
    {
        $category = Supplier::find($id);
        $this->validate($request, [
            'name' => 'required'
        ]);
        $category->fill($request->all());
        $category->save();
        return redirect()->route('suppliers.index')->with('success', 'UPDATE');
    }


    public function destroy(string $id)
    {
        $category = Supplier::findOrFail($id);
        $category->delete();
        return redirect()->route('suppliers.index')->with('success', 'DELETE');
    }
}

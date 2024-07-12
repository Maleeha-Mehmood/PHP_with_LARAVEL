<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string|max:1000',
            'quantity' => 'required|integer',
        ]);

        // Find the product by ID
        $product = Product::findOrFail($id);

        // Update the product with new data
        $product->update($data);

        // Redirect to the index page or show success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string|max:1000',
            'quantity' => 'required|integer',
        ]);

        // Save the product to the database
        Product::create($data);

        // Redirect to the index page or show success message
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        // return response()->json($product);
        return view('products.show', compact('product'));

    }
}

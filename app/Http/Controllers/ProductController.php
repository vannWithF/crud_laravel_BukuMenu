<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create() {
        return view('layouts.products.create');
    }

    public function store(Request $request) {
        // Validasi input
        $request->validate([
            "nama_makanan" => "required|string|max:255",
            "price" => "required|integer",
            "description" => "required|string|max:255",
        ]);

        // Simpan data produk
        Product::create([
            "nama_makanan" => $request->nama_makanan,
            "price" => $request->price,
            "description" => $request->description,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function delete($id) {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus produk
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function index() {
        // Ambil semua data produk
        $products = Product::all();
        return view('layouts.products.index', compact('products'));
    }

    public function edit($id) {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);
        return view('layouts.products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        // Validasi input
        $request->validate([
            "nama_makanan" => "required|string|max:255",
            "price" => "required|integer",
            "description" => "required|string|max:255",
        ]);

        // Cari produk dan update data
        $product = Product::findOrFail($id);
        $product->update($request->only('nama_makanan', 'price', 'description'));

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
}

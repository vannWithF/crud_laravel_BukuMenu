<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use PHPUnit\Util\Json;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create() {
        return view('layouts.products.create');
    }
    public function store(Request $request) {
        $request->validate([
            "nama_makanan" => "required|string|max:255",
            "price" => "required|integer",
            "description" => "required|string|max:255",
        ]);

        $product = Product::insert([
            "nama_makanan" => $request->nama_makanan,
            "price" => $request->price,
            "description" => $request->description,
        ]);

        return redirect()->route('product.index')->with('succes', 'created');
    }

     public function delete(Request $request, $id) {
        $product = Product::where('id', '=', $id)->first();

        $product->delete();

        return redirect()->route('products.index')->with('success', 'deleted');
    }

    public function index() {
        $products = Product::all();
        return view('layouts.products.index', compact('products'));
    }

    public function edit($id) {
        $product = Product::where('id', '=', $id)->first();
        return view('layouts.products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::where('id', '=', $id)->first();

        $request->validate([
            "nama_makanan" => "required|string|max:255",
            "price" => "required|integer",
            "description" => "required|string|max:255",
        ]);

        $product->update($request->only('nama_makanan', 'price', 'description'));

        return redirect()->route('products.index')->with('succes', 'apdet');
    }
}    
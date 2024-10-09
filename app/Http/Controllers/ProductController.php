<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use PHPUnit\Util\Json;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create(Request $request) {
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

        return response("product berhasil dibuat", 201);
    }

     public function delete(Request $request, $id) {
        $product = Product::where('id', '=', $id)->first();

        $product->delete();
        return response("product berhasil dihapus", 201);
    }

    public function get() {
        $product = Product::get();
        return response($product, 201);
    }

    public function update(Request $request, $id) {
        $product = Product::where('id', '=', $id)->first();

        $request->validate([
            "nama_makanan" => "required|string|max:255",
            "price" => "required|integer",
            "description" => "required|string|max:255",
        ]);

        $product->update($request->only('nama_makanan', 'price', 'description'));

        return response($product, 201);
    }
}    
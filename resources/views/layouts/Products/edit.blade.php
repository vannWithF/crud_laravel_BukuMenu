@extends('layouts.app')

@section('styles')
<style>
    .form-container {
        max-width: 500px;
        margin: 0 auto;
        background-color: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 1rem;
    }
    label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }
    input[type="text"],
    input[type="number"],
    textarea {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .btn {
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        text-decoration: none;
        color: white;
        font-weight: bold;
        border: none;
        cursor: pointer;
    }
    .btn-primary {
        background-color: #3498db;
    }
    .btn-secondary {
        background-color: #95a5a6;
    }
    .form-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 1rem;
    }
</style>
@endsection

@section('content')
    <div class="form-container">
        <h2>Ubah Menu</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_makanan">Nama Makanan</label>
                <input type="text" name="nama_makanan" id="nama_makanan" value="{{ $product->nama_makanan }}" required>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" name="price" id="price" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" rows="3" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-actions">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Perbarui Menu</button>
            </div>
        </form>
    </div>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label, input, textarea {
            margin-bottom: 10px;
        }
        input, textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Produk</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <label for="nama_makanan">Nama Makanan</label>
            <input type="text" name="nama_makanan" id="nama_makanan" required>

            <label for="price">Harga</label>
            <input type="number" name="price" id="price" required>

            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" rows="4" required></textarea>

            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Buku Menu Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        nav {
            background-color: #3498db;
            color: white;
            padding: 1rem;
        }
        nav h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        main {
            margin-top: 2rem;
        }
    </style>
    @yield('styles')
</head>
<body>
    <nav>
        <div class="container">
            <h1>Buku Menu Makanan</h1>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
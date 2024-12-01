<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Culinary Creation</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --dark-bg: #121212;
            --dark-surface: #1E1E1E;
            --accent-color: #8B7355;
            --text-primary: #E0E0E0;
            --text-secondary: #A0A0A0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-primary);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 500px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: var(--dark-surface);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .form-title {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--text-primary);
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-secondary);
            font-weight: 300;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            background-color: var(--dark-bg);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            color: var(--text-primary);
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 2px rgba(139, 115, 85, 0.2);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            width: 100%;
            padding: 0.9rem 1rem;
            background-color: var(--accent-color);
            color: var(--text-primary);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #A0785F;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-submit:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 115, 85, 0.4);
        }

        @media (max-width: 600px) {
            .container {
                width: 95%;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Create New Culinary Experience</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_makanan" class="form-label">Dish Name</label>
                <input type="text" 
                       name="nama_makanan" 
                       id="nama_makanan" 
                       class="form-input" 
                       placeholder="Enter dish name" 
                       required>
            </div>

            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="number" 
                       name="price" 
                       id="price" 
                       class="form-input" 
                       placeholder="0.00" 
                       step="0.01" 
                       required>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Dish Description</label>
                <textarea 
                    name="description" 
                    id="description" 
                    class="form-input form-textarea" 
                    placeholder="Describe the culinary experience..." 
                    required></textarea>
            </div>

            <button type="submit" class="btn-submit">Create Dish</button>
        </form>
    </div>
</body>
</html>
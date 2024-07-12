<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <h1>Create a product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Product Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter Name"><br><br>
        </div>
        <div>
            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" placeholder="Enter product's Price"><br><br>
        </div>
        <div>
            <label for="description">Product Description:</label><br>
            <input type="text" id="description" name="description" placeholder="Enter Description"><br><br>
        </div>
        <div>
            <label for="quantity">Product Quantity:</label><br>
            <input type="number" id="quantity" name="quantity" placeholder="Enter product's Quantity"><br><br>
        </div>
        <div>
            <button type="submit">Submit a New Product</button>
        </div>
    </form>
</body>
</html>

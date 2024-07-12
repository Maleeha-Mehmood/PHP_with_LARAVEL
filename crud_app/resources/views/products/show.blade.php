<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Product Details</h1>
    <p><strong>ID:</strong> {{ $product->id }}</p>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
    <a href="{{ route('products.index') }}">Back to Product List</a>
</body>
</html>

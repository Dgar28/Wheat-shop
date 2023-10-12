<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
</head>
<body>
    <h1>
        Product Details:
        {{ $product->name }}
    </h1>

    <h2>Price: {{ $product->price }}</h2>
</body>
</html>
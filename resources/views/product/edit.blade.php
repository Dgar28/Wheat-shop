<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Add Product</h1>

    <form action="{{ route('product.update', $product) }}" method="post">
        @csrf
        @method('PATCH')

    <label for="name">Name:</label><br>
    <input type="text" name="name" value="{{ $product->name }}"><br>

    <label for="price">Price:</label>
    <input type="text" name="price" value="{{ $product->price }}"><br>

    <label for="product_code">Product_Code:</label>
    <input type="text" name="product_code" value="{{ $product->product_code }}"><br>

    <label for="type">Type:</label>
    <input type="text" name="type" value="{{ $product->type }}"><br>

    <input type="submit" value="Create">
    </form>
</body>
</html>
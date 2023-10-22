<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('styles/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('styles/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('styles/css/style.css') }}" rel="stylesheet">
    
    <title>Create Product</title>
</head>
<body>
    <a href="{{ route('product.index') }}">Return to products</a>

    <a href="{{ route('product.show', $product->id) }}">Return to {{$product->name}}</a>

    <h1>Add Product</h1>

    <form action="{{ route('product.update', $product) }}" method="POST">
        @csrf
        @method('PATCH')

    <label for="name">Name:</label><br>
    <input type="text" name="name" id="" value="{{ $product->name }}"><br>

    <label for="price">Price:</label>
    <input type="text" name="price" id="" value="{{ $product->price }}"><br>

    <label for="product_code">Product_Code:</label>
    <input type="text" name="product_code" id="" value="{{ $product->product_code }}"><br>

    <label for="type">Type:</label>
    <input type="text" name="type" id="" value="{{ $product->type }}"><br>

    <input type="submit" value="Create">
    </form>
</body>
</html>
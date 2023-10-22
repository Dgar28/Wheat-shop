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

    <title>Show Product</title>
</head>

<body>
<a href="{{ route('product.index') }}">Return to Products</a>

<h1> Product Details </h1>
<div class="divLists">
                <h2>Name - {{$product->name}}</h2>
                <h2>Price - {{$product->price}}</h2>
                <h2>Code - {{$product->product_code}}</h2>
                <h2>Type - {{$product->type}}</h2>
            </div>
            <br>

    <a class="btn btn-sm btn-warning" href="{{route('product.edit',$product->id)}}">Edit {{$product->name}}</a>
</body>
</html>
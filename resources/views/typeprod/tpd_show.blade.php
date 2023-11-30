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

    <title>Show Type Product</title>
</head>

<body>
<a href="{{ route('typeProduct.index') }}">Return to Type Products</a>

<h1> Type Details </h1>
<div class="divLists">
                <h2>Origin - {{$typeProduct->origin}}</h2>
                <h2>Amount - {{$typeProduct->amount}}</h2>
                <h2>Type - {{$typeProduct->type}}</h2>
                <h2>Provider - {{$typeProduct->provider_id}}</h2>
            </div>
            <br>

            <p>
    </p>

    <a class="btn btn-sm btn-warning" href="{{route('typeProduct.edit',$typeProduct->id)}}">Edit {{$typeProduct->origin}}</a>

</body>
</html>
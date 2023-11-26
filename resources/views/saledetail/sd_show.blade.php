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

    <title>Show Sale Details</title>
</head>

<body>
<a href="{{ route('sale_detail.index') }}">Return to Sale Details</a>

<h1> Sale Details </h1>
<div class="divLists">
                <h2>Quantity - {{$sale_detail->quantity}}</h2>
                <h2>Price - {{$sale_detail->buy_price}}</h2>
                <h2>Sale - {{$sale_detail->sale_id}}</h2>
            </div>
            <br>

            <p>
    </p>

    <a class="btn btn-sm btn-warning" href="{{route('sale_detail.edit',$sale_detail->id)}}">Edit {{$sale_detail->quantity}}</a>

</body>
</html>
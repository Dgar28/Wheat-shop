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

    <title>Show Sale</title>
</head>

<body>
<a href="{{ route('sale.index') }}">Return to Sales</a>

<h1> Client Details </h1>
<div class="divLists">
                <h2>Folio - {{$sale->sale_folio}}</h2>
                <h2>Date - {{$sale->sale_date}}</h2>
                <h2>Client - {{$sale->client_id}}</h2>
            </div>
            <br>

            <p>
    </p>

    <a class="btn btn-sm btn-warning" href="{{route('sale.edit',$sale->id)}}">Edit {{$sale->sale_folio}}</a>
   
</body>
</html>
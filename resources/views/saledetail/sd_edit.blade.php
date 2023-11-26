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

    <title>Create Sale Details</title>
</head>
<body>
    <a href="{{ route('sale_detail.index') }}">Return to sale details</a>

    <a href="{{ route('sale_detail.show', $sale_detail->id) }}">Return to {{$sale_detail->quantity}}</a>

    <h1>Add Sale Details</h1>

    <form action="{{ route('sale_detail.update', $sale_detail) }}" method="POST">
        @csrf
        @method('PATCH')

    <label for="quantity">Quantity:</label><br>
    <input type="integer" name="quantity" id="" value="{{ $sale_detail->quantity }}"><br>

    <label for="buy_price">Date:</label>
    <input type="text" name="buy_price" id="" value="{{ $sale_detail->buy_price }}"><br>

    <label for="sale">Sale:</label>
    <input type="text" name="sale_id" id="" value="{{ $sale_detail->sale_id }}"><br>

    <input type="submit" value="Create">
    </form>
</body>
</html>
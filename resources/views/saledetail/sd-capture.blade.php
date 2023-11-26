<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('styles/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('styles/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('styles/css/style.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body>

    <form action="{{ route('sale_detail.store') }}" method="post">
        @csrf
        <label for="quantity">Quantity</label>
        <input type="integer" name="quantity"><br>

        <label for="buy_price">Price</label>
        <input type="text" name="buy_price"><br>


        <select name="sale_id">
            @foreach ($sales as $sale)
                <option value="{{ $sale->id }}">
                    {{ $sale->sale_folio }}
                </option>
            @endforeach
        </select>

        <br>

        <input type="submit" value="Enter SaleDetails">
    </form>

</body>
</html>
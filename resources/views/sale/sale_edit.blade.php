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
    
    <title>Create Sale</title>
</head>
<body>
    <a href="{{ route('sale.index') }}">Return to sales</a>

    <a href="{{ route('sale.show', $sale->id) }}">Return to {{$sale->sale_folio}}</a>

    <h1>Add Sale</h1>

    <form action="{{ route('sale.update', $sale) }}" method="POST">
        @csrf
        @method('PATCH')

    <label for="sale_folio">Folio:</label><br>
    <input type="text" name="sale_folio" id="" value="{{ $sale->sale_folio }}"><br>

    <label for="sale_date">Date:</label>
    <input type="text" name="sale_date" id="" value="{{ $sale->sale_date }}"><br>

    <label for="client">Client:</label>
    <input type="text" name="client_id" id="" value="{{ $sale->client_id }}"><br>

    <input type="submit" value="Create">
    </form>
</body>
</html>
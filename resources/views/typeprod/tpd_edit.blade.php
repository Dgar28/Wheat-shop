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

    <title>Create Type Product</title>
</head>
<body>
    <a href="{{ route('typeProduct.index') }}">Return to type product</a>

    <a href="{{ route('typeProduct.show', $typeProduct->id) }}">Return to {{$typeProduct->name_p}}</a>

    <h1>Add Sale</h1>

    <form action="{{ route('typeProduct.update', $typeProduct) }}" method="POST">
        @csrf
        @method('PATCH')

    <label for="origin">Origin:</label><br>
    <input type="text" name="origin" id="" value="{{ $typeProduct->origin }}"><br>

    <label for="amount">Amount:</label>
    <input type="text" name="amount" id="" value="{{ $typeProduct->amount }}"><br>

    <label for="type">Type:</label>
    <input type="text" name="type" id="" value="{{ $typeProduct->type }}"><br>

    <label for="provider">Provider:</label>
    <input type="text" name="provider_id" id="" value="{{ $typeProduct->provider_id }}"><br>

    <input type="submit" value="Create">
    </form>
</body>
</html>
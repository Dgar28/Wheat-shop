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

    <form action="{{ route('typeProduct.store') }}" method="post">
        @csrf
        <label for="origin">Origin</label>
        <input type="text" name="origin"><br>

        <label for="amount">Amount</label>
        <input type="text" name="amount"><br>

        <label for="type">Type</label>
        <input type="text" name="type"><br>

        <select name="provider_id">
            @foreach ($providers as $provider)
                <option value="{{ $provider->id }}">
                    {{ $provider->name_p }}
                </option>
            @endforeach
        </select>
        <br>

        <input type="submit" value="Enter Type Product">
    </form>

</body>
</html>
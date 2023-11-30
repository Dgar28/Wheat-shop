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

    <title>Show Provider</title>
</head>

<body>
<a href="{{ route('client.index') }}">Return to Providers</a>

<h1> Provider Details </h1>
<div class="divLists">
                <h2>Provider_name - {{$provider->name_p}}</h2>
                <h2>Email - {{$provider->email}}</h2>
                <h2>Phone - {{$provider->phone}}</h2>
            </div>
            <br>

            <p>
        <ul>
            @foreach ($provider->$type_products as $tp)
                <li>{{ $tp->typeProduct_code }}</li>
            @endforeach
        </ul>
    </p>

    <a class="btn btn-sm btn-warning" href="{{route('provider.edit',$provider->id)}}">Edit {{$provider->name_p}}</a>
</body>
</html>
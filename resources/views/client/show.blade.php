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

    <title>Show Client</title>
</head>

<body>
<a href="{{ route('client.index') }}">Return to Clients</a>

<h1> Client Details </h1>
<div class="divLists">
                <h2>Client_code - {{$client->client_code}}</h2>
                <h2>Name - {{$client->client_name}}</h2>
                <h2>Age - {{$client->age}}</h2>
                <h2>Phone - {{$client->phone}}</h2>
            </div>
            <br>

    <a class="btn btn-sm btn-warning" href="{{route('client.edit',$client->id)}}">Edit {{$client->client_code}}</a>
</body>
</html>
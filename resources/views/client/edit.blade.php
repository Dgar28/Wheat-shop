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
    
    <title>Create Client</title>
</head>
<body>
    <a href="{{ route('client.index') }}">Return to clients</a>

    <a href="{{ route('client.show', $client->id) }}">Return to {{$client->client_name}}</a>

    <h1>Add Product</h1>

    <form action="{{ route('client.update', $client) }}" method="POST">
        @csrf
        @method('PATCH')

    <label for="client_code">Client_code:</label><br>
    <input type="text" name="client_code" id="" value="{{ $client->client_code }}"><br>

    <label for="client_name">Name:</label>
    <input type="text" name="client_name" id="" value="{{ $client->client_name }}"><br>

    <label for="age">Age:</label>
    <input type="text" name="age" id="" value="{{ $client->age }}"><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="" value="{{ $client->phone }}"><br>

    <input type="submit" value="Create">
    </form>
</body>
</html>
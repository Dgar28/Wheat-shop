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

    <title>Document</title>
</head>
<body>
<h1>Add Client</h1>

<a href="{{ route('client.index') }}"> Client listing</a>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> <br>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('client.store') }}" method="POST">
    @csrf

    <label for="client_code">Client_Code:</label><br>
    <input type="text" name="client_code" id="" value="{{ old('client_code') }}"><br><br>

    <label for="client_name">Name:</label><br>
    <input type="text" name="client_name" id="" value="{{ old('client_name') }}"><br><br>

    <label for="age">Age:</label><br>
    <input type="text" name="age" id="" value="{{ old('age') }}"><br><br>

    <label for="phone">Phone:</label><br>
    <input type="text" name="phone" id="" value="{{ old('phone') }}"><br><br>


    <input type="submit" value="Create">

</form>
</body>
</html>
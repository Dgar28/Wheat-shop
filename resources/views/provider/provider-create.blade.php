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
<h1>Add Type Product</h1>
<a href="{{ route('typeProduct.index') }}"> Type Product listing</a>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> <br>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('typeProduct.store') }}" method="POST">
    @csrf

    <label for="name_p">Name Provider:</label><br>
    <input type="text" name="name_p" id="" value="{{ old('name_p') }}"><br><br>

    <label for="email">Email:</label><br>
    <input type="text" name="email" id="" value="{{ old('email') }}"><br><br>

    <label for="phone">Phone:</label><br>
    <input type="text" name="phone" id="" value="{{ old('phone') }}"><br><br>

    <input type="submit" value="Create">
</form>
</body>
</html>
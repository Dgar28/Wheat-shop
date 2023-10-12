<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add Product</h1>

<a href="{{ route('product.index') }}"> Product listing</a>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> <br>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="" value="{{ old('name') }}"><br><br>

    <label for="price">Price:</label>
    <input type="text" name="price" id="" value="{{ old('price') }}"><br><br>

    <label for="product_code">Product_Code:</label>
    <input type="text" name="product_code" id="" value="{{ old('product_code') }}"><br><br>

    <label for="type">Type:</label>
    <input type="text" name="type" id="" value="{{ old('type') }}"><br><br>


    <input type="submit" value="Create">

</form>
</body>
</html>
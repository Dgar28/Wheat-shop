<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add Product</h1>

<form action="{{ route('product.store') }}" method="post">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name"><br><br>

    <label for="price">Price:</label>
    <input type="text" name="price"><br><br>

    <label for="product_code">Product_Code:</label>
    <input type="text" name="product_code"><br><br>

    <label for="type">Type:</label>
    <input type="text" name="type"><br><br>


    <input type="submit" value="Create">

</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add Product</h1>

<form action="/norma" method="post">
    @csrf

    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>

    <label for="price">Price:</label><br>
    <input type="text" name="price"><br>

    <label for="product_code">Product_Code:</label><br>
    <input type="text" name="product_code"><br>

    <label for="type">Type:</label><br>
    <input type="text" name="type"><br>


    <input type="submit" value="Create">

</form>
</body>
</html>
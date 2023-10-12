<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
</head>

<body>
<a href="{{ route('product.index') }}">Return to Products</a>
    
<h1> Product Details </h1>
 <table>
    <thead>
        <throw>
            <td>Name</td>
            <td>Price</td>
            <td>Code</td>
            <td>Type</td>
        <throw>
    </thead>
    <tbody>
        <tr>
            <td>{{ $product->name}}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->product_code }}</td>
            <td>{{ $product->type }}</td>
        </tr>
    </tbody>
 </table>

    <a href="{{route('product.edit',$product->id)}}">Edit {{$product->name}}</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Listing</h1>
    <table>
        <thead>
            <throw>
                <td>Name</td>
                <td>Price</td>
                <td>Code</td>
                <td>Type</td>
            </throw>
        </thead>
        <tbody>
            @foreach ($products as $product)
             <tr>
             <td>{{ $product->name}}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->product_code }}</td>
            <td>{{ $product->type }}</td>
            <td>

                <a href="{{ route('product.show', $product->id) }}">
                    See more 
                </a>
                <a href="{{ route('product.edit', $product) }}" method="POST">
                     Edit
                 </a>

            <form action="{{ route('product.destroy', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <a href="{{ route('product.create') }}"> Add Product</a>
</body>
</html>
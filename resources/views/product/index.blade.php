<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Listing</h1>

    <ul>
        @foreach ($products as $product)
         <li>
            <a href="{{ route('product.show', $product) }}">
                {{ $product->name}}
            </a>

            <a href="{{ route('product.edit', $product) }}" method="POST">
             Edit
            </a>

            <form action="{{ route('product.destroy', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
         </li>

         @endforeach
    </ul>
    
</body>
</html>
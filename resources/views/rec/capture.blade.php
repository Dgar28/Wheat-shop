<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Form</title>
</head>
<body>

    <form action="{{route('req.store')}}" method="POST">
    @csrf
    <label for="identificador">Identifier</label>
    <input type="text" name="identificador">

    <label for="descripcion">Description</label>
    <input type="submit" value="Create Requirements">

    <select name="product_id">
        @foreach ($products as $product)
            <option value="{{product->id}}">
                {{product->email}}

            </option>
        @endforeach

    </select>

    <input type="submit" name="CreateRequirements">
    </form>

</body>
</html>
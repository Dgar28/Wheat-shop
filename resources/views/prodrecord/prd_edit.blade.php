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

    <title>Create Sale Details</title>
</head>
<body>
    <a href="{{ route('productRecord.index') }}">Return to sale details</a>

    <a href="{{ route('productRecord.show', $productRecord->id) }}">Return to {{$productRecord->availability}}</a>

    <h1>Add Sale Details</h1>

    <form action="{{ route('productRecord.update', $productRecord) }}" method="POST">
        @csrf
        @method('PATCH')

    <label for="availability">Availability:</label><br>
        <select name="availability">
            <option value="YES" @selected($productRecord->Availability == 'YES')>YES</option>
            <option value="NO" @selected($productRecord->Availability == 'NO')>NO</option>
        </select><br>

    <label for="storage_date">Store Date:</label><br>
    <input type="date" name="storage_date" id="" value="{{ $productRecord->storage_date }}"><br>


    <label for="status">Status:</label><br>
        <select name="status">
            <option value="NEW" @selected($productRecord->Status == 'NEW')>NEW</option>
            <option value="ABOUT TO EXPIRE" @selected($productRecord->Status == 'ABOUT TO EXPIRE')>ABOUT TO EXPIRE</option>
            <option value="NO STOCK" @selected($productRecord->Status == 'NO STOCK')>NO STOCK</option>
        </select><br>
   
    <label for="location">Location:</label><br>
    <input type="text" name="location" id="" value="{{ $productRecord->location }}"><br>

    <label for="product">Product:</label>
    <input type="text" name="product_id" id="" value="{{ $productRecord->product_id }}"><br>

    <input type="submit" value="Create">
    </form>
</body>
</html>
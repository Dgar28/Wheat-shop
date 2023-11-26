<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

    <form action="{{ route('productRecord.store') }}" method="post">
        @csrf

        <label for="availability">Availability</label><br>
        <select name="availability">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select><br>

        <label for="storage_date">Store Date</label>
        <input type="date" name="storage_date"><br>

        <label for="status">Status</label><br>
        <select name="status">
            <option value="NEW">NEW</option>
            <option value="ABOUT TO EXPIRE">ABOUT TO EXPIRE</option>
            <option value="NO STOCK">NO STOCK</option>
        </select><br>

        <label for="location">Location</label>
        <input type="text" name="location"><br>



        <select name="product_id">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">
                    {{ $product->name }}
                </option>
            @endforeach
        </select>

        <br>

        <input type="submit" value="Enter ProductRecord">
    </form>

</body>
</html>
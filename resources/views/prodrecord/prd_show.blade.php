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

    <title>Show Product Records</title>
</head>

<body>
<a href="{{ route('productRecord.index') }}">Return to Sale Details</a>

<h1> Sale Details </h1>
<div class="divLists">
                <h2>Availability - {{$productRecord->availability}}</h2>
                <h2>Date - {{$productRecord->storage_date}}</h2>
                <h2>Status - {{$productRecord->status}}</h2>
                <h2>Location - {{$productRecord->location}}</h2>

                <h2>Product - {{$productRecord->product_id}}</h2>
            </div>
            <br>

            <p>
    </p>

    <a class="btn btn-sm btn-warning" href="{{route('productRecord.edit',$productRecord->id)}}">Edit {{$productRecord->availabilityy}}</a>

</body>
</html>
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

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> <br>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('sale.store') }}" method="post">
        @csrf
        <label for="sale_folio">Folio</label>
        <input type="text" name="sale_folio"><br>

        <label for="sale_date">Date</label>
        <input type="date" name="sale_date"><br>

        <select name="client_id">
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">
                    {{ $client->client_name }}
                </option>
            @endforeach
        </select>
        <br>

        <input type="submit" value="Enter sale">
    </form>

</body>
</html>
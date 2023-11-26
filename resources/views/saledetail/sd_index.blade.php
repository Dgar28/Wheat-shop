<x-mi-layout>


    <h1>Sale Details Listing</h1>
    <table class="table table-striped">
        <thead>
            <throw>
                <td>Quantity</td>
                <td>Price</td>
                <td>Sale</td>

            </throw>
        </thead>
        <tbody>
            @foreach ($sale_details as $sale_detail)
            <tr>
            <td>{{ $sale_detail->quantity}}</td>
            <td>{{ $sale_detail->buy_price }}</td>
            <td>{{ $sale_detail->sale_id}}</td>


            <td>
             <a href="{{ route('sale_detail.show', $sale_detail->id) }}" class="btn btn-info" role="button"> 
                See more</a>


                        <form action="{{ route('sale_detail.destroy', $sale_detail) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('sale_detail.create') }}" class="btn btn-primary" role="button"> Add SaleDetails</a>
</x-mi-layout>
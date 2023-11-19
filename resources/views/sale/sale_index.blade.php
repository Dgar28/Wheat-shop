<x-mi-layout>


    <h1>Sale Listing</h1>
    <table class="table table-striped">
        <thead>
            <throw>
                <td>Folio</td>
                <td>Date</td>
                <td>Client</td>
                
            </throw>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
            <td>{{ $sale->sale_folio}}</td>
            <td>{{ $sale->sale_date }}</td>
            <td>{{ $sale->client_id}}</td>
            
            
            <td>
             <a href="{{ route('sale.show', $sale->id) }}" class="btn btn-info" role="button"> 
                See more</a>
                   

                        <form action="{{ route('sale.destroy', $sale) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('sale.create') }}" class="btn btn-primary" role="button"> Add Sale</a>
</x-mi-layout>
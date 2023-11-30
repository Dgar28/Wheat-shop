<x-mi-layout>


    <h1>Type Product Listing</h1>
    <table class="table table-striped">
        <thead>
            <throw>
                <td>Origin</td>
                <td>Amount</td>
                <td>Type</td>
                <td>Provider</td>

            </throw>
        </thead>
        <tbody>
            @foreach ($type_products as $typeProduct)
            <tr>
            <td>{{ $typeProduct->origin}}</td>
            <td>{{ $typeProduct->amount }}</td>
            <td>{{ $typeProduct->type }}</td>
            <td>{{ $typeProduct->provider_id}}</td>


            <td>
             <a href="{{ route('typeProduct.show', $typeProduct->id) }}" class="btn btn-info" role="button"> 
                See more</a>


                        <form action="{{ route('typeProduct.destroy', $typeProduct) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('typeProduct.create') }}" class="btn btn-primary" role="button"> Add Type details</a>
</x-mi-layout>
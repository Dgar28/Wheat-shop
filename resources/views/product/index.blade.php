<x-mi-layout>


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
             <a href="{{ route('product.show', $product->id) }}" class="btn btn-info" role="button"> 
                See more</a>
                   

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
    <a href="{{ route('product.create') }}" class="btn btn-primary" role="button"> Add Product</a>
</x-mi-layout>
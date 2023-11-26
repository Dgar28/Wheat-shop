<x-mi-layout>


    <h1>Product Records Listing</h1>
    <table class="table table-striped">
        <thead>
            <throw>
                <td>Availability</td>
                <td>Date</td>
                <td>Status</td>
                <td>Location</td>
                <td>Product</td>

            </throw>
        </thead>
        <tbody>
            @foreach ($product_records as $productRecord)
            <tr>
            <td>{{ $productRecord->availability}}</td>
            <td>{{ $productRecord->storage_date }}</td>
            <td>{{ $productRecord->status}}</td>
            <td>{{ $productRecord->location}}</td>

            <td>{{ $productRecord->product_id}}</td>


            <td>
             <a href="{{ route('productRecord.show', $productRecord->id) }}" class="btn btn-info" role="button"> 
                See more</a>


                        <form action="{{ route('productRecord.destroy', $productRecord) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('productRecord.create') }}" class="btn btn-primary" role="button"> Add ProductRecords</a>
</x-mi-layout>
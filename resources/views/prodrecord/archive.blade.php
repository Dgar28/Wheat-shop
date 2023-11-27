<x-mi-layout>


    <h1>Soft Deleted Product Records</h1>
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


                        <form action="{{ route('productRecord.destroy', $productRecord) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
            
                    <td>


                        <form action="{{ route('productRecord.destroy', $productRecord) }}/restore" method="POST">
                             @csrf
                             @method('DELETE')
                             <input type="submit" value="Restore">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</x-mi-layout>
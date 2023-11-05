<x-mi-layout>


    <h1>Client Listing</h1>
    <table>
        <thead>
            <throw>
                <td>Client_code</td>
                <td>Name</td>
                <td>Age</td>
                <td>Phone</td>
            </throw>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
            <td>{{ $client->client_code}}</td>
            <td>{{ $client->client_name }}</td>
            <td>{{ $client->age }}</td>
            <td>{{ $client->phone }}</td> 
            
            <td>
             <a href="{{ route('client.show', $client->id) }}" class="btn btn-info" role="button"> 
                See more</a>
                   

                        <form action="{{ route('client.destroy', $client) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('client.create') }}" class="btn btn-primary" role="button"> Add Client</a>
</x-mi-layout>
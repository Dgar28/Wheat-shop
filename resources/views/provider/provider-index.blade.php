<x-mi-layout>


    <h1>Provider Listing</h1>
    <table class="table table-striped">
        <thead>
            <throw>
                <td>Provider_Name</td>
                <td>Email</td>
                <td>Phone</td>
            </throw>
        </thead>
        <tbody>
            @foreach ($providers as $provider)
            <tr>
            <td>{{ $provider->name_p}}</td>
            <td>{{ $provider->email }}</td>
            <td>{{ $provider->phone }}</td>
            <td>
             <a href="{{ route('client.show', $provider->id) }}" class="btn btn-info" role="button"> 
                See more</a>
                   

                        <form action="{{ route('client.destroy', $provider) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('provider.create') }}" class="btn btn-primary" role="button"> Add Provider</a>
    
</x-mi-layout>
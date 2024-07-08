
@section('content')
    <h1>Search Results</h1>

    @if ($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach ($results as $result)
                <li>{{$result->weapon_name}}</li> <!-- Adjust this to display relevant data -->
            @endforeach
        </ul>
    @endif
@endsection

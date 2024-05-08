<h1>Livestock</h1>

<a href="{{ route('livestock.create') }}">Add Livestock</a>

<ul>
    @foreach ($livestocks as $livestock)

    <li>
    <a href="{{ route('livestock.show', $livestock) }}">{{ $livestock->species }}</a>
            <a href="{{ route('livestock.edit', $livestock) }}">Edit</a>
            <form action="{{ route('livestock.destroy', $livestock) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
    
    </li
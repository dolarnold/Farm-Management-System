<!-- resources/views/livestock/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Livestock Details</h1>

    <div>
        <p><strong>Species:</strong> {{ $livestock->species }}</p>
        <p><strong>Breed:</strong> {{ $livestock->breed }}</p>
        <!-- Add details for other attributes -->
    </div>

    <div>
        <a href="{{ route('livestock.edit', $livestock) }}">Edit</a>
        <form method="POST" action="{{ route('livestock.destroy', $livestock) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection

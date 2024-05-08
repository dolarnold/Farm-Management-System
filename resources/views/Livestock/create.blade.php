<!-- resources/views/livestock/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Add Livestock</h1>

    <form method="POST" action="{{ route('livestock.store') }}">
        @csrf
        <div>
            <label for="species">Species:</label>
            <input type="text" id="species" name="species" value="{{ old('species') }}">
            @error('species')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="breed">Breed:</label>
            <input type="text" id="breed" name="breed" value="{{ old('breed') }}">
            @error('breed')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <!-- Add fields for other attributes -->
        <div>
            <button type="submit">Add Livestock</button>
        </div>
    </form>
@endsection
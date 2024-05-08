<!-- resources/views/livestock/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Livestock</h1>

    <form method="POST" action="{{ route('livestock.update', $livestock) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="species">Species:</label>
            <input type="text" id="species" name="species" value="{{ $livestock->species }}">
            @error('species')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="breed">Breed:</label>
            <input type="text" id="breed" name="breed" value="{{ $livestock->breed }}">
            @error('breed')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <!-- Add fields for other attributes -->
        <div>
            <button type="submit">Update Livestock</button>
        </div>
    </form>
@endsection
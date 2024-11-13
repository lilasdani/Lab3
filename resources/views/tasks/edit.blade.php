@extends('layouts.app')

@section('title', 'Editare sarcină')

@section('content')
    <form action="{{ route('tasks.show', $tasks->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Titlu</label>
            <input type="text" id="title" name="title" value="{{ old('title', $tasks->title) }}" required>
        </div>

        <div>
            <label for="description">Descriere</label>
            <textarea name="description" id="description">{{ old('description', $tasks->description) }}</textarea>
        </div>

        <button type="submit" class="border border-green-500">Actualizează</button>
    </form>
@endsection



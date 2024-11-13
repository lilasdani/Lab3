@extends('layouts.app')

@section('title', 'Create Tasks')

@section('content')
<div>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>     
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</div>
@endsection


@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <div class="mb-6">
        <a class="bg-blue-200 p-3 rounded-md" href="{{ route('tasks.create') }}">Create Tasks</a>
    </div>
    <ul class="flex flex-col space-y-5">
        @foreach ($tasks as $task)
            <li class="bg-white p-5 rounded-lg shadow-md">
                <a href="{{ route('tasks.show', $task->id) }}" class="text-lg font-semibold text-blue-500 hover:text-blue-700">{{ $task->title }}</a>
                <div class="flex flex-row gap-3 mt-2">
                    <a href="{{ route('tasks.edit', $task->id) }}" class="bg-green-300 p-3 rounded-md hover:bg-green-400">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-200 p-3 rounded-md hover:bg-red-400">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

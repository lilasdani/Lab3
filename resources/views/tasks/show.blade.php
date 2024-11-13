@extends('layouts.app')

@section('title', $tasks->title)

@section('content')
    <div class="max-w-md mx-auto mt-10 p-5">
        <h1 class="font-bold text-blue-500 text-2xl">{{ $tasks->title }}</h1>
        <p>{{ $tasks->description }}</p>

        <h2 class="font-bold text-slate-600 text-xl">Categoria</h3>
        <p>{{ $tasks->category->name }}</p>

        <h2 class="font-bold text-slate-600 text-xl">Etichete</h3>
        <ul>
            @foreach ($tasks->tag as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection

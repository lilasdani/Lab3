<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // Obține toate sarcinile cu categoriile și etichetele asociate
        $tasks = Task::all();

        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function create(Request $request)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('tasks.create', [
            'tags' => $tags,
            
        ]);
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request){
            $task = Task::create($request->all());
           $task->tag()->attach($request->input('tags'));
       });

        return redirect()->route('tasks.index');
    }

    public function show($id)
    {
        $tasks = Task::with(['category','tag'])->findOrFail($id);

        return view('tasks.show', [
            'tasks' => $tasks,
        ]);
    }

    public function edit(int $id)
    {
         return view('tasks.edit', [
            'tasks' => Task::findOrFail($id),
         ]);
    }

    public function update(Request $request, $id)
    {
        $tasks = Task::findOrFail($id)->fill($request->all())->save();

        return redirect()->route('tasks.show', $id);
    }

    public function destroy(int $id)
    {
        Task::findOrFail($id)->delete();

        return redirect()->route('tasks.index');
    }
}

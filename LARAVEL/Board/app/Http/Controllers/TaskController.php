<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index() {

        // $tasks = DB::table('tasks')->orderBy('id', 'desc')->paginate(3);
        return view('list.index', [
            'tasks' => DB::table('tasks')->orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function create() {
    }

    public function store(Request $request) {
        $task = new Task([
            'title' => $request->title,
            'content' => $request->content,
            'writer' => $request->writer,
        ]);
       
        $task->save();

        $tasks = DB::table('tasks')->orderBy('id', 'desc')->paginate(3);
        return view('list.index', compact('tasks'));

    }

    public function search(Request $request) {
        $type = $request->searchOption;
        $word = $request->search;

        
        if($type === 'title')
        $tasks = DB::table('tasks')->where('title', $word)->paginate(3);

        elseif($type ==='content')
        $tasks = DB::table('tasks')->where('content', $word)->paginate(3);

        else
        $tasks = DB::table('tasks')->where('writer', $word)->paginate(3);

        return view('/list.search', compact('tasks', 'word'));
    }

    public function show(Task $task) {
       
        return view('/list.detail', compact('task'));
    }

    public function edit(Task $task) {
        
        return view('/list.edit', compact('task'));
    }

    public function update(Request $request, Task $task) {

        DB::table('tasks')
            ->where('id', $request->id)
            ->update(['title'=>$request->title, 'content'=>$request->content]);

            return redirect()->route('tasks.show', $task->id);
    }

    public function destroy(Task $task) {
        
        $task->delete();

        return redirect('/list');
    }
}

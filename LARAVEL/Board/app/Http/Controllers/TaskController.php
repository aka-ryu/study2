<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index() {

        $tasks = DB::table('tasks')->paginate(3);
        return view('list.index', compact('tasks'));
    }

    public function create() {
        return view('list.create');
    }

    public function store(Request $request) {
        $task = $request;
        Task::create($task);

        return redirect()->route('list.index');
    }
}

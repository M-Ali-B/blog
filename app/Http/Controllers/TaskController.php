<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {

        $tasks = Task::all();
        // return view('layouts.app');
        return view('layouts.Task.tasklist', ["tasks" => $tasks]);
    }

    public function create()
    {
        // return view('devices.create');
    }


    public function storeTask(Request $request)
    {

        $task = new Task();

        $task->name = $request->name;

        $task->save();

        return redirect('/tasks');
    }
}

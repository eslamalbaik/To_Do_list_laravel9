<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest('id')->get();
        return view ('task',compact('tasks'));
    }

    public function create()
    {
        return view ('task');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Task::create($input);
        return redirect('task');

    }

    // public function edit($id)
    // {
    //     $tasks=Task::find($id);
    //     return view('task',compact('tasks'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $tasks=Task::find($id);
    //     $input = $request->all();
    //     $tasks->update($input);
    //     return redirect ('task');
    // }

    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('task');
    }
}

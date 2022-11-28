<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    public function addTask()
    {
        return view('add-task');
    }

    public function storeTask(Request $request)
    {
        $taskCount = Task::count();
        
        $task = new Task();
        $task->name = $request->name;
        $task->priority = $taskCount === 0? 1 : $taskCount + 1;
        $task->save();

        return redirect()->back()->with('status', 'Task stored successfully');
    }

    public function editTask($id)
    {
        $task = Task::find($id);
        
        return view('edit-task', compact('task'));
    }


    public function updateTask(Request $request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->name;
        $task->save();

        return redirect()->back()->with('status', 'Task updated successfully');
    }
}

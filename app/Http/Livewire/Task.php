<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public function render()
    {
        $tasks = TaskModel::orderBy('priority', 'asc')->get();

        return view('livewire.task', compact('tasks'));
    }

    public function updateTaskPriority($tasks)
    {
        foreach ($tasks as $value) {
           $task = TaskModel::find($value['value']);
           $task->priority = $value['order'];
           $task->save();
        }
        
        session()->flash('message', 'Order successfully updated.');
    }

    public function deletTask($priority)
    {
        TaskModel::wherePriority($priority)->delete();

        $tasks = TaskModel::where('priority','>', $priority)->get();
        foreach ($tasks as $task) {
           $task->priority = $task->priority-1;
           $task->save();
        }

        session()->flash('message', 'Task deleted successfully.');
    }
}

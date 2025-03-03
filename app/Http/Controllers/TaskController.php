<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home(){
        $tasks = Task::all();
        return view('home', compact('tasks'));
    }

    public function create(){
        return view('create');
    }

    public function edit(Task $task){
        return view('edit', compact('task'));
    }

    public function delete(Task $task){
        return view('delete', compact('task'));
    }

    public function savecreate(){
        $input = request()->all();
        $task = new Task;
        $task->title = $input['title'];
        $task->description = $input['body'];
        $task->completed = 'not done';
        $task->save();

        return redirect()->route([TaskController::class, 'home']);
    }

    public function saveEdit(){
        $task = Task::findOrFail(request()->get('id'));
        $task->title = request()->get('title');
        $task->description = request()->get('body');
        $task->completed = request()->get('done');


        $task->save();

        return redirect()->route([TaskController::class, 'home']);

    }


 public function doDelete()
 {
 $task = Task::findOrFail(request()->get('id'));
 $task->delete();

 return action('tasks.home');
 }
}

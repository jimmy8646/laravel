<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    function index() {
        $tasks=Task::orderBy('created_at','DESC')->get();

        $data=['tasks'=>$tasks];

        return view('tasks.index',$data);
    }
    function store(Request $request){
        $this->validate($request,['title'=>'required']);

        Task::create($request->all());
        return redirect('/');
    }
    function update(Task $task){

        $task->completed=TRUE;
        $task->save();

        return redirect('/');
    }
    function destroy(Task $task){
        $task->delete();
        return redirect('/');
    }
}

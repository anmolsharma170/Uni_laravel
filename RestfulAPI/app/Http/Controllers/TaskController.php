<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function index(){
        return response()->json(
            task::all()
        );
    }
    public function store(Request $request){    //post/task
        $tasks = task::create([
            'title'=>$request->title
        ]);
        return response()->json($tasks);
    }

    public function update(Request $request,$id){   //put/task/{id}
        $tasks = task::findOrFail($id);
        $tasks->update([
            'title'=>$request->title
        ]);
        return response()->json($tasks);
    }

    public function distroy($id){
        $tasks = task::findOrFail($id);
        $task->delete();
        return response()->json([
            'message'=>'Task deleted'
        ]);
    }

}

<?php

namespace App\Http\Controllers;
use App\Models\Todolist;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    //

    public function EditTodo($id)
    {
       $edit_todo = Todolist::findOrFail($id);
       return view('todo_edit', compact('edit_todo'));
        # code...
    }
    public function UpdateTodo(Request $request)
    {
        $todo_id = $request->id;
        Todolist::findOrFail($todo_id)->update([
            "todo" =>$request->todo,
        ]);
        return redirect()->route('frontend.index');
        # code...
    }

    public function StoreTodo(Request $request){
        $request->validate([
            'todo'=>'required'
        ]);
        Todolist::insert([
            'todo' => $request->todo,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function DeleteTodo($id)
    {
      
        Todolist::findOrFail($id)->delete();
    
    //     $nottification = array(
    //         'message' => "Portfolio delected Successfully",
    //         'alert-type' => 'success'
    //    );
    
       return redirect()->back();
        # code...
        # code...
    }
}

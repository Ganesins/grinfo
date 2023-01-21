<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function entry(){
        return view('task');

    }



    public function list1(){
        $news=task::select("*")->orderByDesc("id")->get();
        return view('task',['news'=>$news]);

    }
    public function insert(Request $request){

        $request->validate([
            'name'=>'required',
        ]);

        // print_r($request->all());


        $name=$request->input('name');

        $task=new task;
        $task->name=$name;

        $task->save();

        return redirect('/list1');
    }

   public function delete($id){
        $new=task::find($id);
        $new->delete($new->id);

        return redirect('/list1');

    }




}

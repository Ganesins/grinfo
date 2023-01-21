<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class NewsController extends Controller
{
    

    public function list(){
        $news=task::all();
        return view('list',['news'=>$news]);

    }
     public function delete($id){
        $new=task::find($id);
        $new->delete($new->id);

    }


}

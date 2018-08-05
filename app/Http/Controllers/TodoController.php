<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function allTodos()
    {
        $todoos = DB::select("SELECT * FROM todo");

        return $todoos;
    }

    public function insert(Request $request, $id, $task_title){
        // $id = $request->id;
        // $task_title = $request->task_title;

        // dd($request->input('task_title'));

        // echo $task_title;

        if(DB::insert('insert into todo (id, task_title) values (?, ?)', [$id, $task_title])){
            //success
        } else{
            //error
        }
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function myTodo()
    {
        $todo = Todo::all();
        $todo = Todo::latest()->limit(5)->get();
        //return $todo;
        return view('todo/todoHome', ['todo' => $todo]);
    }

    public function todoAdd()
    {
        return view('todo/todoAdd');
    }
}

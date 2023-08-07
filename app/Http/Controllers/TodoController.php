<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class TodoController extends Controller
{
    public function myTodo()
    {
        $todo = Todo::all();
        $todo = Todo::latest()->limit(5)->get();
        //return $todo;
        return view('todo/todoHome', ['todo' => $todo]);
    }

    public function todoTask()
    {
        return view('todo/todoAdd');
    }

    public function todoAdd(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'team_member'
        //     => 'required|string|max:255',
        //     'task' => 'required',
        //     'priority' => 'required',
        // ]);
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'team_member' => 'required',
            'task' => 'required',
            'priority' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('public/images');

            // Create a new Todo instance and save the image path
            $todo = new Todo();
            $todo->image = $path;
            $todo->team_member = $request('team_member');
            $todo->task = $request('task');
            $todo->priority = $request('priority');
            $todo->save();
        }
        return redirect()->route('todo')->with('success', 'user added successfully');
    }
}

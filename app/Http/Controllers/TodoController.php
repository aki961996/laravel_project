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
        $todo = Todo::latest()->paginate(3);
        //return $todo;
        return view('todo/todoHome', ['todo' => $todo]);
    }

    public function todoTask()
    {
        return view('todo/todoAdd');
    }

    public function todoAdd(Request $request)
    {
        //return request()->all();
        $request->validate([
            'team_member' => 'required',
            'task' => 'required',
            'priority' => 'required',

        ]);
        $input = [
            'team_member' => request('team_member'),
            'task' => request('task'),
            'priority' => request('priority'),

        ];

        // var_dump($input);
        if ($request->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'todo_pic_' . time() . '.' . $extension;
            //return $fileName;
            request('image')->storeAs('images', $fileName);
            // $path = $image->store('images', 'public');
            $input['images'] = $fileName;
        }
        // $input = [
        //     'team_member' => request('team_member'),
        //     'task' => request('task'),
        //     'priority' => request('priority'),
        //     'images' => $fileName
        // ];

        $todo = Todo::create($input);
        //return $todo;
        return redirect()->route('todo')->with('success', 'Task Added successfully');
    }

    //todoedit //single user
    public function todoEdit($todo_id)
    {
        $todo = Todo::find(decrypt($todo_id));
        return view('todo/todoEditPage', ['todo' => $todo]);
    }

    public function todoUpdate(Request $request)
    {
        $todo_id = request('todo_id');
        $todo_id = decrypt($todo_id);
        $todo = Todo::find($todo_id);

        if ($request->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'todo_pic_' . time() . '.' . $extension;
            //return $fileName;
            request('image')->storeAs('images', $fileName);
            // $path = $image->store('images', 'public');

        }
        if (!empty($fileName)) {
            $todo->update([
                'team_member' => request('team_member'),
                'task' =>   request('task'),
                'images' => $fileName,

                'priority' => request('priority')

            ]);
        } else {
            $todo->update([
                'team_member' => request('team_member'),
                'task' =>   request('task'),
                'priority' => request('priority')

            ]);
        }
        // return $todo;

        return redirect()->route('todo')->with('success', 'Todo updated successfully');
    }


    //query learinig
    public function qu()
    {

        $todo = new Todo();
        $data  = $todo->getData();
        //return $data;
        //  $activeCustomers = Todo::select('team_member', 'task', 'priority')->get();
        // return  $activeCustomers;
        //  $activeCustomers = Todo::select('team_member')->get();
        // $activeCustomers = Todo::where('team_member', 'demo')->get();
        // return $activeCustomers;
        return view('dummyQ.customers', ['customers' => $data]);
    }
}

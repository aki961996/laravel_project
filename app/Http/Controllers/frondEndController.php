<?php

namespace App\Http\Controllers;

use App\Models\User;  // Import the User class
use App\Http\Requests\StorePostRequest;

// use Illuminate\Http\StorePostRequest;
use Illuminate\Http\RedirectResponse;

class frondEndController extends Controller
{

    //read
    public function homePage()
    {
        //$user = User::all();
        $user = User::find(123);
        $user = User::where('user_id', 123)->first();
        $user = User::active()->latest()->limit(10)->skip(5)->get();
        //return $user;
        return view('home', ['user' => $user]);
    }


    //add
    public function userAdd()
    {
        return view('user/userAdd');
    }

    //addpost
    public function store(StorePostRequest $request): RedirectResponse
    {

        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'password' => 'required|min:5',
        //     'email' => 'required|email|unique:users'
        // ], [
        //     'name.required' => 'Name field is required.',
        //     'password.required' => 'Password field is required.',
        //     'email.required' => 'Email field is required.',
        //     'email.email' => 'Email field must be email address.'
        // ]);

        // Retrieve the validated input data...

        $validated = $request->validated();

        $validated = $request->safe()->only(['name', 'email']);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'date_of_birth' => $validated['date_of_birth'],
            'status' => $validated['status'],

        ]);
        return ($user);

        return redirect()->route('home')->with('success', 'user added successfully');
    }


    public function aboutPage()
    {
        return view("about");
    }
    public function contactPage()
    {
        return view("contact");
    }
}

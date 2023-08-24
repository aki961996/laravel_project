<?php

namespace App\Http\Controllers;

use App\Events\UserCreatedEvent;
use App\Models\User;
use App\Models\Client;
use App\Models\UserAddress;

// Import the User class

use Illuminate\Http\StorePostRequest;
use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class frondEndController extends Controller
{

    //read
    public function homePage()
    {
        //active users mathrem eduthitulu 
        //$user = User::all();
        // $user = User::find(123);
        // $user = User::where('user_id', 123)->first();
        $user = User::withCount('orders')->active()->latest()->paginate(7);
        //$user = User::paginate(7);
        //return $user;
        session()->put('user_name', 'aki');
        session()->put('user_id', 45);

        return view('home', ['user' => $user]);
    }


    //add
    public function userAdd()
    {
        // Artisan::call('delete:inactive-users');
        session()->get("user_name");
        return view('user/userAdd');
    }

    //addpost
    public function store(Request $request): RedirectResponse
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'date_of_birth' => 'required|date',
            'status' => 'required',
        ]);


        $user = User::create([
            'name' => request('name'),
            'email' =>   request('email'),
            'date_of_birth' => request('date_of_birth'),
            'status' => request('status')

        ]);

        // Mail::to($user->email)
        //     // ->cc('sajinjohn.bharathi@gmail.com')
        //     ->send(new WelcomeEmail($user));
        // // return ($user);
        UserCreatedEvent::dispatch($user);
        return redirect()->route('home')->with('success', 'user added successfully');
    }

    //edit
    public function editUser($user_id)
    {
        // return $user_id;
        $user = User::find(decrypt($user_id));
        //return $user;
        return view('user/edit', ['user' => $user]);
    }

    //update user
    public function updateUser()
    {
        //user id get cheyth
        $user_id = request('user_id');
        //then userid decrypt cheyth
        $user_id = decrypt(($user_id));
        // return $user_id;
        // ah id vach data motham eduth
        $user = User::find($user_id);
        $user->update([
            'name' => request('name'),
            'email' =>   request('email'),
            'date_of_birth' => request('date_of_birth'),
            'status' => request('status')

        ]);

        return redirect()->route('home')->with('success', 'user updated successfully');
    }

    //delete user
    public function deleteUser($user_id)
    {

        $user_id = decrypt(($user_id));
        $user = User::find($user_id);
        $user->delete();
        return redirect()->route('home')->with('success', 'User deleted successfully');
    }

    public function aboutPage()
    {
        return view("strip");
    }
    public function contactPage()
    {
        return view("contact");
    }

    //users
    public function investorsPage()
    {

        // $user = User::where('user_id', 123)->first();
        $client = Client::active()->latest()->paginate(7);
        //return $client;
        return view('user/investorsList', ['client' => $client]);
    }

    public function investorsAdd()
    {
        return view('user/clientAdd');
    }


    public function investorsStore(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'Street' => 'required',
            'apartment' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'status' => 'required',
        ]);
        Client::create([
            'first_name' => request('name'),
            'last_name' => request('lname'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'Street' => request('Street'),
            'apartment' => request('apartment'),
            'city' => request('city'),
            'State' => request('state'),
            'zip_code' => request('zip_code'),
            'status' => request('status'),
        ]);

        return redirect()->route('user.investors')->with('success', 'Investor added successfully');
    }

    public function investorEdit($client_id)
    {
        $client_id = Client::find(decrypt($client_id));
        //return $client_id;
        return view('user/invosterEdit', ['client' => $client_id]);
    }

    public function updateInvoster()
    {
        $client_id = request('client_id');
        $client_id = decrypt($client_id);
        $allData = Client::find($client_id);
        //return $allData;
        $allData->update([
            'first_name' => request('name'),
            'last_name' =>   request('lname'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'status' => request('status'),

        ]);
        return redirect()->route('user.investors')->with('success', 'Investor Updated successfully');
    }

    public function deleteInverstor()
    {
        $client_id = request('client_id');
        $client_id = decrypt($client_id);
        $client_id = Client::find($client_id);
        // return $client_id;
        $client_id->delete();
        return redirect()->route('user.investors')->with('success', 'Investor Deleted successfully');
    }

    //todo 

    //view user this function relation ship 
    public function viewUser($user_id)
    {

        //actully evide user model mathre vilikunnnulu so order ntem model data view lek kitan ah hasmany hasone cheythath


        $user = User::find(decrypt($user_id));
        //return $user;
        return view('view/userView', ['user' => $user]);
    }
}

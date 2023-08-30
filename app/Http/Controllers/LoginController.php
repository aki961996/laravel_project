<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController
{
   public function loginPage()
   {
      return view('login/login');
   }
   public function doLogin()
   {
      $input = [
         'email' => request('email'),
         'password' => request('password')
      ];

      if (auth()->attempt($input)) {
         return redirect()->route('home')->with('message', 'Login success');
      } else {
         return redirect()->route('login')->with('message', 'Login Invalid');
      }

   }
   public function doLogout()
   {
      auth()->logout();
      return redirect()->route('login')->with('logout', 'Logout successfully ');
   }
}

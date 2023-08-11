<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController 
{
   public function loginPage(){
    return view('login/login');
   }
}

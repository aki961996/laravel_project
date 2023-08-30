<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo()
    {

        $demo = Demo::find(1);
        $firstName = $demo->bbbb_name;
        $address = $demo->address;
        $a = [

            $firstName,
            $address

        ];

        return $a[1];
    }

    public function emailData()
    {
        $demo = new Demo;
        $demo = Demo::find(1);
        //return $demo;
        $demo->email_address = 'user@gmail.com';
        $demo->save();
    }
}

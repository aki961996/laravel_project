<?php

namespace App\Http\Controllers;

use App\Models\User;

class ApiController
{
    public function GetProfile()
    {
        $user_id = request('user_id');
        $user_id = User::find($user_id);
        return response()->json([
            'status' => 200,
            'data' => [
                'profile' => $user_id
            ],
            'msg' => 'profile data'
        ]);
    }
}

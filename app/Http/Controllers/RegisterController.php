<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request) {
        
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'nullable',
            'email' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User();

        if(!empty($request['last_name']) || $request['last_name'] != ""){
            $user->name = $request['first_name'] . " " . $request['last_name'];
        }else{
            $user->name = $request['first_name'];
        }

        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        
        $user->save();
    }
}

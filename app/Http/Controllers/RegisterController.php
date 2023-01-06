<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function buyer(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5',
            'confirm_password' => 'required'
        ]);
        
        if($request->password !== $request->confirm_password){

            session()->flash('passerror', 'Password and Confirm does not match!');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 3
        ]);

        if($user){

            session()->flash('registered', 'Your account registered successfully');

            return redirect('/login');
        }

        return redirect('/register/buyer');
    }
}

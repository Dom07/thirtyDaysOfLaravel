<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(Request $request){
        return view("auth.register");
    }

     public function store(Request $request){
        $attributes = request()->validate(
            [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', Password::min(6), 'confirmed']
            ]
        );

        $user = User::create($attributes);
        
        Auth::login($user);
        
        return redirect('/jobs');
    }
}

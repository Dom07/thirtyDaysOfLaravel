<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(Request $request)
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $attribute = request()->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if(!Auth::attempt($attribute)){
            throw ValidationException::withMessages([
                "email" => "Sorry, credentials don't match"
            ]);
        }

        request()->session()->regenerate();
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect("/");
    }
}
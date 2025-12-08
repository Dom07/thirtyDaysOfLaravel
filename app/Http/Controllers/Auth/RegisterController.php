<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(Request $request){
        return view("auth.register");
    }

     public function store(Request $request){
        dd("we are here... with form data!");
    }
}

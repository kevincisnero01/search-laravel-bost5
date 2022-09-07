<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('id','DESC')->paginate(10);
        return view('users',[
            'users' => $users
        ]);
    }

}
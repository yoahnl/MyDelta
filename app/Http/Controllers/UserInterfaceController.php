<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserInterfaceController extends Controller
{
    public function test()
    {
        return view('test');
    }

    public function UserPanel()
    {
        $user = User::all();
        return view('user.UserPanel', compact('user'));
    }
}

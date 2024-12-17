<?php

namespace App\Http\Controllers;

abstract class Controller
{
    if($auth_ok)
{
    session(['user' => ['username' => 'admin', 'password' => 'admin'] ]); // set session data
    return view('dasboard_admin');
}
}

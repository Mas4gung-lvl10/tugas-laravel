<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        return view('home');
    }
}

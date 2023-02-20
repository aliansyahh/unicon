<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingsoonController extends Controller
{
    public function comingsoon()
    {
        return view('comingsoon::comingsoon');
    }
}

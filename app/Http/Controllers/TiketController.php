<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function tiket()
    {
        return view('assets.tiket.form_tiket');
    }
}

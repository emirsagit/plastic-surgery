<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PressController extends Controller
{
    public function index()
    {
        return view('press.index');
    }
}

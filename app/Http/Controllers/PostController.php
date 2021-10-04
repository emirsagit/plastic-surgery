<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $blogs = array();
        return view('blog.index', compact('blogs'));
    }
}

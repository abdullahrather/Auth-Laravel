<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    public function color()
    {
        return view('admin.utilities-color');
    }
    public function border()
    {
        return view('admin.utilities-border');
    }
    public function animation()
    {
        return view('admin.utilities-animation');
    }
    public function other()
    {
        return view('admin.utilities-other');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function chart()
    {
        return view('admin.charts');
    }
}

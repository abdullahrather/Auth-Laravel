<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function button()
    {
        return view('admin.buttons');
    }

    public function card()
    {
        return view('admin.cards');
    }
}

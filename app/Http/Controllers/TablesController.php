<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function table()
    {
        return view('admin.tables');
    }
}

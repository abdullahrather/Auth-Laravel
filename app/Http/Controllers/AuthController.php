<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate(
            [
                'hei_name' => 'required',
                'rep_name' => 'required',
                'rep_designation' => 'required',
                'email' => 'required',
                'rep_designation' => 'required',
                'rep_phone' => 'required',
                'rep_sec_phone' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        //Insert Query
        $customer = new User;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->DOB = $request['DOB'];
        $customer->password = password_hash($request['password'], (PASSWORD_DEFAULT));
        $customer->grp_id = $request['grp_id'];
        $customer->save();
    }
}

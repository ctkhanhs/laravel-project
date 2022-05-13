<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function login(){
        // \App\Models\User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        return view('admin.login');
    }

    public function check_login(Request $req){
        $data = $req->only('email','password');
        $check = Auth::attempt($data);
        if($check){
            return redirect()->route('admin.index');
        }
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

    
}

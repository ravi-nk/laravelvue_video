<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function login(){
        return view('auth.admin.login');
    }

    public function add_item(){
        return view('admin.add_item');
    }
}

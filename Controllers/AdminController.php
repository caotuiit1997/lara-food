<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_login(){
    	return view('admin.admin_login');
    }

    public function admin_index(){
    	return view('admin.admin_home');
    }
}

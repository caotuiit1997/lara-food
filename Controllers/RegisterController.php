<?php

namespace App\Http\Controllers;
use Image;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
    	return view('register.register');
    }

    public function store(Request $request) {
    	$user = new User();
    	if() {

    	}
    	$user->name = $request->get('name');
    	$user->name = $request->get('email');
    	$user->name = $request->get('address');
    	$user->name = $request->get('password');
    }
}

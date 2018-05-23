<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('user.index', ['users' => $users]);
    }

    public function create(){
    	return view('user.create');
    }

    public function store(Request $request){
    	
    }

    public function edit($id){
    	$users = User::find($id);
    	return view('user.edit');
    }

    public function update(Request $request, $id){

    }

    public function destroy($id) {

    }
}

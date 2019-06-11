<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    //
    public function __construct(){
       $this->middleware(['auth','role:admin']); 
   }
	public function admin(){
		return view('admin.panel.dashboard');
	}

	public function adminregister(){
		return view('admin.panel.adminregister');
	}


	public function adminstore(Request $request){
		
		$user=User::create([
			'name'=>$request->name,
			'email'=>$request->email,
			'password'=>bcrypt($request->password),
			'role'=>'admin'
		]);
		$user->save();
	}
    
}

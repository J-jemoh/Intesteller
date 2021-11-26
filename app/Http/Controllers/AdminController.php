<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\User;
class AdminController extends Controller

{
	 public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    
    public function dashboard()
    {
    	$contactus=Contactus::all();
    	$users=User::orderBy('created_at','desc')->get();
        return view('admin.dashboard',compact('contactus','users'));
    }
}

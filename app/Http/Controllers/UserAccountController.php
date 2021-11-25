<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class UserAccountController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    public function myaccount(){
    	
    	return view('Users.dashboard');
    }
}

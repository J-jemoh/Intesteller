<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller

{
	 public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}

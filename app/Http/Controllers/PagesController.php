<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

    	return view('Frontend.index');
    }
    public function aboutus(){

    	return view('Frontend.about-us');
    }
    public function services(){

    	return view('Frontend.services');
    }
    public function contactus(){

    	return view('Frontend.contactus');
    }
    public function localtraining(){

        return view('Frontend.local');
    }
    public function adverts(){

        return view('Frontend.advert');
    }
    public function jobseeker(){
        return view('Frontend.jobseeker');
    }

}

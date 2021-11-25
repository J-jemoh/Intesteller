<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactController extends Controller
{
    
    public function savecontact(Request $request){
    	$this->validate($request,[

    		'email'=>'required',
    		'phonenumber'=>'required',
    		'subject'=>'required',
    		'message'=>'required',
    	]);

    	$contact=new Contactus;
    	$contact->email=$request->email;
    	$contact->phonenumber=$request->phonenumber;
    	$contact->subject=$request->subject;
    	$contact->message=$request->message;
    	$contact->save();
    	return redirect()->back()->with('success','You have successfully send and enquiry. Our Representative will be in touch with you shortly.');
    }
}

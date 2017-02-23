<?php

namespace Cambalachea\Http\Controllers;

use Illuminate\Http\Request;
use Cambalachea\Emails;

class EmailsController extends Controller
{
    public function create(Request $request){
   		$email = Emails::create([
   				'email' => $request->input('email')
   		]);
   		
   		$email->save();
   		
   		return view('send');
   	
   }
}

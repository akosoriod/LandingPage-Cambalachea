<?php

namespace Cambalachea\Http\Controllers;

use Illuminate\Http\Request;
use Cambalachea\Emails;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Emails = Emails::all();
        return view('home',compact('Emails'));
    }
}

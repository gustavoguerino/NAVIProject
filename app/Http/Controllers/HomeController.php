<?php

namespace App\Http\Controllers;
use App\Address;
use Auth;
use Illuminate\Http\Request;

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
        $address = Address::where('user_id', '=', Auth::user()->id)->firstOrFail();
        return view('home',get_defined_vars());
    }
}

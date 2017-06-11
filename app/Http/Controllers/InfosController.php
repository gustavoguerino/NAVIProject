<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Address;
use Auth;

class InfosController extends Controller
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
    
    public function GetInfoPersonal()
    {
        return view('personinfo');
    }
    public function GetInfoAddress()
    {
        return view('addressinfo');
    }
    public function UpdateInfoPersonal(){
        $validator = Validator::make(Input::all(), [
            'name' => 'string',
        ]);
        if ($validator->fails())
        {
            return redirect()->route('formPersonal')->withErrors($validator);
        }
        Auth::user()->update(Input::all());
        return redirect()->route('home');
    }
    
    public function UpdateInfoAddress(){
        $validator = Validator::make(Input::all(), [
            'cep' => 'string|formato_cep',
        ]);
        if ($validator->fails())
        {
            return redirect()->route('formAddress')->withErrors($validator);
        }
        $address = Address::where('user_id', '=', Auth::user()->id)->firstOrFail();
        $address->update(Input::all());
        return redirect()->route('home');
    }
}

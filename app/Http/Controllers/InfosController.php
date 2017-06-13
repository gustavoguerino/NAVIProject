<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Address;
use Auth;
use DateTime;
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
        $old = Auth::user();
        return view('personinfo',get_defined_vars());
    }
    public function GetInfoAddress()
    {
        $old = Address::where('user_id', '=', Auth::user()->id)->firstOrFail();
        return view('addressinfo',get_defined_vars());
    }
    public function DelInfoPersonal()
    {
        $user = Auth::user();
        $user->name = null;
        $user->cpf = "";
        $user->rg = "";
        $user->birth_date = null;
        $user->genre = "";
        $user->save();
        return redirect()->route('home');
    }
    public function DelInfoAddress()
    {
        $address = Address::where('user_id', '=', Auth::user()->id)->firstOrFail();
        $address->cep = "";
        $address->street = "";
        $address->number = "";
        $address->neighborhood = "";
        $address->city = "";
        $address->uf = "";
        $address->save();
        return redirect()->route('home');
    }
    public function UpdateInfoPersonal(){
        $dados = Input::all();
        $validator = Validator::make($dados, [
            'name' => 'required|string',
            'cpf' => 'required|string',
            'rg' => 'required|string',
            'birth_date' => 'required|string',
            'genre' => 'required|string',
        ]);
        if ($validator->fails())
        {
            return redirect()->route('formPersonal')->withErrors($validator);
        }
        $dados['birth_date'] = DateTime::createFromFormat('d/m/Y', $dados['birth_date'])->format('Y-m-d');
        Auth::user()->update($dados);
        return redirect()->route('home');
    }

    public function UpdateInfoAddress(){
        $validator = Validator::make(Input::all(), [
            'cep' => 'required|string|formato_cep',
            'street' => 'required|string|max:250',
            'neighborhood' => 'required|string|max:250',
            'number' => 'required|string|max:12',
            'city' => 'required|string|max:100',
            'uf' => 'required|string|max:3',
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

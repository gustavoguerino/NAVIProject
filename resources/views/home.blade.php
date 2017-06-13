@extends('layouts.app')
@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Suas informações</div>

                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <table class="table  table-condensed">
                                    <tbody>
                                    <tr>
                                        <td>Nome completo:</td>
                                        <td>{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>CPF:</td>
                                        <td>{{ Auth::user()->cpf }}</td>
                                    </tr>
                                    <tr>
                                        <td>RG:</td>
                                        <td>{{ Auth::user()->rg }}</td>
                                    </tr>
                                    <tr>
                                        <td>Genero:</td>
                                        <td>{{ Auth::user()->genre }}</td>
                                    </tr>
                                    <tr>
                                        <td>Data de Nacimento:</td>
                                        <td>{{ Auth::user()->birth_date }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('formPersonal') }}">
                                    <button type="button" class="btn btn-warning btn-block">
                                        Editar
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-condensed">
                                    <tbody>
                                    <tr>
                                        <td>CEP:</td>
                                        <td>{{ $address->cep }}</td>
                                    </tr>
                                    <tr>
                                        <td>Rua:</td>
                                        <td>{{ $address->street }}</td>
                                    </tr>
                                    <tr>
                                        <td>Numero:</td>
                                        <td>{{ $address->number }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bairro:</td>
                                        <td>{{ $address->neighborhood }}</td>
                                    </tr>
                                    <tr>
                                        <td>Cidade:</td>
                                        <td>{{ $address->city }}</td>
                                    </tr>
                                    <tr>
                                        <td>UF:</td>
                                        <td>{{ $address->uf }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('formAddress') }}">
                                    <button type="button" class="btn btn-info btn-block">
                                        Editar
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

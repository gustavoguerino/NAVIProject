@extends('layouts.app')
@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Informações pessoais</h2><hr>
                                @if (Auth::user()->name)
                                <table class="table  table-striped">
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
                                        <td>{{ Carbon\Carbon::parse(Auth::user()->birth_date)->format('d-m-Y') }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('formPersonal') }}">
                                    
                                    <button type="button" class="btn btn-success">
                                        Editar
                                    </button>
                                </a>
                                <a href="{{ route('formPersonalDel') }}">
                                    <button type="button" class="btn btn-danger">
                                        Remover
                                    </button>
                                </a>
                                @else
                                <div class="text-center">
                                    <h2>Conte um pouco mais sobre você!</h2>
                                    <a href="{{ route('formPersonal') }}">
                                        <button type="button" class="btn btn-success">
                                            Adicionar informações pessoais
                                        </button>
                                    </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Endereços</h2><hr>
                                @if ($address->cep)
                                <table class="table table-striped">
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
                                        
                                        <button type="button" class="btn btn-success">
                                            Editar
                                        </button>
                                    </a>
                                    <a href="{{ route('formAddressDel') }}" >
                                        <button type="button" class="btn btn-danger">
                                            Remover
                                        </button>
                                    </a>
                                @else
                                <div class="text-center">
                                    <h2>Qual seu endereço?</h2>
                                    <a href="{{ route('formAddress') }}">
                                        <button type="button" class="btn btn-success">
                                            Adicionar informações de endereçamento
                                        </button>
                                    </a>
                                </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

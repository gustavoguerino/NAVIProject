@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifique suas informações</div>

                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5">
                                <a href="{{ route('formPersonal') }}">
                                    <button type="button" class="btn btn-info btn-block">
                                        Pessoais
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-5">
                                <a href="{{ route('formAddress') }}">
                                    <button type="button" class="btn btn-info btn-block">
                                        Endereçamento
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

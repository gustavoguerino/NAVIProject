@extends('layouts.app')
@section('js')
    <script src="{{ asset('js/viacep.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/masks.js') }}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Endereço</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('formAddressPost') }}">
                        {{ csrf_field() }}
                        <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="cep">CEP</label>  
                        <div class="col-md-6">
                        <input id="cep" name="cep" type="text" required placeholder="" class="form-control input-md"  onblur="pesquisacep(this.value);">
                            @if ($errors->has('cep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cep') }}</strong>
                                    </span>
                            @endif    
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="rua">Rua</label>  
                        <div class="col-md-6">
                        <input id="street" name="street" type="text" required placeholder="" class="form-control input-md" > 
                            @if ($errors->has('street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                            @endif 
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="numero">Numero</label>  
                        <div class="col-md-6">
                        <input id="number" name="number" type="text" required placeholder="" class="form-control input-md" >
                            @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                            @endif 
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="bairro">Bairro</label>  
                        <div class="col-md-6">
                        <input id="neighborhood" name="neighborhood" required type="text" placeholder="" class="form-control input-md" >
                            @if ($errors->has('neighborhood'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('neighborhood') }}</strong>
                                    </span>
                            @endif 
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="cidade">Cidade</label>  
                            <div class="col-md-6">
                                <input id="city" name="city" type="text" required placeholder="" class="form-control input-md" >   
                            @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                            @endif 
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="cidade">UF</label>  
                            <div class="col-md-2">
                                <input id="uf" name="uf" type="text" required placeholder="" class="form-control input-md" >  
                            @if ($errors->has('uf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uf') }}</strong>
                                    </span>
                            @endif   
                            </div>
                        </div>
                        
                        <!-- Button (Double) -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="savebutton"></label>
                        <div class="col-md-8">
                            <button id="savebutton" name="savebutton" class="btn btn-success">Salvar</button>
                            <a href="{{ route('home') }}"> Cancelar</a>                        
                            </div>
                        </div>
                                                
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('js')
    <script src="{{ asset('js/viacep.js') }}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Endereço</div>

                <div class="panel-body">
                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="cep">CEP</label>  
                        <div class="col-md-6">
                        <input id="cep" name="cep" type="text" placeholder="" class="form-control input-md" required="" onblur="pesquisacep(this.value);">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="rua">Rua</label>  
                        <div class="col-md-6">
                        <input id="rua" name="rua" type="text" placeholder="" class="form-control input-md" required="">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="numero">Numero</label>  
                        <div class="col-md-6">
                        <input id="numero" name="numero" type="text" placeholder="" class="form-control input-md" required="">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="complemento">Complemento</label>  
                        <div class="col-md-6">
                        <input id="complemento" name="complemento" type="text" placeholder="" class="form-control input-md" required="">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="bairro">Bairro</label>  
                        <div class="col-md-6">
                        <input id="bairro" name="bairro" type="text" placeholder="" class="form-control input-md" required="">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="cidade">Cidade</label>  
                            <div class="col-md-6">
                                <input id="cidade" name="cidade" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="cidade">UF</label>  
                            <div class="col-md-2">
                                <input id="uf" name="uf" type="text" placeholder="" class="form-control input-md" required="">    
                            </div>
                        </div>
                        
                        <!-- Button (Double) -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="savebutton"></label>
                        <div class="col-md-8">
                            <button id="savebutton" name="savebutton" class="btn btn-success">Salvar</button>
                            <button id="cancelbutton" name="cancelbutton" class="btn btn-inverse">Cancelar</button>
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

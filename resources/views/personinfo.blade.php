@extends('layouts.app')
@section('js')
    <script src="{{ asset('js/personinfo.js') }}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informações Pessoais</div>

                <div class="panel-body">
                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="fullname">Nome completo</label>  
                        <div class="col-md-8">
                        <input id="fullname" name="fullname" type="text" placeholder="" class="form-control input-md" required="">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="rg">RG</label>  
                        <div class="col-md-5">
                        <input id="rg" name="rg" type="text" placeholder="" class="form-control input-md" required="">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="cpf">CPF</label>  
                        <div class="col-md-5">
                        <input id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md" required="">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="nascimento">Data de Nascimento</label>  
                        <div class="col-md-4">
                        <input id="nascimento" name="nascimento" type="text" placeholder="" class="form-control input-md" required="">
                            
                        </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="genero">Gênero</label>
                        <div class="col-md-4">
                            <select id="genero" name="genero" class="form-control">
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            </select>
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
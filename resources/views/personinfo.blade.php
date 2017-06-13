@extends('layouts.app')
@section('js')
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/masks.js') }}"></script>
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Informações Pessoais</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ route('formPersonalPost') }}">
						{{ csrf_field() }}
						<fieldset>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="name">Nome completo</label>  
								<div class="col-md-8">
									<input id="name" name="name" type="text" placeholder="Ex.: José Osvaldo" required="" value="{{ $old->name }}" class="form-control input-md" >
									@if ($errors->has('name'))
									<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
									</span>
									@endif  
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="rg">RG</label>  
								<div class="col-md-5">
									<input id="rg" name="rg" type="text" placeholder="Ex.: 123123123" required="" value="{{ $old->rg }}" class="form-control input-md" >
									@if ($errors->has('rg'))
									<span class="help-block">
									<strong>{{ $errors->first('rg') }}</strong>
									</span>
									@endif  
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="cpf">CPF</label>  
								<div class="col-md-5">
									<input id="cpf" name="cpf" type="text" placeholder="Ex.: 123.456.789-01" required="" value="{{ $old->cpf }}" class="form-control input-md cpf" >
									@if ($errors->has('cpf'))
									<span class="help-block">
									<strong>{{ $errors->first('cpf') }}</strong>
									</span>
									@endif  
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="birth_date">Data de Nascimento</label>  
								<div class="col-md-4">
									<input id="birth_date" name="birth_date" placeholder="Ex.: dd/mm/aaaa" required="" type="text" value="{{ Carbon\Carbon::parse($old->birth_date)->format('d-m-Y i') }} " class="form-control input-md date" >
									@if ($errors->has('birth_date'))
									<span class="help-block">
									<strong>{{ $errors->first('birth_date') }}</strong> 
									</span>
									@endif  
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="genre">Gênero</label>
								<div class="col-md-4">
									<select id="genre" name="genre" value="{{ $old->genre }}" class="form-control">
										<option class="non" value="Masculino">Masculino</option>
										<option class="non" value="Feminino">Feminino</option>
										<option class="editable" value="Outro">Outro</option>
									</select>
									<input class="editOption" value="{{ $old->genre }}" style="display:none;"></input>
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
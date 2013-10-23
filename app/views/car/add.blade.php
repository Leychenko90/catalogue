@extends('master')

@section('css_for_layout')
	<link rel="stylesheet" href="css/forms.css">
@stop

@section('js_for_layout')
@stop

@section('content')
	{{Form::open(array('url'=>'/car/_add', 'method'=>"POST"))}}
		<legend>Please input all car data</legend>
		<div class="control-group">
		{{Form::label('make', 'Make:')}}
		{{Form::input('text', 'make', null, array('id'=>'make'))}}
		</div>
		<div class="control-group">
		{{Form::label('model', 'Car model: ')}}
		{{Form::input('text', "model", null, array('id'=>'model'))}}
		</div>
		<div class="control-group">
			{{Form::label('years', 'Years')}}
			{{Form::input('text', 'years', null, array('id'=>'years'))}}
		</div>
		<div class="control-group">
			{{Form::label('engine_volume', 'Engine Volume')}}
			{{Form::input('text', 'engine_volume', null, array('id'=>'engine_volume'))}}
		</div>
		<div class="control-group">
			{{Form::label('transmission', 'Transmission')}}
			{{Form::input('text', 'transmission', null, array('id'=>'transmission'))}}
		</div>
		<div class="control-group">
			{{Form::label('engine_load_volume', 'Engine load volume')}}
			{{Form::input('text', 'engine_load_volume', null, array('id'=>'engine_load_volume'))}}
		</div>
		<div class="control-group">
			{{Form::label('transmission_load_volume', 'Transmission load Volume')}}
			{{Form::input('text', 'transmission_load_volume', null, array('id'=>'transmission_load_volume'))}}
		</div>
		<div class="control-group">
		{{Form::submit('Submit', array('class'=>'btn'))}}
		</div>
		{{Form::close()}}
@stop
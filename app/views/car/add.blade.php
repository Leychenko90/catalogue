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
		{{Form::submit('Submit', array('class'=>'btn'))}}
		</div>
		{{Form::close()}}
@stop
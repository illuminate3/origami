@extends('module_info')

{{-- Web site Title --}}
@section('title')
{{ Config::get('general.title') }} :: @parent
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('inline-scripts')
@stop


{{-- Content --}}
@section('content')

	<div class="container">
		<div class="content">
			<div class="title">Origami</div>
			<div class="quote">
				Origami is a Rakko module that provides the ability to manage themes
			</div>
		</div>
	</div>

@stop

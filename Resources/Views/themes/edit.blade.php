@extends($theme_back)

{{-- Web site Title --}}
@section('title')
{{ Lang::choice('kotoba::cms.theme', 1) }} :: @parent
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('inline-scripts')
@stop


{{-- Content --}}
@section('content')

<div class="row">
<h1>
	<p class="pull-right">
	<a href="/admin/themes" class="btn btn-default" title="{{ trans('kotoba::button.back') }}">
		<i class="fa fa-chevron-left fa-fw"></i>
		{{ trans('kotoba::button.back') }}
	</a>
	</p>
	<i class="fa fa-edit fa-lg"></i>
		{{ trans('kotoba::general.command.edit') }}:&nbsp;{{ Lang::choice('kotoba::cms.theme', 1) }}
	<hr>
</h1>
</div>


<div class="row">
{!! Form::open([
	'route' => array('themes.update', $slug)
]) !!}
{!! Form::hidden('activeTheme', $activeTheme) !!}

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-gavel fa-fw"></i></span>
		<input type="text" id="name" name="name" value="{{ $name }}" placeholder="{{ trans('kotoba::general.name') }}" class="form-control" autofocus="autofocus">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-gavel fa-fw"></i></span>
		<input type="text" id="slug" name="slug" value="{{ $slug }}" placeholder="{{ trans('kotoba::general.slug') }}" class="form-control">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-gavel fa-fw"></i></span>
		<input type="text" id="author" name="author" value="{{ $author }}" placeholder="{{ trans('kotoba::general.author') }}" class="form-control">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-gavel fa-fw"></i></span>
		<input type="text" id="description" name="description" value="{{ $description }}" placeholder="{{ trans('kotoba::general.description') }}" class="form-control">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-gavel fa-fw"></i></span>
		<input type="text" id="version" name="version" value="{{ $version }}" placeholder="{{ trans('kotoba::general.version') }}" class="form-control">
</div>
</div>


<label class="checkbox-inline">
	<input type="checkbox" id="enabled" name="enabled" value="1" {{ $checked }}>
	&nbsp;{{ trans('kotoba::general.enable') }}
</label>


<hr>


<div class="form-group">
<div class="col-sm-12">
	<input class="btn btn-success btn-block" type="submit" value="{{ trans('kotoba::button.save') }}">
</div>
</div>

{!! Form::close() !!}


<div class="row">
<div class="col-sm-6">
	<a href="/admin/themes" class="btn btn-default btn-block" title="{{ trans('kotoba::button.cancel') }}">
		<i class="fa fa-times fa-fw"></i>
		{{ trans('kotoba::button.cancel') }}
	</a>
</div>

<div class="col-sm-6">
	<input class="btn btn-default btn-block" type="reset" value="{{ trans('kotoba::button.reset') }}">
</div>
</div>


</div> <!-- ./ row -->
@stop

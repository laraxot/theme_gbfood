@php
	$name_dot=bracketsToDotted($name);
	if(!isset($field->help)){
		$field->help=trans($view.'.field.'.$name.'_help');
	}
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ $label }}
	{{ $input }}
	@if ( $errors->has($name_dot) )
		<div class="alert alert-danger">
        	{{ $errors->first($name_dot) }}
		</div>
	@endif
	<small class="form-text text-muted">{{ $field->help }}</small>
</div>
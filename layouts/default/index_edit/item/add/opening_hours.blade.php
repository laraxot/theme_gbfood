@php
	$action=route('container0.container1.store',array_merge($params,['container1'=>'opening_hour']));    
@endphp

<form method="POST" action="{{ $action }}" {{--  class="form-inline" --}} role="form">
	@csrf
	<input type="hidden" name="_action" value="come_back" />
		{{ Form::bsSelectDay('day_of_week') }}
		{{ Form::bsTime('open_at') }}
		{{ Form::bsTime('close_at') }}
            <button class="btn btn-primary btn-sm" type="submit">
                <i class="fa fa-plus"></i>
            </button>

</form>
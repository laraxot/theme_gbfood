{!! Form::bsOpen($row,'update') !!}
{{ Form::bsText('title') }}
{{ Form::bsText('subtitle') }}
<div class="row">
	<div class="col-md-6">
		{{ Form::bsJqueryuiDate('date_start') }}
	</div>
	<div class="col-md-6">
		{{ Form::bsJqueryuiDate('date_end') }}
	</div>
</div>
<div class="row">
	<div class="col-md-12">
	{{-- Form::bsAddress('formatted_address') --}}
	{{ Form::bsAddress('address[formatted_address]') }}
	</div>
</div>


{{-- Form::selectMonth('month') 
{{ Form::bsJqueryuiDate('test') }}
--}}
{!! Form::bsTextarea('txt') !!}
{{ Form::bsUnisharpImg('image_src') }}
{{Form::bs3Submit('Aggiungi')}}
{!! Form::close() !!}
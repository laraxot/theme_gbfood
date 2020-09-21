<div class="form-group col-sm-12">
	<h2>
		<a href="#" class="js-registered">@lang($view.'.prvPrivacy')</a>
	</h2>
	@for($i=0;$i<4;$i++)
		@php
			$k="consCheckbox_".$i;
		@endphp
		{!! Form::bsPrvCheckbox1('linked['.$k.']') !!}
	@endfor
	<div class="form-group col-sm-12">
		@lang($view.'.mandatoryPrivacy')
	</div>
</div>
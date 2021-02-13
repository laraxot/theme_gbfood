{{--
@can('show',$row)
<div class="color-palate">
	<div class="color-trigger">
		<i class="fa fa-gear"></i>
	</div>
	<div class="color-palate-head">
		<h6>@lang($trad_default.'.manage')</h6>
	</div>
	<br>
	<div class="palate-foo">
		@if(!isset($params['container1']))
		<a href="{{ route('container0.show',$params) }}" class="btn theme-btn" >
		@lang($trad_default.'.view_page')<i class="fa fa-show"></i>
		</a>
		@else
		<a href="{{ route('container0.container1.show',$params) }}" class="btn theme-btn" >
		@lang($trad_default.'.view_page')<i class="fa fa-show"></i>
		</a>
		@endif
		@include('pub_theme::layouts.partials.btns.translate_manager')
		
	</div>
</div>
{{ Theme::add('theme/pub/js/color-settings.js') }}
{{ Theme::add('theme/pub/css/color-switcher-design.css') }}
@else
@endcan
<div class="color-palate">
	<div class="color-trigger">
		<i class="fa fa-gear"></i>
	</div>
	<div class="color-palate-head">
		<h6>@lang($trad_default.'.manage')</h6>
	</div>
	<br>
	<div class="palate-foo">
		@include('pub_theme::layouts.partials.btns.translate_manager')
	</div>
</div>
{{ Theme::add('theme/pub/js/color-settings.js') }}
{{ Theme::add('theme/pub/css/color-switcher-design.css') }}
--}}
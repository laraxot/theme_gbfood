@extends('pub_theme::layouts.plane')
@section('body')
	{{--
	@include('extend::includes.components')
	@include('extend::includes.flash')
		<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
	--}}
	<div class="site-wrapper">
		@include('pub_theme::layouts.partials.headernav')
		@yield('content')
	</div>
	@if(isset($footer) && $footer=='off')
	@else
	{{-- // dopo rimetto il footer.. prima sistemo
	@include('pub_theme::layouts.partials.footer') 
	--}}
	{!! Theme::cache('pub_theme::layouts.partials.footer',[]) !!}
	@endif
	</div>
</div>
@endsection

@extends('pub_theme::layouts.plane')
@section('body')
	{{--

	@include('theme::includes.flash')
		<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
	--}}
	<div  id="app">
	<div class="site-wrapper">
		@include('pub_theme::layouts.partials.headernav')
		@yield('content')
	</div>
	@if(isset($footer) && $footer=='off')
	@else
	{{-- // dopo rimetto il footer.. prima sistemo
	{!! Theme::cache('pub_theme::layouts.partials.footer',[]) !!}
	--}}
	@include('pub_theme::layouts.partials.footer')
    @endif
    <bs-modal message="test"></bs-modal>
    <bs-iframe-modal message="test"></bs-iframe-modal>
	</div>
@endsection

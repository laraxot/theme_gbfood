<!DOCTYPE html>
<html lang="{{ $lang }}">
@section('htmlheader')
	@include('pub_theme::layouts.partials.htmlheader')
@show
<body class="home">
	@yield('body')
	@section('scripts')
		@include('pub_theme::layouts.partials.scripts')
	@show

	@php
	/*
	xdebug_print_function_stack();
	echo '<hr/><hr/><hr/><hr/><hr/><hr/>';
	*/
	@endphp

</body>
</html>

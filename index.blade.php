@extends('pub_theme::layouts.app')
@section('content')
	@include('pub_theme::includes.components')
	@include('pub_theme::includes.flash')

	@include($view.'.banner')
	{{--
	@include($view.'.location_match')
	--}}
	@include($view.'.popular')
	@include($view.'.how_it_works')
	@include($view.'.featured_restaurants')
	@include('pub_theme::layouts.partials.mobile_app')
@endsection

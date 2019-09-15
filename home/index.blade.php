@extends('pub_theme::layouts.app')
@section('content')
	@include('theme::includes.flash')
	{{-- //components non serve piu
	
	@include($view.'.location_match')
	--}}
	{{--@include($view.'.popular')--}}
	@include($view.'.banner')
	{{--
	@include($view.'.what_we_do')
	@include($view.'.how_it_works')
	@include('pub_theme::layouts.partials.mobile_app')
    @include($view.'.iscrizione') 
    --}}
    {{--@include($view.'.featured_restaurants')--}}
    
@endsection

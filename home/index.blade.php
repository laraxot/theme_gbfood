@extends('pub_theme::layouts.app')
@section('content')
	@include('extend::includes.flash')
	@include($view.'.banner')
	{{-- //components non serve piu
	@include('extend::includes.components')
	@include($view.'.location_match')
	--}}
	{{--@include($view.'.popular')--}}
	@include($view.'.what_we_do')
	@include($view.'.how_it_works')
	@include('pub_theme::layouts.partials.mobile_app')
    @include($view.'.iscrizione') 
    {{--@include($view.'.featured_restaurants')--}}

@endsection
@push('scripts')
<script>
	$( document ).ready(function () {
		//swal.fire('Hello world!');
	});
</script>
@endpush
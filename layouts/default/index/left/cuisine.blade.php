@php
	$restaurant_curr=collect($params)->where('post_type','restaurant')->last();
@endphp
@if(isset($restaurant_curr))     
	@include($_layout->view_default.'.left.restaurant_cuisine',['restaurant_curr'=>$restaurant_curr])
@endif

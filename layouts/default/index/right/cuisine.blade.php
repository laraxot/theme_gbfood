@php
	$restaurant_curr=collect($params)->where('type','restaurant')->last();
	//$openingHours=$restaurant_curr->openingHours;
@endphp
@if(isset($restaurant_curr))
	@include($_layout->view_default.'.widgets.cart_items',['cart_items'=>$restaurant_curr->cartItems])
	@include($_layout->view_default.'.right.restaurant_opening_hours',['restaurant_curr'=>$restaurant_curr])
@endif
{{--
@include($_layout->view_default.'.widgets.opening_hours',['openingHours'=>$openingHours])
--}}
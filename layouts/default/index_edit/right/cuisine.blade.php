@php
	$restaurant_curr=collect($params)->where('type','restaurant')->last();
	$openingHours=$restaurant_curr->openingHours;
@endphp
@include($_layout->view_default.'.widgets.opening_hours',['openingHours'=>$openingHours])

@php
	$restaurant_curr=collect($params)->where('post_type','restaurant')->last();
	$restaurant_panel=Panel::get($restaurant_curr);
	$openingHours=$restaurant_curr->openingHours;
	
	$opening_hour_edit_url=$restaurant_panel->relatedUrl(['related_name'=>'opening_hour','act'=>'index_edit']);
	$opening_hour_create_url=$restaurant_panel->relatedUrl(['related_name'=>'opening_hour','act'=>'create']);
@endphp
@include($_layout->view_default.'.widgets.opening_hours',
	[
		'openingHours'=>$openingHours,
		'edit_url'=>$opening_hour_edit_url,
		'create_url'=>$opening_hour_create_url,
	]
)

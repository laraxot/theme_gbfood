@php
	$restaurant=collect($params)->where('post_type','restaurant')->last();
	$restaurant_panel=Panel::make()->get($restaurant);
	$cuisine_panel=Panel::make()->get($row);
	$cuisine_panel->setParent($restaurant_panel);
@endphp
<div class="menu-widget m-b-30" id="{{ $row->post_id }}">
	<div class="widget-heading">
		<h3 class="widget-title text-dark">
			<b class="text-dark">{{ $row->title }}</b>
			<a class="btn btn-link pull-right" data-toggle="collapse" href="#m{{ $row->post_id }}" aria-expanded="true">
			<i class="fa fa-angle-right pull-right"></i>
			<i class="fa fa-angle-down pull-right"></i>
			</a>
			<p class="text-dark">{{ $row->subtitle }}</p>
		</h3>
		<div class="clearfix"></div>
	</div>
	<div class="collapse show" id="m{{ $row->post_id }}">
		@foreach($row->recipes as $key=>$recipe)
			@include($_layout->view_default.'.item.cuisine_x_recipe',['key'=>$key,'row'=>$recipe,'cuisine'=>$row,'cuisine_panel'=>$cuisine_panel])
		@endforeach
	</div>
</div>
@include($_layout->view_default.'.modal.cuisine_x_ingredient_cat',['cuisine'=>$row,'cuisine_panel'=>$cuisine_panel])

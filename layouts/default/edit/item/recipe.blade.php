@php
	$row_panel=Panel::get($row);
@endphp
<div class="food-item {{ $key%2?'white':'' }}">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-lg-8">
			<b>{{ $row->title }}</b>
			<p>{{ $row->subtitle }}</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> 
			<span class="price pull-left">€ {{ number_format($row->pivot->price,2) }}</span> 
			{{--
			<a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal{{ $cuisine->post_id }}">&#43;</a> 
			--}}
		</div>
	</div>
</div>
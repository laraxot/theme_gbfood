@php 
$recipe_curr=collect($params)->where('type','recipe')->last();
$cart_item=Theme::xotModel('cart_item');
@endphp 
@if($loop->first)
{!! Form::bsOpen($cart_item,'store') !!}
<div class="row">
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<b>{{$recipe_curr->title}}</b>
	</div>
	<div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> 
		<span class="price pull-left">€ {{ number_format($recipe_curr->pivot->price,2) }}</span>
	</div>
	<div class="col-xs-6 col-sm-4 col-lg-4">
		<input type="hidden" name="pivot_id" value="{{ $recipe_curr->pivot->id }}">
		<input class="form-control" type="number" value="1" id="qty" name="qty">
	</div>
	<div style="display:none">
		<span id="price">{{ $recipe_curr->pivot->price }}</span>
	</div>
</div>
@endif
@php
	$ingredientCat=$row;
@endphp
<div class="menu-widget m-b-30" id="{{ $ingredientCat->post_id }}">
	<div class="widget-heading">
		<h3 class="widget-title text-dark">
			{{ $ingredientCat->title }}
			<a class="btn btn-link pull-right" data-toggle="collapse" href="#m{{ $ingredientCat->post_id }}" aria-expanded="true">
			<p>{{ $ingredientCat->subtitle }}</p>
			<i class="fa fa-angle-right pull-right"></i>
			<i class="fa fa-angle-down pull-right"></i>
			</a>
		</h3>
		<div class="clearfix"></div>
	</div>
	<div class="collapse show" id="m{{ $ingredientCat->post_id }}">
		@foreach($ingredientCat->ingredients as $key=>$ingredient)
			@include($_layout->view_default.'.item.ingredient_cat_x_ingredient',['key'=>$key,'ingredient'=>$ingredient])
		@endforeach
	</div>
	<!-- end:Collapse -->
</div>
@if($loop->last)
<div class="pull-right">
<h3>Totale :&euro; <span id="tot"></span></h3>
{{ Form::bsSubmit('salva') }}
</div>
{{ Form::close() }}
<script>
$(document).ready(function () {
	$('#qty').on("keyup", function(e) {
		updateTot();
	});
	$('.ingredient-qty').on("keyup", function(e) {
		updateTot();
	});
	//$('#tot').text(66);
});

function updateTot(){
	var $qty=$('#qty').val();
	var $price=$('#price').text();
	var $tot=$qty*$price;
	$('.ingredient-item').each(function( index ) {
		$tot+=$(this).find('.ingredient-qty').val() * $(this).find('.ingredient-price').val();
	});
	$('#tot').text($tot);
}

</script>
@endif
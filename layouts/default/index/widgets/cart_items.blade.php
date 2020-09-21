@php
	if(!is_array($cart_items)) return;
@endphp
<div class="widget widget-cart">
	<div class="widget-heading">
		<h3 class="widget-title text-dark">
			Your Shopping Cart
		</h3>
		<div class="clearfix"></div>
	</div>
	{{--
	@foreach($cart_items as $k=>$cart_item)
	<div class="row order-row {{ $k%2?'bg-white':'' }} ">
		<div class="widget-body">
			<div class="title-row">{{ $cart_item->pivot->related->title }}
				<a href="#">
					<i class="fa fa-trash pull-right"></i>
				</a>
			</div>
			<div class="form-group row no-gutter">
				<div class="col-xs-8">
					<!--
					<select class="form-control b-r-0" id="exampleSelect1">
						<option>Size SM</option>
						<option>Size LG</option>
						<option>Size XL</option>
					</select>
					-->
					&euro; {{ money_format($cart_item->pivot->price,2) }}
				</div>
				<div class="col-xs-4">
					<input class="form-control col-md-5" type="number" value="2" id="example-number-input"> 
				</div>
			</div>
		</div>
	</div>
	@endforeach
	--}}
	<table class="table">
		
	@foreach($cart_items as $k=>$cart_item)
	<tr>
		<td><b>{{ $cart_item->pivot->related->title }}</b> <a href="#"><i class="fa fa-trash pull-right"></i></a></td>
		<td align="right"> &euro;{{ money_format($cart_item->pivot->price,2) }}</td>
		<td>{{-- <input class="form-control" type="number" value="" id="example-number-input"> --}}
			{{ $cart_item->qty}}
		</td>
		
	</tr>
	@foreach($cart_item->sons as $son)
	<tr>
		<td>+ {{ $son->pivot->related->title }} <a href="#"><i class="fa fa-trash pull-right"></i></a></td>
		<td align="right"> &euro;{{ money_format($son->pivot->price,2) }}</td>
		<td>{{-- <input class="form-control" type="number" value="" id="example-number-input"> --}}
			{{ $son->qty}}
		</td>
		
	</tr>
	@endforeach
	<tr>
		<td colspan="1" align="right"><b>SubTot</b></td>
		<td colspan="2" align="right">&euro;{{ money_format($cart_item->subtot,2) }}</td>
	</tr>
	@endforeach

	</table>
	{{--
	<div class="widget-delivery clearfix">
		<form>
			<div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
				<label class="custom-control custom-radio">
				<input id="radio4" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
			</div>
			<div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
				<label class="custom-control custom-radio">
				<input id="radio3" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
			</div>
		</form>
	</div>
	--}}
	<div class="widget-body">
		<div class="price-wrap text-xs-center">
			<p>TOTAL</p>
			<h3 class="value"><strong>&euro; {{money_format($restaurant_curr->cart_item_tot,2) }}</strong></h3>
			@php
				$parz=$params;
				$parz['container1']='cart';
				$checkout_url=route('container0.container1.create',$parz);
			@endphp
			<a href="{{ $checkout_url }}" class="btn theme-btn btn-lg">Checkout</a>
			{{--
			<p>Free Shipping</p>
			<button onclick="location.href='checkout.html'" type="button" class="btn theme-btn btn-lg">Checkout</button>
			--}}
		</div>
	</div>
</div>
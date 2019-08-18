<div class="widget widget-cart">
	<div class="widget-heading">
		<h3 class="widget-title text-dark">
			Your Shopping Cart
		</h3>
		<div class="clearfix"></div>
	</div>
	@foreach(blog::shopitems()->get() as $k=>$item0)
	<div class="order-row @if($k%2==0) bg-white @endif">
		<div class="widget-body">
			<div class="title-row">
				{{-- Form::bsNumber('q',5,['nolabel'=>1]) --}}
				<b> {{ $item0->num }}</b>&nbsp;
				{{ $item0->post->title }}[{{ number_format($item0->price,2) }}]
				{{--  <a href="#"><i class="fa fa-trash pull-right"></i></a> --}}
				<h4>
				{{  number_format($item0->num * $item0->price,2) }}
				<div class="pull-right">
					{!! Form::bsBtnDelete(['cart_id'=>$item0->id]) !!}
				</div>
			</div>
			<div class="form-group row no-gutter">
				<div class="col-xs-12">
					@foreach($item0->postVars as $item0)
					<i class="fa fa-plus">{{ $item0->title}} [{{  number_format($item0->pivot->price,2) }}]</i> 
					@endforeach
				</div>
				{{--
				<div class="col-xs-4">
					<input class="form-control" type="number" value="2" id="example-number-input"> 
				</div>
				--}}
			</div>
		</div>
	</div>
	@endforeach
	<div class="widget-body">
		<div class="price-wrap text-xs-center">
			<p>TOTAL</p>
			<h3 class="value"><strong>{{ number_format(blog::shopitems()->total(),2) }}</strong></h3>
			{{--  
			<p>Free Shipping</p>
			<button onclick="location.href='checkout.html'" type="button" class="btn theme-btn btn-lg">Checkout</button>
			--}}
			@include($view.'.importsites',['row'=>$row])
		</div>
	</div>
</div>
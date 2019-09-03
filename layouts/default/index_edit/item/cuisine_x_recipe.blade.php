@php
	$row_panel=Panel::get($row);
@endphp
<div class="food-item {{ $key%2?'white':'' }}">
	{!! Form::bsOpen($row,'update') !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-lg-7">
			<b>{!! Form::bsInPlaceText('title') !!}</b>
			<p>{!! Form::bsInPlaceText('subtitle') !!}</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-5 pull-right item-cart-info">
			{{--
			<span class="price pull-left">€ {{ number_format($row->pivot->price,2) }}</span>
			--}}
			<span class="price pull-left">€ {!! Form::bsInPlaceMoney('pivot[price]') !!} </span>
			<a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal{{ $row->post_id }}">&#43;</a>


			{!! Form::bsBtnDelete(['row'=>$row, 'class'=> 'pull-right']) !!}


			{{--
			{!! Form::bsBtnDetach(['row'=>$row]) !!}
			--}}
		</div>
	</div>
	{!! Form::close() !!}
</div>

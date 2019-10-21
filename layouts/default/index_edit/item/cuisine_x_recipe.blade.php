@php
	$recipe_panel=Panel::get($row);
	$recipe_panel->setParent($cuisine);
@endphp

<div class="food-item {{ $key%2?'white':'' }}">
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-lg-7">
			<b>{!! $row->title !!}</b>
			<p>{!! $row->subtitle !!}
			{!! $recipe_panel->btn('destroy') !!}
			</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-5 pull-right item-cart-info">
			{{--
			<span class="price pull-left">€ {{ number_format($row->pivot->price,2) }}</span>
			--}}
			<span class="price pull-left">€ {!! number_format($row->pivot['price'],2)  !!} </span>
			<a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal{{ $row->post_id }}">&#43;</a>

			{{--
			{!! Form::bsBtnEdit(['row'=>$row]) !!}


			{!! Form::bsBtnDetach(['row'=>$row]) !!}
			--}}

			{!! Form::bsBtnDelete(['row'=>$row, 'class'=> 'pull-right']) !!}
		</div>
	</div>
	{!! Form::close() !!}
</div>

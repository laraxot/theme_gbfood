@php
	$panel_row=Panel::make()->get($row);
@endphp

<script type="application/ld+json">
	{!! json_encode($panel_row->show_ldJson()) !!}
</script>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 food-item">
	<div class="food-item-wrap">
		{{--
		<div class="figure-wrap bg-image" data-image-src="{{ $row->imageResizeSrc(['width'=>380,'height'=>210]) }}">
			<div class="distance">
				<i class="fa fa-pin"></i>1240m
			</div>


			<div class="rating pull-left">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<div class="review pull-right"><a href="#">198 reviews</a> </div>
		</div>
		--}}
		<div class="content">
			<h5><a href="{{ $row->url }}">{{ $row->title }}</a></h5>
			{{--
			<div class="product-name">{{ $row->subtitle }}</div>
			--}}
			<p>{!! $row->txt !!}</p>
			{{--
			<div class="price-btn-block">
				<span class="price">$ 15,99</span>
				<a href="{{ $row->url }}" class="btn theme-btn-dash pull-right">Read</a>
			</div>
			[ start input freeze ]
			--}}
            @foreach($row->ratingObjectives as $ro)
                {{--
                    <br/>{{ $ro->title }}
                    <div class="rateit" data-rateit-value="{{ $ro->rating_avg }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                    ({{ number_format($ro->rating_avg,2) }}) {{ $ro->rating_count }} votes
                    --}}
                @include('theme::layouts.partials.rating.item',['label'=>$ro->title,'rating_avg'=>$ro->rating_avg,'rating_count'=>$ro->rating_count])
            @endforeach
            <hr/>
			{{--
			{!! Theme::inputFreeze(['row'=>$row,'field'=>(object)['name'=>'ratings','type'=>'PivotFields']]) !!}
			[ end input freeze ]
			@include('theme::layouts.partials.rating.objectives',['row'=>$row])
			--}}
			<h5>@lang('pub_theme::restaurant.provider.links')</h5>
			@foreach($row->providers as $provider)
				<a href="{{ url('/redirect?url='.$provider->url) }}" rel="nofollow" >{{ $provider->provider }}</a>
			@endforeach
		</div>
		{{--
		<div class="restaurant-block">
			<div class="left">
				<a class="pull-left" href="#"> <img src="http://placehold.it/50x46" alt="Restaurant logo"> </a>
				<div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
			</div>
		</div>
		--}}
	</div>
</div>

    @foreach($row->events as $event)
	@include('pub_theme::layouts.default.index.item.event',['row'=>$event] )
    @endforeach

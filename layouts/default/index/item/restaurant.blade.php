@php
	$restaurant_curr=$row;
	$cuisineCats=$restaurant_curr->cuisineCats;
	$rating_avg=$restaurant_curr->ratings->avg('rating');
    $rating_count=$restaurant_curr->ratings->count();
    $row_panel=Panel::get($row);
@endphp
<div class="bg-gray restaurant-entry">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
			<div class="entry-logo">
				<a class="img-fluid" href="{{ $row->url }}">
					{!! $row_panel->imageHtml(['width'=>100,'height'=>100]) !!}
				</a>
			</div>
			<!-- end:Logo -->
			<div class="entry-dscr">
				<h5>
					<a href="{{ $row->url }}">{{ $row->title }}</a>
				</h5>
				<span>{{ $row->subtitle }} </span>
				<br/>
				<i class="fa fa-cutlery" aria-hidden="true"></i>
				@foreach($cuisineCats as $cuisineCat)
				<span itemprop="servesCuisine">{{ $cuisineCat->title }}</span>,
				@endforeach
				<br/>
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
      				<span itemprop="postalCode">{{ $row->postal_code }}</span>
      				<span itemprop="addressLocality">{{ $row->locality }}</span>,
      				(<span itemprop="addressRegion">{{ $row->administrative_area_level_2_short }}</span>)
      				<meta itemprop="addressCountry" content="{{ $row->country_short}}" />
    			</div>

				{{--
				@include('pub_theme::layouts.partials.item.address',['linked'=>$row])
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
					<li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
				</ul>
				--}}
			</div>
			<!-- end:Entry description -->
		</div>
		<div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
			<div class="right-content bg-white">
				<div class="right-review">
					@include('theme::layouts.partials.rating.avg',['row'=>$restaurant_curr])
					{{--
					@include('theme::layouts.partials.rating.objectives',['row'=>$restaurant_curr])
					--}}
					@include('pub_theme::layouts.partials.tabs',['tabs'=>$row_panel->getItemTabs()])
				</div>
			</div>
			<!-- end:right info -->
		</div>
	</div>
</div>

@php
	$cuisineCats=$row->cuisineCats;
	$row_panel=Panel::make()->get($row);
@endphp
<div class="col-xs-12 col-sm-12 col-md-6 single-restaurant {{ $cuisineCats->pluck('guid')->implode(' ') }}">
	<div class="restaurant-wrap">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
				<a class="restaurant-logo" href="{{ $row->url }}" title="restaurant-logo"> 
					{{--  <img src="http://placehold.it/95x95" alt="Restaurant logo"> --}}
					{!! $row_panel->imageHtml(['width'=>95,'height'=>95]) !!}
				</a>
			</div>
			<!--end:col -->
			<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
				<h5><a href="{{ $row->url }}" title="restaurant-title">{{ $row->title }}</a></h5> 
				<span>{{ $row->subtitle }}</span>
				<div class="bottom-part">
					<div ><i class="fa fa-cutlery" aria-hidden="true"></i> 
						@foreach($cuisineCats as $cuisineCat)
							<span itemprop="servesCuisine">{{ $cuisineCat->title }}</span>,
						@endforeach
					</div>
					<small>
					<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
    					<span itemprop="streetAddress">{{ $row->route }},{{ $row->street_number }}</span> -
    					<span itemprop="postalCode">{{ $row->postal_code }}</span>
    					<span itemprop="addressLocality">{{ $row->locality }}</span>,
    					(<span itemprop="addressRegion">{{ $row->administrative_area_level_2_short }}</span>) 
    					<meta itemprop="addressCountry" content="{{ $row->country_short}}" /> 
  					</div>

					</small>
					{{--
					<div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
					<div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
					<div class="ratings"> 
						<span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</span> (122) 
					</div>
					--}}
				</div>
			</div>
			<!-- end:col -->
		</div>
		<!-- end:row -->
	</div>
	<!--end:Restaurant wrap -->
</div>
<!--end: col -->
@php	
	$cuisineCats=$row->cuisineCats;
@endphp
<div class="col-xs-12 col-sm-6 col-md-6 food-item">
	<div class="food-item-wrap">
		<div class="figure-wrap bg-image" data-image-src="{{ $row->imageResizeSrc(['width'=>380,'height'=>210]) }}">
			<div class="distance"><i class="fa fa-pin"></i>1240m</div>
			{{--
			<div class="rating pull-left"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-o"></i> 
			</div>
			--}}
			{{--
			<div class="review pull-right"><a href="#">198 reviews</a> </div>
			--}}
		</div>
		<div class="content">
			<h5><a href="{{ $row->url }}">{{ $row->title }}</a></h5>
			<div class="product-name">{{ $row->subtitle --}}</div>
			<div class="price-btn-block"> 
				<i class="fa fa-cutlery" aria-hidden="true"></i>
						@foreach($cuisineCats as $cuisineCat)
						<span itemprop="servesCuisine" class="">{{ $cuisineCat->title }}</span>,
						@endforeach
						<br/>
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
		    					<span itemprop="streetAddress">{{ $row->route }},{{ $row->street_number }}</span> -
		    					<span itemprop="postalCode">{{ $row->postal_code }}</span>
		    					<span itemprop="addressLocality">{{ $row->locality }}</span>,
		    					(<span itemprop="addressRegion">{{ $row->administrative_area_level_2_short }}</span>) 
		    					<meta itemprop="addressCountry" content="{{ $row->country_short}}" /> 
		  					</div>

				<a href="{{ $row->url }}" class="btn theme-btn-dash pull-right">View</a> 
			</div>
		</div>
		{{--
		<div class="restaurant-block">
			<div class="left">
				<a class="pull-left" href="#"> <img src="http://placehold.it/50x46" alt="Restaurant logo"> </a>
				<div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
			</div>
			<div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
		</div>
		--}}
	</div>
</div>
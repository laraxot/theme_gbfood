<!-- Each popular food item starts -->
<div class="col-xs-12 col-sm-6 col-md-4 food-item" data-mh="food-item">
	<div class="food-item-wrap">
		{{--
		<div class="figure-wrap bg-image" data-image-src="http://placehold.it/380x210">
		--}}
		<div class="figure-wrap bg-image" data-image-src="{{ $row->image_src }}">
			<div class="distance"><i class="fa fa-pin"></i>{{ round($row->distance,2) }}</div>
			{{--
			<div class="rating pull-left">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<div class="review pull-right"><a href="#">198 reviews</a> </div>
			--}}
		</div>
		<div class="content">
			<h5><a href="{{ $row->url }}" title="restaurant-title">{{ $row->title }}</a></h5>
			<div class="product-name">{{ $row->subtitle }}</div>
			<div class="price-btn-block">
				{{--  <span class="price">$ 15,99</span>  --}}
				<a href="{{ $row->url }}" title="visualizza" class="btn theme-btn-dash pull-right">View<i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		{{--
		<div class="restaurant-block">
			<div class="left">
				<a class="pull-left" title="profile" href="profile.html"> <img src="http://placehold.it/50x46" alt="Restaurant logo" /> </a>
				<div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
			</div>
			<div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
		</div>
		--}}
	</div>
</div>

<!-- Each popular food item starts -->

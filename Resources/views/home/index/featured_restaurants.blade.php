@php
	$top_restaurants=$restaurant->topArchive(['limit'=>8]);
	$cuisineCats=$top_restaurants->map(function($row){
		return $row->relatedType('cuisineCat')->pluck('title','guid');
	})->collapse()->all();
@endphp
<!-- Featured restaurants starts -->
<section class="featured-restaurants">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="title-block pull-left">
					{{--<h4>Featured {{ $restaurant->title }}</h4>--}}
					<h4>@lang($trad.'.featured_restaurants.featured')</h4>
				</div>
			</div>
			<div class="col-sm-8">
				<!-- restaurants filter nav starts -->
				<div class="restaurants-filter pull-right">
					<nav class="primary pull-left">
						<ul>
							<li class="btn"><a href="#" class="selected" data-filter="*">All</a> </li>
							@foreach($cuisineCats as $k=>$v)
							<li class="btn"><a href="#" data-filter=".{{ $k }}">{{ $v }}</a> </li>
							@endforeach
						</ul>
					</nav>
				</div>
				<!-- restaurants filter nav ends -->
			</div>
		</div>
		<!-- restaurants listing starts -->
		<div class="row">
			<div class="restaurant-listing">
				@each($view.'.featured.item', $top_restaurants , 'row', $view.'.featured.empty')
			</div>
		</div>
		<!-- restaurants listing ends -->
		<!-- add restaurant starts -->
		<section class="add-restaurants">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 add-title">
						<h4>@lang($trad.'.featured_restaurants.add_restaurant')</h4> </div>
					<div class="col-xs-12 col-sm-5 join-text">
						<p>@lang($trad.'.featured_restaurants.add_restaurant_text')<a href="{{ asset($lang.'/restaurant') }}"><strong>@lang($trad.'.featured_restaurants.directory')</strong></a> </p>
					</div>
					<div class="col-xs-12 col-sm-4 join-btn text-xs-right"><a href="{{ asset($lang.'/restaurant/create') }}" class="btn theme-btn btn-lg">@lang($trad.'.featured_restaurants.i_am_restaurant')</a> </div>
				</div>
			</div>
		</section>
		<!-- add restaurant ends -->
	</div>
</section>
<!--  ends -->

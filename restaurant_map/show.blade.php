@extends('pub_theme::layouts.app',['footer'=>'off','header_class'=>'top-header navbar-fixed-top'])
@section('content')
@include('extend::includes.components')
@include('extend::includes.flash')
<!-- PAGE CONTETNT -->
<section class="gl-page-content-section">
	<div class="container-fluid">
		<div class="row">
			<!-- SEARCH MAP -->
			<div class="map-wrapper map-split">
				<div id="map"></div>
			</div>
			<!-- SEARCH MAP END -->
			<!-- SEARCH -->
			<div id="map-result-section" class="map-result-wrapper">
				@include($view.'.filter')
				<div class="search-result-wrapper">
					<div class="row">
						@php
							$rows=$container0->archive;
						@endphp
						<h3>{{ $rows->count() }}</h3>
						<!-- Each popular food item starts -->
						@include($view.'.item')
					
						
						<!-- Each popular food item ends -->
						<div class="col-xs-12">
							<nav aria-label="...">
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> <span class="sr-only">Previous</span> </a>
									</li>
									<li class="page-item active"> <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a> </li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span> </a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- SEARCH END-->
		</div>
	</div>
</section>
@endsection	
@php
Theme::add('/theme/pub/js/markerclusterer.js');
Theme::addScript('https://maps.googleapis.com/maps/api/js');
Theme::add('/theme/pub/js/jquery.googlemap.js');
Theme::add($view.'/js/script.js');
@endphp

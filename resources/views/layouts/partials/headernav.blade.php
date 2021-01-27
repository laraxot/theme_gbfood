<header id="header" class="{{ isset($header_class)?$header_class:"header-scroll top-header headrom" }}">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
	{{--<a class="navbar-brand" href="{{ url('/'.$lang) }}">
	<img class="img-rounded" src="{{ Theme::url('/theme/pub/images/logos/foodtribu8.png') }}" alt="logo" height="40">
	</a>--}}
	<a class="navbar-brand" href="{{ url('/'.$lang) }}">
		<div itemscope itemtype="http://schema.org/Service">
			<h1 style="display:none;"><span itemprop="name">FoodTribù</span></h1>
			<img itemprop="logo" class="img-rounded" src="{{ Theme::asset('/theme/pub/images/logos/foodtribu8.png') }}" alt="foodtribù logo" height="40"/>
			<span itemprop="description" style="display:none;">La migliore app di cibo d'asporto</span>
		</div>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		{{--
		<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
			--}}
			<ul class="navbar-nav ml-md-auto d-md-flex">
				<li class="nav-item active">
					<a class="nav-link" href="{{ url($lang) }}">Home <span class="sr-only">(current)</span></a>
				</li>
				{{--
				--}}
				@include('pub_theme::auth.links')
				@include('pub_theme::layouts.partials.headernav.lang.08')
				@include('pub_theme::layouts.partials.headernav.add_restaurant')
			</ul>
			{{-- 
		</ul>
		--}}
	</div>
</nav>
</header>
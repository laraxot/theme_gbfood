<!-- location match part ends -->
<!-- Popular block starts -->
<section class="popular">
	<div class="container">
		<div class="title text-xs-center m-b-30">
			<h2>{{ $restaurant->title }}</h2>
			<p class="lead">{{ $restaurant->subtitle }}</p>
		</div>
		<div class="row">
			@each($view.'.popular.item', $restaurant->topArchive(['limit'=>3]) , 'row', $view.'.popular.empty')
		</div>
	</div>
</section>
<!-- Popular block ends -->

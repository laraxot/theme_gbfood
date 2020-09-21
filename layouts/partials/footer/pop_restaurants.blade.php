@php
	$restaurants=Theme::xotModel('restaurant')->inRandomOrder()->limit(6)->get();
@endphp
<div class="footer_cucine">
	<h5>@lang('pub_theme::footer.home.index.random_restaurant')</h5>
	<ul>
		@foreach($restaurants as $item0)
		{!! $item0->listItemSchemaOrg(['position'=>$loop->iteration]) !!}
		@endforeach
		<li><a href="{{url($lang.'/restaurant')}}">@lang('pub_theme::footer.home.index.other_restaurants')</a></li>
	</ul>
</div>

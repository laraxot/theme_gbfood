@php
	$pages=Theme::xotModel('page')->where('layout_position', 'footer')->get();
@endphp
<div class="col-xs-12 col-sm-2 pages color-gray">
	<h5>@lang('pub_theme::footer.about_us')</h5>
	<ul>
		{{--
		@if(isset($pages))
		--}}
		@foreach($pages as $item0)
		<li><a href="{{ $item0->url }}">{{ $item0->title }}</a> </li>
		@endforeach
		{{--
		@endif
		--}}
	</ul>
	@include('pub_theme::iubenda.cookie_policy')
	@include('pub_theme::iubenda.privacy_policy')
</div>

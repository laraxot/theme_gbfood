@php
	$k=0;
@endphp
<div class="breadcrumb">
	<div class="container">


{{--
	<ul itemscope itemtype="http://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ asset(App::getLocale()) }}">
					<span itemprop="name">Home</span>
				</a>
				 <meta itemprop="position" content="1" />
			</li>
			@foreach(array_values($params) as $k=>$v)
        		@if(isset($v->title))
        			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ $v->url }}">
							<span itemprop="name">{{ ($v->title!=''?$v->title:$v->guid) }}</span>
						</a>
				 		<meta itemprop="position" content="{{ $k+2 }}" />
					</li>
				@else
					@php
    				$container=Theme::xotModel($v);
    				@endphp
    				@if(is_object($container))
    				<li >
    					<a href="{{ $container->index_url }}">{{ Str::plural($v) }}</a>
    				</li>
    				@endif
        		@endif
        	@endforeach
        	@php
        		$routename=Route::currentRouteName();
        		$route_arr=explode('.',$routename);
        		$last_route=last($route_arr);
        	@endphp
        	@if(!in_array($last_route,['index','show']) || true)
        		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ url()->current() }}">
						<span itemprop="name">@lang('pub_theme::txt.'.$last_route)</span>
					</a>
			 		<meta itemprop="position" content="{{ $k+1 }}" />
				</li>
        	@endif
		</ul>
--}}

		<ul>
			<li>
				<a href="{{ asset(App::getLocale()) }}">Home</a>
			</li>
			@foreach(array_values($params) as $k=>$v)
        @if(isset($v->title))
        	<li>
						<a href="{{ $v->url }}">{{ ($v->title!=''?$v->title:$v->guid) }}</a>
					</li>
				@else
					@php
    				$container=Theme::xotModel($v);
    				@endphp
    				@if(is_object($container))
    				<li>
    					<a href="{{ $container->index_url }}">{{ Str::plural($v) }}</a>
    				</li>
    				@endif
      	@endif
      @endforeach
      @php
      	$routename=Route::currentRouteName();
      	$route_arr=explode('.',$routename);
      	$last_route=last($route_arr);
      @endphp
      @if(!in_array($last_route,['index','show']) || true)
      	<li>
					<a href="{{ url()->current() }}">@lang('pub_theme::txt.'.$last_route)</a>
				</li>
      @endif
		</ul>

	</div>
	{{--
	@include('pub_theme::layouts.partials.forms.search')
	--}}
</div>

<script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
	{
	 "@type": "ListItem",
	 "position": {{ $k+1 }},
	 "item":
	 {
		"@id": "{{ asset(App::getLocale()) }}",
		"name": "Home"
		}
	},

	@foreach(array_values($params) as $k=>$v)
		@if(isset($v->title))
		{
		 "@type": "ListItem",
			"position": {{ $k+1 }},
			"item":
			 {
				 "@id": "{{ $v->url }}",
				 "name": "{{ ($v->title!=''?$v->title:$v->guid) }}"
			 }
		},
		@else
			@php
				$container=Theme::xotModel($v);
			@endphp
			@if(is_object($container))
			{{--
			{
			 "@type": "ListItem",
				"position": {{ $k+1 }},
				"item":
				 {
					 "@id": "{{ $container->index_url }}",
					 "name": "{{ Str::plural($v) }}"
				 }
			},
			--}}
			@endif
		@endif
	@endforeach
	@php
		$routename=Route::currentRouteName();
		$route_arr=explode('.',$routename);
		$last_route=last($route_arr);
	@endphp
	@if(!in_array($last_route,['index','show']) || true)
	{
	 "@type": "ListItem",
		"position": {{ $k+1 }},
		"item":
		 {
			 "@id": "{{ url()->current() }}",
			 "name": "@lang('pub_theme::txt.'.$last_route)"
		 }
	}
	@endif
 ]
}
</script>

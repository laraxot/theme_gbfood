{{--
@php
	$ld=[];
	$ld['@context']="https://schema.org";
	$ld['@type']="ItemList";
	$ld['itemListElement']=[];
	if(isset($location)){
		foreach($location->archiveRand(6) as $k=>$item0){
			$item=$item0->listItemSchemaOrgLd(['position'=>$k+1]);
			$ld['itemListElement'][]=$item;
		}
	}
@endphp

<script type="application/ld+json">
	{!! json_encode($ld) !!}
</script>
--}}
@php
	$locations=Theme::xotModel('location')->inRandomOrder()->limit(6)->get();
@endphp


<div class="footer_citta" {{-- itemscope itemtype="http://schema.org/ItemList" --}}>
	<link itemprop="itemListOrder" href="http://schema.org/ItemListOrderUnordered" />
	<meta itemprop="numberOfItems" content="6" />
	<meta itemprop="url" content="{{url($lang.'/location')}}" />
	<h5 itemprop="name">@lang('pub_theme::footer.home.index.random_locations')</h5>
	<ul temscope itemtype="http://schema.org/ItemList">
		{{-- 
		@foreach($locations as $item0)
		{!! $item0->listItemSchemaOrg(['position'=>$loop->iteration]) !!}
		@endforeach
		 --}}
		<li><a href="{{url($lang.'/location')}}">@lang('pub_theme::footer.home.index.other_locations')</a></li>
	</ul>
</div>

{{--
<div class="footer_citta" itemscope itemtype="http://schema.org/Collection">
	<h5 itemprop="name">@lang('pub_theme::footer.home.index.random_locations')</h5>
	@if(isset($location))
		@foreach($location->archiveRand(6) as $item0)
		{!! $item0->listItemSchemaOrg(['position'=>$loop->iteration]) !!}
		@endforeach
	@endif
</div>
--}}
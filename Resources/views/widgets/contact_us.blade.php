@php
	//$contact=$page->archive->where('guid','contact-us')->first();
	$contact=$page->archive()->firstOrCreate(['guid'=>'contact-us','lang'=>$lang],['title'=>trans('pub_theme::index.contact_us') ]);
@endphp
@if(is_object($contact))
<h4 class="m-t-20">{{ $contact->title }}{{-- Contact Customer Support --}}</h4>
<p> {{ $contact->subtitle }} </p>
<p> <a href="{{ $contact->url }}" class="btn btn-info btn-round btn-lg" style="color: white; border-radius: 25px 25px 25px 25px; box-shadow: 2px 2px 2px 2px #0000008a;">@lang('pub_theme::index.contact_us')</a> </p>
@else
<h4 class="m-t-20">[ERR][create contact us page]</h4>	
@endif
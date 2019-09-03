@php
	$langs=config('laravellocalization.supportedLocales');

	$lang_curr=$langs[$lang];

@endphp
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	<span class="flag-icon flag-icon-{{ ($lang=='en')?'gb':$lang }}"> </span> {{ $lang_curr['name'] }}
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownlang">

    	@foreach($langs as $k=>$v)
    	@if($k!=$lang)
    	@php
    		$url_lang='/'.$k;
    		if(isset($row) && is_object($row)){
				$url_lang=$row->urlLang($k); 
    		}

    	@endphp
        <a class="dropdown-item" href="{{ $url_lang }}"><span class="flag-icon flag-icon-{{ ($k=='en')?'gb':$k }}"> </span>  {{ $v['name'] }}</a>
        @endif
        @endforeach
    </div>
</li>
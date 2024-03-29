<!-- banner part starts -->
@php

@endphp
{{-- Theme::add('pub_theme::css/style.css') --}}
<section class="hero bg-image bg-dark"
    data-image-src="{{ Theme::imageSrc(['path' => 'pub_theme::images/food-home.jpg', 'width' => 200, 'height' => 400]) }}">
    <div class="hero-inner">
        <div class="container text-center hero-text font-white">
            <h1>@lang($trad.'.home') <i class="fas fa-cookie-bite"></i> </h1>
            {{-- <h5 class="font-white space-xs">@lang($trad.'.home')</h5> --}}
            <div class="banner-form">
                {{-- {!! Form::bsFormSearchAddress(
                    [
                        'action'=>asset($lang.'/map'),
                        'input_name'=>'address',
                        'fields'=>['lat','lng'],
                    ]
                ) !!} --}}
            </div>
            {{-- @include($view.'.banner.steps') --}}
        </div>
    </div>
    <!--end:Hero inner -->
</section>
<!-- banner part ends -->

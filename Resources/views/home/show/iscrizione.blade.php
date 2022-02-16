<!-- iscrizione ristorante o utente-->
@php
$restaurant = Theme::xotModel('restaurant')->get();
$profile = Theme::xotModel('profile')->get();
@endphp
<section class="iscrizione">
    <div class="container-fluid bg-3 text-center">
        <div class="row">

            <div class="col-sm-3 {{-- bg-ristorante --}} bg-image bg-dark"
                data-image-src="{{ Theme::imageSrc(['path' => 'theme/pub/images/ristorante.jpg', 'width' => 200, 'height' => 400]) }}">
                <div class="vc_empty_space" style="height: 250px"></div>
                <div class="wpb_wrapper">
                    <h3><span style="color: #ffffff;">@lang($trad.'.iscrizione.ristorante')</span></h3>
                    <div class="iscrizionitxt"><span style="color: #ffffff;"><br>
                            @lang($trad.'.iscrizione.ristorante_1')<br>
                            @lang($trad.'.iscrizione.ristorante_2')</span>
                    </div>
                    <p>&nbsp;</p>
                    <a itemprop="url" href="{{-- Panel::make()->get($restaurant)->url(['act'=>'create']) --}}" title="registrazione ristorante" target="_self"
                        data-hover-background-color="white" data-hover-border-color="white" data-hover-color="black"
                        class="btn btn-danger btn-round btn-lg"
                        style="color: white; border-radius: 25px 0px 25px 0px; box-shadow: 2px 2px 2px 2px #0000008a;">@lang($trad.'.iscrizione.registrati')</a>
                </div>
                <div class="vc_empty_space" style="height: 250px">
                    <span class="vc_empty_space_inner">
                        <span class="empty_space_image"></span>
                    </span>
                </div>
            </div>
            <div class="col-sm-3 {{-- bg-cliente --}} bg-image bg-dark"
                data-image-src="{{ Theme::imageSrc(['path' => 'theme/pub/images/cliente.jpg', 'width' => 200, 'height' => 400]) }}">
                <div class="vc_empty_space" style="height: 250px"></div>
                <div class="wpb_wrapper">
                    <h3><span style="color: #ffffff;">@lang($trad.'.iscrizione.cliente')</span></h3>
                    <div class="iscrizionitxt">
                        <span style="color: #ffffff;"><br>
                            @lang($trad.'.iscrizione.cliente_1')<br>
                            @lang($trad.'.iscrizione.cliente_2')</span>
                    </div>
                    <p>&nbsp;</p>
                    <a itemprop="url" href="{{ $profile->create_url }}" title="registrazione clienti" target="_self"
                        data-hover-background-color="white" data-hover-border-color="white" data-hover-color="black"
                        class="btn btn-success btn-round btn-lg"
                        style="color: white; border-radius: 0px 25px 0px 25px; box-shadow: -2px 2px 2px 2px #0000008a;">@lang($trad.'.iscrizione.registrati')</a>
                </div>
                <div class="vc_empty_space" style="height: 250px"></div>
            </div>
            <div class="col-sm-3 {{-- bg-driver --}} bg-image bg-dark"
                data-image-src="{{ Theme::imageSrc(['path' => '/theme/pub/images/driver.jpg', 'width' => 200, 'height' => 400]) }}">
                <div class="vc_empty_space" style="height: 250px"></div>
                <div class="wpb_wrapper">
                    <h3><span style="color: #ffffff;">@lang($trad.'.iscrizione.driver')</span></h3>
                    <div class="iscrizionitxt">
                        <span style="color: #ffffff;"><br>
                            @lang($trad.'.iscrizione.driver_1')<br>
                            @lang($trad.'.iscrizione.driver_2')</span>
                    </div>
                    <p>&nbsp;</p>
                    <a itemprop="url" href="{{ $profile->create_url }}" title="registrazione driver" target="_self"
                        data-hover-background-color="white" data-hover-border-color="white" data-hover-color="black"
                        class="btn btn-success btn-round btn-lg"
                        style="color: white; border-radius: 0px 25px 0px 25px; box-shadow: -2px 2px 2px 2px #0000008a;">@lang($trad.'.iscrizione.registrati')</a>
                </div>
                <div class="vc_empty_space" style="height: 250px"></div>
            </div>
            <div class="col-sm-3 {{-- bg-affiliato --}} bg-image bg-dark"
                data-image-src="{{ Theme::imageSrc(['path' => 'theme/pub/images/agent.jpg', 'width' => 200, 'height' => 400]) }}">
                <div class="vc_empty_space" style="height: 250px"></div>
                <div class="wpb_wrapper">
                    <h3><span style="color: #ffffff;">@lang($trad.'.iscrizione.affiliato')</span></h3>
                    <div class="iscrizionitxt">
                        <span style="color: #ffffff;"><br>
                            @lang($trad.'.iscrizione.affiliato_1')<br>
                            @lang($trad.'.iscrizione.affiliato_2')</span>
                    </div>
                    <p>&nbsp;</p>
                    <a itemprop="url" href="{{ $profile->create_url }}" title="registrazione affiliato" target="_self"
                        data-hover-background-color="white" data-hover-border-color="white" data-hover-color="black"
                        class="btn btn-success btn-round btn-lg"
                        style="color: white; border-radius: 0px 25px 0px 25px; box-shadow: -2px 2px 2px 2px #0000008a;">@lang($trad.'.iscrizione.registrati')</a>
                </div>
                <div class="vc_empty_space" style="height: 250px"></div>
            </div>
        </div>
    </div>
</section>

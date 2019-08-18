@include('extend::includes.components')
<div class="loginRes"></div>
<i class="fa fa-edit dialog-icon"></i>
<h3>@lang('pub_theme::auth.member_register')</h3>
<h5>@lang('pub_theme::auth.member_register_subtitle')</h5>
<form class="dialog-form" role="form" method="POST" action="{{ url($lang.'/profile') }}"> {{-- registrazione diventa di profile, perche' e' una cosa custom --}}
    {{ csrf_field() }}
    {{ Form::hidden('_action','row') }}
    {{--
    <div class="form-group">
        {{ Form::bsText('firstname') }}
    </div>
    <div class="form-group">
        {{ Form::bsText('surname') }}
    </div>
    --}}
    <div class="form-group">
        {{ Form::bsText('email') }}
    </div>
    <div class="form-group">
        {{ Form::bsText('handle') }}
    </div>
    <div class="form-group">
        {!! Form::bsPassword('passwd') !!}
    </div>
    <div class="form-group">
        {{ Form::bsPassword('passwd_confirmation') }}
    </div>
    @for($i=0;$i<4;$i++)
    <div class="form-group">
        @php
            $k="cons_checkbox_".$i;
        @endphp
        {!! Form::bsPrvModal('linked['.$k.']') !!}
        {!! Form::hidden('linked['.$k.'_txt]',trans('food::privacy.'.$k)) !!}
    </div>
    @endfor


    <input type="submit" value="@lang('pub_theme::auth.sign_up')" class="btn btn-red btn-round" style="color: white; border-radius: 25px 0px 25px 0px; box-shadow: 2px 2px 2px 2px #0000008a;">
</form>
<ul class="dialog-alt-links">
    <li><a href="{{ asset('/login') }}" class="ajax-popup-link"
           data-effect="mfp-zoom-out">@lang('pub_theme::auth.already_member')</a>
    </li>
</ul>

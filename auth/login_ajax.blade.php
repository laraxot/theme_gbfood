<form method="POST" action="{{ route('login') }}" accept-charset="UTF-8" class="dialog-form" id="formLogin">
    {{ csrf_field() }}
    <h2 class="text-center">@lang('pub_theme::auth.member_login')</h2>
    <p class="hint-text text-center">@lang('pub_theme::auth.member_login_subtitle')</p>
    <div class="social-btn text-center">
        @php
        $providers=['facebook','twitter','google'];
        @endphp
        @foreach($providers as $provider)
        <a href="{{ route('login.provider',['provider'=>$provider]) }}" class="btn btn-primary btn-lg" title="{{ $provider }}">
        <i class="fab fa-{{ $provider }}"></i>
        </a>
        @endforeach
    </div>
    <hr/>
    <div class="form-group">
        <input type="text" placeholder="email@domain.com" class="form-control" name="email" />
    </div>
    <div class="form-group">
        <input type="password" placeholder="Password" class="form-control" name="password" />
    </div>
    <div class="loginRes"></div>
    <label>
    <input type="checkbox" name="remember">@lang('pub_theme::auth.remember_me')
    </label>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg btn-block signup-btn" style="background-color: #01af16;">@lang('pub_theme::auth.ajax_login.sign_in')</button>
    </div>
</form>
<div class="text-center small"><a href="{{ route('password.request') }}"> @lang('pub_theme::auth.forgot_password')</a></div>
<hr>
<div class="text-right">
    <button type="submit" class="btn btn-primary mb-3" value="{{ route('register') }}">@lang('pub_theme::auth.not_member_yet')</button>
</div>

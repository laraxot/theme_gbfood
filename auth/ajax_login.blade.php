<style>
	.social-btn .btn {
	color: #fff;
	margin: 10px 0 0 30px;
	font-size: 15px;
	width: 55px;
	height: 55px;
	line-height: 38px;
	border-radius: 50%;
	font-weight: normal;
	text-align: center;
	border: none;
	transition: all 0.4s;
	}	
	.social-btn .btn:first-child {
	margin-left: 0;
	}
	.social-btn .btn:hover {
	opacity: 0.8;
	}
	.social-btn .btn-primary {
	background: #507cc0;
	}
	.social-btn .btn-info {
	background: #64ccf1;
	}
	.social-btn .btn-danger {
	background: #df4930;
	}
	.social-btn .btn i {
	font-size: 20px;
	}
</style>
<div class="loginRes"></div>
<div class="signin-form">
	<form method="POST" action="{{ route('login') }}" accept-charset="UTF-8" class="dialog-form" id="formLogin">
		{{ csrf_field() }}
		<h2>@lang('pub_theme::auth.member_login')</h2>
		<p class="hint-text">@lang('pub_theme::auth.member_login_subtitle')</p>
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
		<label>
		<input type="checkbox" name="remember">@lang('pub_theme::auth.ajax_login.remember_me')
		</label>
		<div class="form-group">
			<button type="submit" class="btn btn-success btn-lg btn-block signup-btn" style="background-color: #01af16;">@lang('pub_theme::auth.ajax_login.sign_in')</button>
		</div>
	</form>
	<div class="text-center small"><a href="{{ route('password.request') }}"> @lang('pub_theme::auth.ajax_login.forgot_password')</a></div>
	<hr>
	<button type="submit" class="btn btn-primary" value="{{ route('register') }}">@lang('pub_theme::auth.ajax_login.not_member_yet')</button>
</div>
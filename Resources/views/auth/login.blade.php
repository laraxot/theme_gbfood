<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body {
        color: #434343;
		background: #dfe7e9;
		font-family: 'Varela Round', sans-serif;
	}
    .form-control {
		font-size: 16px;
		transition: all 0.4s;
		box-shadow: none;
	}
	.form-control:focus {
        border-color: #5cb85c;
    }
    .form-control, .btn {
        border-radius: 50px;
		outline: none !important;
    }
	.signin-form {
		width: 400px;
    	margin: 0 auto;
		padding: 30px 0;
	}
    .signin-form form {
		border-radius: 5px;
    	margin-bottom: 20px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 40px;
    }
	.signin-form a {
		color: #5cb85c;
	}
	.signin-form h2 {
		text-align: center;
		font-size: 34px;
		margin: 10px 0 15px;
	}
	.signin-form .hint-text {
		color: #999;
		text-align: center;
		margin-bottom: 20px;
	}
	.signin-form .form-group {
		margin-bottom: 20px;
	}
    .signin-form .btn {
        font-size: 18px;
		line-height: 26px;
        font-weight: bold;
		text-align: center;
    }
    .signin-form .small {
        font-size: 13px;
    }
	.signup-btn {
		text-align: center;
		border-color: #5cb85c;
		transition: all 0.4s;
	}
	.signup-btn:hover {
		background: #5cb85c;
		opacity: 0.8;
	}
    .or-seperator {
        margin: 50px 0 15px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
        padding: 0 10px;
		width: 40px;
		height: 40px;
		font-size: 16px;
		text-align: center;
		line-height: 40px;
		background: #fff;
		display: inline-block;
        border: 1px solid #e0e0e0;
		border-radius: 50%;
        position: relative;
        top: -22px;
        z-index: 1;
    }
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
</head>
<body style="background-color: #131925;">
@extends('lu::layouts.app', ['title' => 'Login'])

@section('content')
    <div class="container">
	<div class="row">

<div class="signin-form">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
		<h2>Login</h2>
        <p class="hint-text">Accedi con il tuo account Social</p>
		<div class="social-btn text-center">
			<a href="/login/facebook" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
			<a href="/login/twitter" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
			<a href="/login/google" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
		</div>
		<div class="or-seperator"><b>O</b></div>

						{{ csrf_field() }}
						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>

								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif

        </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				 <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password" required>
								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
        	<label>
				<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn" style="background-color: #01af16;">Accedi</button>
        </div>
        <div class="text-center small"><a href="{{ route('password.request') }}">Hai dimenticato la password?</a></div>
        </form>
    <div class="text-center small" style="color: white;">Non hai un account? <a href="#" style="color: #01af16;">Registrati</a></div>
</div></div></div>
</body>
</html>
@endsection

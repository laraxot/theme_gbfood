<head>
	{!! Theme::metatags() !!}
	@php
	//<link rel="stylesheet" href="{{ mix('dist/css/app.css','themes/foodpicky') }}"> 
	Theme::add('pub_theme::dist/css/app.css',1);
	//Bootstrap core CSS 
	//Theme::add('/theme/pub/css/bootstrap.min.css',1);
	//Theme::add('/theme/pub/css/font-awesome.min.css');
	//Theme::add('/theme/pub/css/style-child.css');
	//Theme::add('/theme/pub/css/animsition.min.css');
	//Theme::add('/theme/pub/js/animsition.min.js');
	//Theme::add('/theme/bc/animsition/dist/css/animsition.min.css');
	//Theme::add('/theme/bc/animsition/dist/js/animsition.min.js');

	//Theme::add('/theme/pub/css/animate.css');
	
	//Theme::add('/theme/bc/glyphicons-only-bootstrap/css/bootstrap.min.css'); 
	
	//Custom styles for this template 
	//Theme::add('/theme/pub/css/style.css');
	//Theme::add('/theme/bc/cookieconsent/build/cookieconsent.min.css');
    //Theme::add('/theme/bc/cookieconsent/build/cookieconsent.min.js');
    //Theme::add('/theme/pub/css/xot.css');
	//@include('pub_theme::manychat.snip01')
    @endphp
	{!! Theme::showStyles(false) !!}
    @stack('styles')
    @yield('cssAdd')
	
</head>
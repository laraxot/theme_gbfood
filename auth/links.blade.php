@if(\Auth::check())
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" title="Welcome {{\Auth::user()->handle}}" href="#" data-effect="mfp-move-from-top" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i>@lang('lu::headernav.welcome') {{\Auth::user()->handle}}!
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ \Auth::user()->url }}" class="dropdown-item" title="profile">Profile</a></li>
            <li><a href="{{ route('logout') }}" class="dropdown-item" title="logout"
                onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                Logout
            </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
    </li>
@else
    <li class="nav-item">
        <a href="{{ route('login') }}" class="ajax-popup-link nav-link" id="js-login" title="login">
            <i class="fa fa-sign-in"></i>&nbsp;@lang('pub_theme::auth.sign_in')
        </a>
    </li>
     
    <li class="nav-item">
        <a href="{{ route('register') }}" class="nav-link" title="register" >
            <i class="fa fa-edit"></i>&nbsp;@lang('pub_theme::auth.sign_up')
        </a>
    </li>
{{--
<div id="login-ajax" class="mfp-with-anim mfp-hide mfp-dialog clearfix"><i class="fa fa-refresh fa-spin"></i></div>
<div id="register-ajax" class="mfp-with-anim mfp-hide mfp-dialog clearfix"><i class="fa fa-refresh fa-spin"></i></div>
@include('lu::auth.login_register_recover')
--}}
{{-- Theme::add('theme/bc/jquery/dist/jquery.min.js') 
{{ Theme::add('theme/bc/magnific-popup/dist/jquery.magnific-popup.min.js') }}
{{ Theme::add('theme/bc/magnific-popup/dist/magnific-popup.css') }}

{{ Theme::add('lu::css/lighbox.css') }}
{{ Theme::add('lu::js/lighbox.js') }}
--}}
@endif

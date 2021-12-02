<div class="mfp-with-anim mfp-dialog clearfix">
    <i class="fa fa-retweet dialog-icon"></i>
    <h3>@lang('pub_theme::auth.password_recovery')</h3>
    <h5>@lang('pub_theme::auth.password_recovery_subtitle')</h5>
    <form class="dialog-form" role="form" method="POST" action="{{ asset('/password/email') }}">{{ csrf_field() }}
        <label>E-mail</label>
        <input type="text" placeholder="email@domain.com" class="form-control" name="email">
        <input type="submit" value="@lang('pub_theme::auth.request_new_password')" class="btn btn-primary">
    </form>
    <br/>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">@lang('pub_theme::auth.already_member')</a>
        </li>
        <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">@lang('pub_theme::auth.not_member_yet')</a>
        </li>
    </ul>
</div>

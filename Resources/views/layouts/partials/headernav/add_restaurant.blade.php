@php
$showRegistration = true;
if (
    //(Auth::check() &&
    //count(\XRA\Food\Models\Restaurant::where("email",Auth::User()->email)->get()) > 0) ||
    Request::is($lang . '/restaurant/create') ||
    Request::is($lang . '/restaurant_owner/create')
) {
    $showRegistration = false;
}
$parz = [];
$parz['lang'] = \App::getLocale();
if (\Auth::check()) {
    $parz['container0'] = 'pages';
    $parz['item0'] = 'add-restaurant';
    $url = route('containers.show', $parz);
} else {
    //$parz['container0']='profile';
    $url = route('login', $parz);
}
@endphp


@if ($showRegistration)
    <li class="nav-item">
        <a href="{{ $url }}" class="btn btn-danger btn-red btn-round btn-giada" name="add-restaurant">
            @lang('pub_theme::headernav.add_your_restaurant')
        </a>
    </li>
@endif

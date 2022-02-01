@php
$restaurant_curr = collect($params)
    ->where('post_type', 'restaurant')
    ->last();
$cuisines = $restaurant_curr->cuisines;

$restaurant_panel = Panel::get($restaurant_curr);
$edit_url = $restaurant_panel->relatedUrl('cuisine', 'index_edit');
@endphp
<div class="sidebar clearfix m-b-20">
    <div class="main-block">
        <div class="sidebar-title white-txt">
            <h6>@lang($trad.'.choose_cuisine')</h6>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAjax" data-title=""
                data-href="{{ $edit_url }}">
                <i class="fa fa-wrench"></i>
            </button>



            <i class="fa fa-cutlery pull-right"></i>
        </div>
        {{-- @includeFirst([$_layout->view.'.item.add.cuisine',$_layout->view_default.'.item.add.cuisine']) --}}
        <ul>
            @foreach ($cuisines as $cuisine)
                <li><a href="#{{ $cuisine->post_id }}"
                        class="scroll active">[{{ $cuisine->post_id }}]{{ $cuisine->title }}</a></li>
            @endforeach
        </ul>
        <div class="clearfix"></div>
    </div>
</div>

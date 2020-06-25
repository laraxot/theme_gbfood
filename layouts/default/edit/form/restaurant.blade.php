{!! Form::bsOpen($row,'update') !!}
{!! Form::bsInPlaceTextarea('txt') !!}
{!! Form::close() !!}
@php
$parz=[];
$parz['container0']=$row->post_type;
$parz['item0']=$row;
$parz['container1']='event';
$url_e=route('container0.container1.index_edit',$parz);
@endphp
<a href="{{$url_e}}" class="btn btn-success">@lang('pub_theme::txt.manage_restaurant_event')</a>
<div class="widget clearfix">
	<div class="widget-heading">
		<h3 class="widget-title text-dark">
			@lang($view.'.opening_hours')
		</h3>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAjax" data-title="@lang($view.'.opening_hours')" 
                            data-href="{{ $create_url }}">
                            <i class="fa fa-plus"></i>
        </button>

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAjax" data-title="@lang($view.'.opening_hours')" 
                            data-href="{{ $edit_url }}">
                            <i class="fa fa-wrench"></i>
        </button>


		<div class="clearfix"></div>
	</div>
	@php
		$dayOfWeek= \Carbon\Carbon::now()->dayOfWeek;
		$daynames=['sun','mon','tue','wed','thu','fri','sat'];
		//ddd(get_class($openingHours));
	@endphp
		
	<div class="widget-body">
		{{--
		@includeFirst([$_layout->view.'.item.add.opening_hours',$_layout->view_default.'.item.add.opening_hours'])
		--}}
		<table class="table">
		{{--	
		<ul class="list-unstyled opening-hours">
		--}}
		@for($i=0;$i<7;$i++)
		{{--
		<li @if($i==$dayOfWeek) style="font-weight: 500;color:darkorange;" @endif>
		--}}
		<tr>
			<td>@lang('pub_theme::txt.day_names_short.'.$daynames[$i])</td>
			<td><span class="pull-right">
			@foreach($openingHours->where('day_of_week',$i)->sortBy('open_at') as $hour)
				@if($hour->is_closed)	
					<span style="color:red">closed</span>
				@else
					{{ $hour->open_at }} - {{ $hour->close_at }}
				@endif
				{{-- $hour->destroy_url --}}
				@php
					//ddd($hour->linkable);
					//ddd(Panel::get($hour)->destroyUrl());
				/*
					$parz=$params;
					$parz['container1']='opening_hour';
					$parz['item1']=$hour->id;
					$destroy_url=route('container0.container1.destroy',$parz);
					[{{ $hour->destroy_url }}]
				*/
				@endphp
				
				{{ Form::bsBtnDelete(['row'=>$hour]) }}
				
			@endforeach
			</span></td>
		</tr>
		{{--
		</li>
		--}}
		@endfor
		{{--
		</ul>
		--}}
		</table>
		@foreach($openingHours as $hour)
		@if(!$hour->is_closed)	
		<meta itemprop="openingHours" content="{{ substr($hour->day_name, 0,2) }} {{ $hour->open_at }}-{{ $hour->close_at }}"/>
		@endif
		@endforeach
	</div>
</div> 

<div class="widget clearfix">
	<div class="widget-heading">
		<h3 class="widget-title text-dark">
			@lang($_layout->trad.'.opening_hours.title')
		</h3>
		<div class="clearfix"></div>
	</div>
	@php
		$dayOfWeek= \Carbon\Carbon::now()->dayOfWeek;
		//$daynames=__('pub_theme::txt.week');
	@endphp
	<div class="widget-body">
		<ul class="list-unstyled opening-hours">
		@for($i=0;$i<7;$i++)
		<li @if($i==$dayOfWeek) style="font-weight: 500;color:darkorange;" @endif>@lang('pub_theme::txt.dayname_short.'.$i) 
			<span class="pull-right">
			@foreach($openingHours->where('day_of_week',$i)->sortBy('open_at') as $hour)
				@if($hour->is_closed)
					<span style="color:red">closed</span>
				@else
					{{substr($hour->open_at,0,-3)}} - {{substr($hour->close_at,0,-3)}}
				@endif
			@endforeach
			</span>
		</li>
		@endfor
		@foreach($openingHours as $hour)
		@if(!$hour->is_closed)
		<meta itemprop="openingHours" content="{{ substr($hour->day_name, 0,2) }} {{substr($hour->open_at,0,-3)}}-{{substr($hour->close_at,0,-3)}}"/>
		@endif
		@endforeach
		</ul>
	</div>
</div>

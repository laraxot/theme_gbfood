@php
		$restaurant = $row->pivot->post->post;
@endphp
<div vocab="http://schema.org/" typeof="Event">
<div class="bg-gray restaurant-entry">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left" style="max-width: 100%;">
			<div class="entry-logo">
				<a class="img-fluid" href="{{ $row->url }}" property="image">
					{!! $row->image_html(['width'=>100,'height'=>100]) !!}
				</a>
			</div>
			<!-- end:Logo -->
			<div class="entry-dscr">
				<h5 property="name"><a href="{{ $row->url }}">{{ $row->title }}</a></h5>
				<!-- <span >{{ $row->subtitle }} </span> -->
				<h6 property="description">{{ $row->subtitle }}</h6>
				<div class="text-truncate">{{ $row->txt }} </div>
				<br/>
				{{-- <i class="fa fa-cutlery" aria-hidden="true"></i> --}}
				<div property="startDate" content="{{ $row->date_start }}">start {{ $row->date_start }}</div>
				<div property="endDate" content="{{ $row->date_end }}">end {{ $row->date_end }}</div>

				<br/>
				@include('extend::layouts.partials.address',['row'=>$row->address])



				{{-- <p class="d-none" vocab="http://schema.org/" typeof="Organization">
					@foreach($restaurant->url_lang as $url)
					<span property="url">{{ url($url) }}</span>
					@endforeach
					<span property="name">{{$restaurant->title}}</span>
		    </p> --}}





				{{--
				@include('pub_theme::layouts.partials.item.address',['linked'=>$row->linked])
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
					<li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
				</ul>
				--}}
			</div>
			<!-- end:Entry description -->
		</div>
		{{-- <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
			<div class="right-content bg-white">
				<div class="right-review">

					<div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
					<p> 245 Reviews</p>

					{!! Form::bsBtnEdit(['row'=>$row]) !!}

				</div>
			</div>
			<!-- end:right info -->
		</div> --}}
	</div>
</div>
</div>

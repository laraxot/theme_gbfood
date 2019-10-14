@php
    $restaurant_curr=collect($params)->where('post_type','restaurant')->last();
    if($restaurant_curr==null) return;
    $cuisineCats = $restaurant_curr->cuisineCats;
    $ratings=$restaurant_curr->ratings;
    $rating_avg=$ratings->avg('rating');
    $rating_count=$ratings->count();
    $restaurant_panel=Panel::get($restaurant_curr);
@endphp
<section class="inner-page-hero bg-image" data-image-src="{{ Theme::asset('theme/pub/images/restaurant-bg.jpg') }}">
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                    <div class="image-wrap">
                        <figure>
                            {!! $restaurant_panel->imageHtml(['width'=>240,'height'=>140]) !!}
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc"
                     style="background-color: black;opacity: 0.6;filter: alpha(opacity=50);">
                    <div class="pull-right" style="float:right;">
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAjax" data-title="{{ $row->title }}" 
                            data-href="{{ $restaurant_panel->editUrl() }}">
                            <i class="fa fa-wrench"></i>
                        </button>


                    </div>
                    <div class="pull-left right-text white-txt">
                        <h6><a href="{{ $restaurant_curr->url }}">{{ $restaurant_curr->title }}</a></h6>
                        {{--  
                        <p>{{ $restaurant_curr->index_edit_url }}</p>
                        <a class="btn btn-small btn-green">Open</a> 
                        --}}
                        <p>{{ $restaurant_curr->subtitle }} </p>
                        <a href="tel:{{ $restaurant_curr->phone }}" class="btn btn-green"><i class="fa fa-phone"></i>{{ $restaurant_curr->phone }}</a>
                        @include('theme::layouts.partials.rating.avg',['row'=>$restaurant_curr])
                        {{--
                        <p>{{ $restaurant_curr->txt }}</p>
                        --}}
                        {{--
                        @foreach($restaurant_curr->ratingObjectives as $i_rating)
                            @php
                                $rates=$restaurant_curr->ratings->where('post_id',$i_rating->post_id);
                                $rating_avg=$rates->avg('pivot.rating');
                                $rating_count=$rates->count();
                            @endphp
                            @include('pub_theme::layouts.partials.rating',['label'=>$i_rating->title,'rating_avg'=>$rating_avg,'rating_count'=>$rating_count])
                        @endforeach
                        --}}
                        {{--
                        <ul class="nav nav-inline">
                            
                            <li class="nav-item"> <a class="nav-link active" href="#"><i class="fa fa-check"></i> Min $ 10,00</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-motorcycle"></i> 30 min</a> </li>
                            
                            <li class="nav-item ratings">
                                
                                <a class="nav-link" href="#">
                                    <span>
                                        @for($i=1;$i<=$rating_avg;$i++)
                                        <i class="fa fa-star"></i>
                                        @endfor
                                        @for($i=$rating_avg;$i<5;$i++)
                                        <i class="fa fa-star-o"></i>
                                        @endfor
                                        {{ $rating_count }} Votes
                                    </span>
                                </a>

                            </li>
                            
                        </ul>
                        --}}
                    </div>
                    <div class="font-white">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        @if($cuisineCats != null)
                            @foreach($cuisineCats as $cuisineCat)
                                <span itemprop="servesCuisine" class="font-white">{{ $cuisineCat->title }}</span>,
                            @endforeach
                        @endif
                        <br/>
                        @include('pub_theme::layouts.partials.item.address',['linked'=>$restaurant_curr])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
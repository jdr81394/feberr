@include('version')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Helper::translation(2993,$translate) }} - {{ $allsettings->site_title }}</title>
    @include('stylesheet')
    @include('dynamic-style')
</head>

<body class="preload term-condition-page">

    @include('header')
    
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row jplist-panel">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3>{{ Helper::translation(2993,$translate) }}</h3>
                                <h4 class="mt-3 pt-3 text--white">{{ Helper::translation(2994,$translate) }}</h4>
                            </div>
                            <div class="countdown-timer">
                            <ul id="example">
                                <li class="pt-2 pb-1 mb-2"><span class="days">00</span><div>{{ Helper::translation(2995,$translate) }}</div></li>
                                <li class="pt-2 pb-1 mb-2"><span class="hours">00</span><div>{{ Helper::translation(2996,$translate) }}</div></li>
                                <li class="pt-2 pb-1 mb-2"><span class="minutes">00</span><div>{{ Helper::translation(2997,$translate) }}</div></li>
		                        <li class="pt-2 pb-1 mb-2"><span class="seconds">00</span><div>{{ Helper::translation(2998,$translate) }}</div></li>
                           </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
    <section class="products section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row items">
                        
                        
                        
                        @foreach($itemData['item'] as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- start .single-product -->
                            <div class="product product--card product--card-small">

                                <div class="product__thumbnail">
                                    @if($item->item_preview!='')
                                        <img src="{{ url('/') }}/public/storage/items/{{ $item->item_preview }}" alt="{{ $item->item_name }}" class="item-thumbnail">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.png" alt="{{ $item->item_name }}" class="item-thumbnail">
                                        @endif
                                    <div class="prod_btn">
                                        
                                        <a href="{{ URL::to('/item') }}/{{ $item->item_slug }}/{{ $item->item_id }}" class="transparent btn--sm btn--round">{{ Helper::translation(2999,$translate) }}</a>
                                        <a href="{{ url('/preview') }}/{{ $item->item_slug }}/{{ $item->item_id }}" class="transparent btn--sm btn--round" target="_blank">{{ Helper::translation(3000,$translate) }}</a>
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="{{ URL::to('/item') }}/{{ $item->item_slug }}/{{ $item->item_id }}" class="product_title">
                                    <h4 class="title">{{ substr($item->item_name,0,20).'...' }}</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                           @if($item->user_photo!='')
                                        <img  src="{{ url('/') }}/public/storage/users/{{ $item->user_photo }}" alt="{{ $item->username }}" class="auth-img">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-user.png" alt="{{ $item->username }}" class="auth-img">
                                        @endif
                                            <p>
                                                <a href="{{ URL::to('/user') }}/{{ $item->username }}">{{ $item->username }}</a>
                                            </p>
                                        </li>
                                        <li class="out_of_class_name">
                                            <div class="sell">
                                                <p>
                                                    <span class="lnr lnr-cart"></span>
                                                    <span>{{ $item->item_sold }}</span>
                                                </p>
                                            </div>
                                            @php
                                            if(count($item->ratings) != 0)
                                            {
                                            $top = 0;
                                            $bottom = 0;
                                            
                                            foreach($item->ratings as $view)
                                            { 
                                            if($view->rating == 1){ $value1 = $view->rating*1; } else { $value1 = 0; }
                                            if($view->rating == 2){ $value2 = $view->rating*2; } else { $value2 = 0; }
                                            if($view->rating == 3){ $value3 = $view->rating*3; } else { $value3 = 0; }
                                            if($view->rating == 4){ $value4 = $view->rating*4; } else { $value4 = 0; }
                                            if($view->rating == 5){ $value5 = $view->rating*5; } else { $value5 = 0; }
                                            $top += $value1 + $value2 + $value3 + $value4 + $value5;
                                            $bottom += $view->rating;
                                            
                                            }
                                            
                                            
                                            if(!empty(round($top/$bottom)))
                                              {
                                                $count_rating = round($top/$bottom);
                                              }
                                              else
                                              {
                                                $count_rating = 0;
                                              }
                                            }
                                            else
                                            {
                                              $count_rating = 0;
                                            }  
                                            @endphp
                                            <div class="rating product--rating">
                                                <ul>
                                                    @if($count_rating == 0)
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                   @endif 
                                                   @if($count_rating == 1)
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                   @endif 
                                                   @if($count_rating == 2)
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                   @endif
                                                   @if($count_rating == 3)
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                   @endif
                                                   @if($count_rating == 4)
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star-o"></span>
                                                    </li>
                                                   @endif
                                                   @if($count_rating == 5)
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                   @endif
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end /.product-desc -->
                               <span class="new-items display-none">{{ $item->item_id }}</span>
                               <span class="popular-items display-none">{{ $item->item_liked }}</span>
                               <span class="free-items display-none">{{ $item->free_download }}</span>
                               
                                <div class="product-purchase">
                                    <div class="price_love like">
                                        @if($item->free_download == 1)
                                    <span>{{ Helper::translation(2992,$translate) }}</span>
                                    @else
                                    @if($item->item_flash == 1)
                                    <span class="flash">{{ round($item->regular_price/2) }} {{ $allsettings->site_currency }}</span>
                                    @endif
                                    <span><del>{{ $item->regular_price }} {{ $allsettings->site_currency }}</del></span>
                                    
                                    @endif
                                    </div>
                                    <a href="{{ URL::to('/shop') }}/item-type/{{ $item->item_type }}" class="theme-color">
                                            <span class="lnr lnr-book"></span>{{ str_replace('-',' ',$item->item_type) }}</a>
                                </div>
                               <span class="{{ $item->item_type }}" style="display:none;">{{ $item->item_type }}</span>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        @endforeach 
                       
                        
                       
                       
                       
                       
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
   @include('footer')
    
   @include('javascript')
   @if(!empty($allsettings->site_flash_end_date))
	<script type="text/javascript">
            $('#example').countdown({
                date: '{{ date("m/d/Y H:i:s", strtotime($allsettings->site_flash_end_date)) }}',
                offset: -8,
                day: 'Day',
                days: 'Days'
            }, function () {
                
            });
    </script>
    @endif
</body>

</html>
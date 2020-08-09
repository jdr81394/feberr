@include('version')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Helper::translation(2862,$translate) }} - {{ $allsettings->site_title }}</title>
    @include('stylesheet')
    @include('dynamic-style')
</head>

<body class="preload home1 mutlti-vendor">

    
    @include('header')
    
    <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_banner }}" alt="{{ $allsettings->site_title }}">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    
                                     <span class="bold">{{ $allsettings->site_banner_heading }}</span>
                                </h1>
                                <p class="tagline">{{ $allsettings->site_banner_subheading }}</p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                            <div class="col-md-9 search_align">    
                            <div class="search_box">
                            
                             <form action="{{ route('shop') }}" class="setting_form" method="post" id="profile_form" enctype="multipart/form-data">
                             {{ csrf_field() }}   
                                <input type="text" class="text_field" name="product_item" placeholder="{{ Helper::translation(3030,$translate) }}">
                                <div class="search__select select-wrap">
                                    <select name="category" class="select--field" id="blah">
                                    <option value=""></option>
                                    @foreach($categories['menu'] as $menu)
                                        <option value="category_{{ $menu->cat_id }}">{{ $menu->category_name }}</option>
                                         @foreach($menu->subcategory as $sub_category)
                                           <option value="subcategory_{{$sub_category->subcat_id}}"> - {{ $sub_category->subcategory_name }}</option>
                                         @endforeach  
                                    @endforeach     
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                                <button type="submit" class="search-btn btn--lg">{{ Helper::translation(3031,$translate) }}</button>
                            </form>
                        </div>
                        </div>
                                
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
       
       
       
    </section>
   
   
   
    @if($allsettings->site_layout == '')
    <section class="featured-products section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <h2>{{ Helper::translation(3033,$translate) }} </h2>
                    
                    <div class="row margin-top-30">
                    @foreach($featured['items'] as $items)
                    <div class="featured">
                       <a href="{{ URL::to('/item') }}/{{ $items->item_slug }}/{{ $items->item_id }}" title="{{ $items->item_name }}">
                                   @if($items->item_thumbnail!='')
                                        <img  src="{{ url('/') }}/public/storage/items/{{ $items->item_thumbnail }}" alt="{{ $items->item_name }}">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.jpg" alt="{{ $items->item_name }}">
                                        @endif
                                       </a>
                    </div>
                    @endforeach
                    
                    
                    </div>
                    
                    
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <div align="center" class="margin-top-20"><a href="{{ URL::to('/shop/featured-items') }}" class="btn btn--sm theme-button">{{ Helper::translation(3032,$translate) }}</a></div>
            <!-- end /.row -->
        </div>

       
    </section>
    
    
    @else
      
    <section class="featured-products section--padding">
        <!-- start /.container -->
        <div class="container">
        
            <!-- start row -->
            <div class="row">
            
                <!-- start col-md-12 -->
                <div>
                    <h2>{{ Helper::translation(3033,$translate) }} </h2>
                    
                    <div class="row margin-top-30">
                    @foreach($featured['items'] as $items)
                    <div class="featured">
                       <a class="tip_trigger" href="{{ URL::to('/item') }}/{{ $items->item_slug }}/{{ $items->item_id }}" title="{{ $items->item_name }}" >
                                   @if($items->item_thumbnail!='')
                                        <img  src="{{ url('/') }}/public/storage/items/{{ $items->item_thumbnail }}" alt="{{ $items->item_name }}">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.jpg" alt="{{ $items->item_name }}">
                                        @endif
                                        <span class="tip">
                                        <div class="row">
                                          <div class="col-md-12" align="center">
                                            @if($items->item_preview!='')
                                        <img src="{{ url('/') }}/public/storage/items/{{ $items->item_preview }}" alt="{{ $items->item_name }}">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.png" alt="{{ $items->item_name }}">
                                        @endif
                                          </div>
                                        </div>    
                                        <div class="row">
                                        <div class="col-md-8 text-left">
                                        <div class="titleitem">{{ $items->item_name }}</div>
                                        <span class="authorr">{{ Helper::translation(3034,$translate) }}{{ $items->username }}</span>
                                        </div>
                                         <div class="col-md-4 text-right">
                                        <div class="currrency">
                                        @if($items->free_download == 1)
                                        <span>{{ Helper::translation(2992,$translate) }}</span>
                                        @else
                                        <span>{{ $items->regular_price }} {{ $allsettings->site_currency }}</span>
                                        @endif
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        </div>
                                        </span>
                    </a>
                    </div>
                    @endforeach
                    
                    
                    </div>
                    
                    
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <div align="center" class="margin-top-20"><a href="{{ URL::to('/shop/featured-items') }}" class="btn btn--sm theme-button">{{ Helper::translation(3032,$translate) }}</a></div>
            <!-- end /.row -->
        </div>

       
    </section>
    
    @endif
    
    
    
    
    
    
    
    
    
    <section class="products section--padding">
        <!-- start container -->
        <div class="container" id="demo">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <h2>{{ Helper::translation(3035,$translate) }} <span class="highlighted">{{ Helper::translation(3003,$translate) }}</span></h2>
                    
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
            
           

            
                    
            <div id="demo" class="box jplist">
				
					
					
					<!-- panel -->
					<div class="jplist-panel box panel-top">						
											
						<div class="jplist-group sorting">

						   <ul>
							  @foreach($newest['items'] as $items)
                              <li>
								 
                                 <a href="javascript:void(0);" data-control-type="button-text-filter"
									data-control-action="filter"
									data-control-name="{{ $items->cat_id }}_category"
									data-path=".block"
									data-text="{{ $items->cat_id }}_category">{{ $items->category_name }}</a>
							  </li>
							  @endforeach
							  
						   </ul>
						</div>
						
					</div>				 
					
					
                    
                    @if($allsettings->site_layout == '')
                    <div class="row list">
                        
                        
                        
                        @foreach($itemData['item'] as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 list-item">
                            
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
                                    
                                </div>
                                

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
                               <div class="block"> 
                               <span class="{{ $item->item_category }}_{{ $item->item_category_type }} display-none">{{ $item->item_category }}_{{ $item->item_category_type }}</span>
                               </div>
                               
                                <div class="product-purchase">
                                    <div class="price_love like">
                                    @if($item->free_download == 1)
                                    <span>{{ Helper::translation(2992,$translate) }}</span>
                                    @else
                                    @if($item->item_flash == 1)
                                    <span class="flash">{{ round($item->regular_price/2) }} {{ $allsettings->site_currency }}</span>
                                    @else
                                    <span>{{ $item->regular_price }} {{ $allsettings->site_currency }}</span>
                                    @endif
                                    @endif
                                    </div>
                                    <a href="{{ URL::to('/shop') }}/item-type/{{ $item->item_type }}" class="theme-color">
                                            <span class="lnr lnr-book"></span>{{ str_replace('-',' ',$item->item_type) }}</a>
                                </div>
                               
                                
                            </div>
                           
                        </div>
                        @endforeach 
                       
                    </div>
                    @else
                    <div class="row list">
                    @foreach($itemData['item'] as $items)
                    <div class="list-item featured">
                       <a class="tip_trigger" href="{{ URL::to('/item') }}/{{ $items->item_slug }}/{{ $items->item_id }}" title="{{ $items->item_name }}" >
                                   @if($items->item_thumbnail!='')
                                        <img  src="{{ url('/') }}/public/storage/items/{{ $items->item_thumbnail }}" alt="{{ $items->item_name }}">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.jpg" alt="{{ $items->item_name }}">
                                        @endif
                                        <span class="tip">
                                        <div class="row">
                                          <div class="col-md-12" align="center">
                                            @if($items->item_preview!='')
                                        <img src="{{ url('/') }}/public/storage/items/{{ $items->item_preview }}" alt="{{ $items->item_name }}">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.png" alt="{{ $items->item_name }}">
                                        @endif
                                          </div>
                                        </div>    
                                        <div class="row">
                                        <div class="col-md-8 text-left">
                                        <div class="titleitem">{{ $items->item_name }}</div>
                                        <span class="authorr">{{ Helper::translation(3034,$translate) }} {{ $items->username }}</span>
                                        </div>
                                         <div class="col-md-4 text-right">
                                        <div class="currrency">
                                        @if($items->free_download == 1)
                                        <span>{{ Helper::translation(2992,$translate) }}</span>
                                        @else
                                        <span>{{ $items->regular_price }} {{ $allsettings->site_currency }}</span>
                                        @endif
                                        </div>
                                        </div>
                                        </div>
                                        </span>
                                        
                    </a>
                    <div class="block"> 
                               <span class="{{ $items->item_category }}_{{ $items->item_category_type }} display-none">{{ $items->item_category }}_{{ $items->item_category_type }}</span>
                               </div>
                    </div>
                    @endforeach
                    </div>
                    @endif
                    
					<!--<div class="box jplist-no-results text-shadow align-center">
						<p>No results found</p>
					</div>-->
								
				</div>
                
                <div align="center" class="margin-top-20"><a href="{{ URL::to('/shop/recent-items') }}" class="btn btn--sm theme-button">{{ Helper::translation(3036,$translate) }}</a></div>
            
            
        </div>
        
    </section>
    
    
    <section class="counter-up-area bgimage">
        <div class="bg_image_holder">
            <img src="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_count_bg }}" alt="">
        </div>
        <!-- start .container -->
        <div class="container content_above">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="counter-up">
                    <div class="counter mcolor2">
                        <span class="lnr lnr-briefcase"></span>
                        <span class="count">{{ $totalearning }}</span> <span>{{ $allsettings->site_currency }}</span>
                        <p>{{ Helper::translation(3037,$translate) }}</p>
                    </div>
                    <div class="counter mcolor3">
                        <span class="lnr lnr-cloud-download"></span>
                        <span class="count">{{ $totalfiles }}</span>
                        <p>{{ Helper::translation(3038,$translate) }}</p>
                    </div>
                    <div class="counter mcolor1">
                        <span class="lnr lnr-cart"></span>
                        <span class="count">{{ $totalsales }}</span>
                        <p>{{ Helper::translation(3039,$translate) }}</p>
                    </div>
                    <div class="counter mcolor4">
                        <span class="lnr lnr-users"></span>
                        <span class="count">{{ $totalmembers }}</span>
                        <p>{{ Helper::translation(3002,$translate) }}</p>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
    @if($allsettings->site_layout == '')
    <section class="featured-products bgcolor section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <h2>{{ Helper::translation(3040,$translate) }} </h2>
                    
                    <div class="row margin-top-30">
                    @foreach($free['items'] as $items)
                    <div class="featured">
                       <a href="{{ URL::to('/item') }}/{{ $items->item_slug }}/{{ $items->item_id }}" title="{{ $items->item_name }}">
                                   @if($items->item_thumbnail!='')
                                        <img  src="{{ url('/') }}/public/storage/items/{{ $items->item_thumbnail }}" alt="{{ $items->item_name }}">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.jpg" alt="{{ $items->item_name }}">
                                        @endif
                                       </a>
                    </div>
                    @endforeach
                    
                    
                    </div>
                    
                    
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <div align="center" class="mt-3"><a href="{{ URL::to('/free-items') }}" class="btn btn--sm theme-button">{{ Helper::translation(3041,$translate) }}</a></div>
            <!-- end /.row -->
        </div>

       
    </section>
    
    
    @else
    
    <section class="featured-products bgcolor section--padding">
        <!-- start /.container -->
        <div class="container">
        
            <!-- start row -->
            <div class="row">
            
                <!-- start col-md-12 -->
                <div>
                    <h2>{{ Helper::translation(3040,$translate) }} </h2>
                    
                    <div class="row margin-top-30">
                    @foreach($free['items'] as $items)
                    <div class="featured">
                       <a class="tip_trigger" href="{{ URL::to('/item') }}/{{ $items->item_slug }}/{{ $items->item_id }}" title="{{ $items->item_name }}" >
                                   @if($items->item_thumbnail!='')
                                        <img  src="{{ url('/') }}/public/storage/items/{{ $items->item_thumbnail }}" alt="{{ $items->item_name }}">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.jpg" alt="{{ $items->item_name }}">
                                        @endif
                                        <span class="tip">
                                        <div class="row">
                                          <div class="col-md-12" align="center">
                                            @if($items->item_preview!='')
                                        <img src="{{ url('/') }}/public/storage/items/{{ $items->item_preview }}" alt="{{ $items->item_name }}">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.png" alt="{{ $items->item_name }}">
                                        @endif
                                          </div>
                                        </div>    
                                        <div class="row">
                                        <div class="col-md-8 text-left">
                                        <div class="titleitem">{{ $items->item_name }}</div>
                                        <span class="authorr">{{ Helper::translation(3034,$translate) }} {{ $items->username }}</span>
                                        </div>
                                         <div class="col-md-4 text-right">
                                        <div class="currrency">
                                        @if($items->free_download == 1)
                                        <span>{{ Helper::translation(2992,$translate) }}</span>
                                        @else
                                        <span>{{ $items->regular_price }} {{ $allsettings->site_currency }}</span>
                                        @endif
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        </div>
                                        </span>
                    </a>
                    </div>
                    @endforeach
                    
                    
                    </div>
                    
                    
                   
                </div>
                <!-- end /.col-md-12 -->
            </div>
            
            <div align="center" class="mt-3"><a href="{{ URL::to('/free-items') }}" class="btn btn--sm theme-button">{{ Helper::translation(3041,$translate) }}</a></div>
            
            <!-- end /.row -->
        </div>

       
    </section>
    @endif
    
    
    
    <section class="testimonial-area section--padding">
       
        <div class="container">
            
            <div class="row">
              
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>{{ Helper::translation(3042,$translate) }}
                            <span class="highlighted">{{ Helper::translation(3043,$translate) }}</span>
                        </h1>
                        <p>{{ Helper::translation(3044,$translate) }}</p>
                    </div>
                </div>
               
            </div>
           
           
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-slider">
                        
                        
                        @foreach($review['data'] as $review)
                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                   <a href="{{ URL::to('/user') }}/{{ $review->username }}">
                                   @if($review->user_photo!='')
                                        <img  src="{{ url('/') }}/public/storage/users/{{ $review->user_photo }}" alt="{{ $review->username }}">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-user.png" alt="{{ $review->username }}">
                                        @endif
                                       </a> 
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name"><a href="{{ URL::to('/user') }}/{{ $review->username }}">{{ $review->username }}</a></h4>
                                    <span class="desig">{{ $review->profile_heading }}</span>
                                    
                                </div>
                                <span class="quote-icon">{{ $review->rating }}<i class="lnr lnr-star"></i></span>
                            </div>
                            <div class="testimonial__text">
                                <p>{{ $review->rating_comment }}</p>
                            </div>
                        </div>
                       @endforeach 
                        
                        
                        
                    </div>
                    

                   
                </div>
                
            </div>
            
        </div>
        
    </section>
    
    
    
    
    @if($allsettings->site_blog_display == 1)
    @if($allsettings->home_blog_display == 1)
    <section class="latest-news section--padding">
        
        <div class="container">
           
            <div class="row">
                
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>{{ Helper::translation(3045,$translate) }}
                            <span class="highlighted">{{ Helper::translation(2877,$translate) }}</span>
                        </h1>
                        <p>{{ Helper::translation(3046,$translate) }}</p>
                    </div>
                </div>
               
            </div>
           
            <div class="row">
            @foreach($blog['data'] as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="single_blog blog--card">
                        <figure>
                            
                            <a href="{{ URL::to('/single') }}/{{ $post->post_slug }}">
                            @if($post->post_image!='')
                                        <img src="{{ url('/') }}/public/storage/post/{{ $post->post_image }}" alt="{{ $post->post_title }}" class="tag-img">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.png" alt="{{ $post->post_title }}" class="tag-img">
                                        @endif
                                        </a>
                            <figcaption>
                                <div class="blog__content">
                                    <a href="{{ URL::to('/single') }}/{{ $post->post_slug }}" class="blog__title ellipsis">
                                        <h4>{{ $post->post_title.'...' }}</h4>
                                    </a>
                                    <p>{{ substr($post->post_short_desc,0,200).'...' }}</p>
                                </div>

                                <div class="blog__meta">
                                    <div class="date_time">
                                        <span class="lnr lnr-clock"></span>
                                        <p>{{ date('d F Y', strtotime($post->post_date)) }}</p>
                                    </div>
                                    <div class="comment_view">
                                        <p class="comment">
                                            <span class="lnr lnr-bubble"></span>{{ $comments->has($post->post_id) ? count($comments[$post->post_id]) : 0 }}</p>
                                        <p class="view">
                                            <span class="lnr lnr-eye"></span>{{ $post->post_view }}</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    
                </div>
                @endforeach
               
            </div>
            
        </div>
        
    </section>
    @endif
    @endif
    
    
    
    
    
    <section class="why_choose section--padding">
       <div class="container">
            
            <div class="row">
                
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>{{ Helper::translation(3047,$translate) }}
                            <span class="highlighted">{{ $allsettings->site_title }}?</span>
                        </h1>
                        <p>{{ Helper::translation(3048,$translate) }}</p>
                    </div>
                </div>
               
            </div>
            

            
            <div class="row">
            
            
              <div class="col-lg-3 col-md-3">
                    
                    <div class="feature2">
                       
                        <div class="feature2__content">
                            <span class="{{ $allsettings->site_icon1 }} theme-color"></span>
                            <h3 class="feature2-title">{{ $allsettings->site_text1 }}</h3>
                            
                        </div>
                        
                    </div>
                    
                </div>
            
            
            
                
                <div class="col-lg-3 col-md-3">
                    
                    <div class="feature2">
                        
                        <div class="feature2__content">
                            <span class="{{ $allsettings->site_icon2 }} theme-color"></span>
                            <h3 class="feature2-title">{{ $allsettings->site_text2 }}</h3>
                           
                        </div>
                        
                    </div>
                    
                </div>
                

                
                <div class="col-lg-3 col-md-3">
                    
                    <div class="feature2">
                        
                        <div class="feature2__content">
                            <span class="{{ $allsettings->site_icon3 }} theme-color"></span>
                            <h3 class="feature2-title">{{ $allsettings->site_text3 }}</h3>
                            
                        </div>
                        
                    </div>
                    
                </div>
                

                <div class="col-lg-3 col-md-3">
                    
                    <div class="feature2">
                        
                        <div class="feature2__content">
                            <span class="{{ $allsettings->site_icon4 }} theme-color"></span>
                            <h3 class="feature2-title">{{ $allsettings->site_text4 }}</h3>
                            
                        </div>
                        
                    </div>
                    
                </div>

                
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>   
    
   @include('footer')
    
   @include('javascript')
    
</body>

</html>
@include('version')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Helper::translation(2926,$translate) }} - {{ $allsettings->site_title }}</title>
    @include('stylesheet')
    @include('dynamic-style')
</head>

<body class="preload">

    @include('header')
    
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{ URL::to('/') }}">{{ Helper::translation(2862,$translate) }}</a>
                            </li>
                            <li class="active">
                                <a href="{{ URL::to('/user') }}">{{ Helper::translation(2926,$translate) }}</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">{{ Helper::translation(2926,$translate) }}</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    <section class="author-profile-area">
        <div class="container">
        <div>
                   
        @if ($message = Session::get('success'))
               <div class="alert alert-success" role="alert">
                                <span class="alert_icon lnr lnr-checkmark-circle"></span>
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="lnr lnr-cross" aria-hidden="true"></span>
                                </button>
                            </div>
        @endif
        
        
        @if ($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
                                <span class="alert_icon lnr lnr-warning"></span>
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="lnr lnr-cross" aria-hidden="true"></span>
                                </button>
                            </div>
        @endif
        
        @if (!$errors->isEmpty())
        <div class="alert alert-danger" role="alert">
        <span class="alert_icon lnr lnr-warning"></span>
        @foreach ($errors->all() as $error)
         
        {{ $error }}

       @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="lnr lnr-cross" aria-hidden="true"></span>
        </button>
        </div>
        @endif
        
                    
                </div>
            <div class="row">
                @include('user-menu')
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        @include('user-box')
                        <!-- end /.col-md-4 -->

                        <div class="col-md-12 col-sm-12">
                            <div class="author_module">
                                
                                @if($user['user']->user_banner != '')
                                    <img src="{{ url('/') }}/public/storage/users/{{ $user['user']->user_banner }}" alt="{{ $user['user']->username }}">
                                 @else
                                 <img src="{{ url('/') }}/public/img/no-image.jpg" alt="{{ $user['user']->username }}">
                                 @endif
                            </div>

                            @if($user['user']->profile_heading != '')
                            <div class="author_module about_author">
                                <h2>{{ $user['user']->profile_heading }}
                                </h2>
                                <p>{{ $user['user']->about }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!-- end /.row -->
                    @if($user['user']->user_type == 'vendor')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2>{{ Helper::translation(2886,$translate) }}</h2>
                                </div>

                                
                            </div>
                            <!-- end /.product-title-area -->
                        </div>
                        <div class="col-md-12 row" id="listShow">
                        @foreach($itemData['item'] as $item)
                        <div class="col-lg-6 col-md-6 li-item">
                            <!-- start .single-product -->
                            <div class="product product--card">

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
                                    <a href="{{ URL::to('/item') }}/{{ $item->item_slug }}/{{ $item->item_id }}" class="product_title ellipsis">
                                    <h4>{{ $item->item_name }}</h4>
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
                                        <li class="product_cat">
                                             <a href="{{ URL::to('/shop') }}/item-type/{{ $item->item_type }}" class="theme-color">
                                            <span class="lnr lnr-book"></span>{{ str_replace('-',' ',$item->item_type) }}</a>
                                        </li>
                                    </ul>

                                    <p>{{ substr($item->item_shortdesc,0,120).'...' }}</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        @if($item->free_download == 1)
                                    <span>Free</span>
                                    @else
                                    <span>{{ $item->regular_price }} {{ $allsettings->site_currency }}</span>
                                    @endif
                                        <p>
                                            <span class="lnr lnr-heart"></span> {{ $item->item_liked }}</p>
                                    </div>

                                    <div class="rating product--rating">
                                        <!--<ul>
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
                                                <span class="fa fa-star-half-o"></span>
                                            </li>
                                        </ul>-->
                                    </div>

                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>{{ $item->item_sold }}</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                       @endforeach 
                       </div>
                       
                        
                      <div class="col-md-12 row" align="right">
                    <div class="col-md-12">
                        <div class="pagination-area">
                           <div class="turn-page" id="pager"></div>
                        </div>
                       
                    </div>
                   
                </div>  
                </div>
                 @endif   
                 <!-- end /.row -->
                </div>
                <!-- end /.col-md-8 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
    
    
    
    @include('footer')
    
    @include('javascript')
</body>

</html>
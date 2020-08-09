<div class="menu-area">
       <div class="top-menu-area theme-primary">
            <div class="container">
                <div class="row">
                   <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            @if($allsettings->site_logo != '')
                            <a href="{{ URL::to('/') }}">
                                <img src="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_logo }}" alt="{{ $allsettings->site_title }}" width="180" class="img-fluid">
                            </a>
                            @endif
                        </div>
                    </div>
                    @if(Auth::guest())
                    <div class="col-lg-9 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area">
                            <div class="author__notification_area">
                                <ul class="topmenu">
                                   <li>
                                          <a href="{{ URL::to('/start-selling') }}">{{ Helper::translation(3018,$translate) }}</a>
                                    </li>
                                    @if($allsettings->site_blog_display == 1)
                                    <li>
                                        <a href="{{ URL::to('/blog') }}">{{ Helper::translation(2877,$translate) }}</a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="{{ URL::to('/contact') }}">{{ Helper::translation(2910,$translate) }}</a>
                                    </li>
                                    @if($count_help != 0)
                                    @if($help['page']->page_status == 1 && $help['page']->main_menu == 1)
                                    <li>
                                        <a href="{{ URL::to('/page/') }}/{{ $help['page']->page_id }}/{{ $help['page']->page_slug }}">{{ $help['page']->page_title }}</a>
                                    </li>
                                    @endif
                                    @endif
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-cart"></span>
                                            <span class="notification_count purch theme-button">0</span>
                                        </div>
                                        <div class="dropdowns dropdown--cart">
                                            <div class="cart_area">
                                             <p align="center" class="emptycart">{{ Helper::translation(2898,$translate) }}</p> 
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @if($allsettings->multi_language == 1)
                            <div class="inline mover15 mover-top10 has_dropdown">
                                <div class="autor__info">
                                    <p class="name">
                                        {{ $language_title }}
                                    </p>
                                 </div>
                                 <div class="dropdowns dropdown--author mt-3">
                                    <ul>
                                     @foreach($languages['view'] as $language) 
                                     <li>
                                            <a href="{{ URL::to('/translate') }}/{{ $language->language_code }}">{{ $language->language_name }}</a>
                                      </li>
                                      @endforeach
                                     </ul>
                                </div>
                            </div>
                            @endif
                            <span class="login-btn">
                            <a href="{{ url('/register') }}" class="btn btn--icon btn-ss btn-secondary radius-left md-login mdevice-off">{{ Helper::translation(3019,$translate) }}</a>
                            <a href="{{ url('/login') }}" class="btn btn--icon btn-ss btn-secondary radius-right md-login">{{ Helper::translation(3020,$translate) }}</a>
                            </span>
                         </div>
                   </div>
                   @endif         
                   @if (Auth::check())
                    <div class="col-lg-9 col-md-9 col-6 v_middle">
                        <div class="author-area">
                            <div class="author__notification_area">
                                <ul class="topmenu">
                                  <li>
                                          <a href="{{ URL::to('/start-selling') }}">{{ Helper::translation(3018,$translate) }}</a>
                                    </li>
                                    @if($allsettings->site_blog_display == 1)
                                    <li>
                                        <a href="{{ URL::to('/blog') }}">{{ Helper::translation(2877,$translate) }}</a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="{{ URL::to('/contact') }}">{{ Helper::translation(2910,$translate) }}</a>
                                    </li>
                                    @if($count_help != 0)
                                    @if($help['page']->page_status == 1 && $help['page']->main_menu == 1)
                                    <li>
                                        <a href="{{ URL::to('/page/') }}/{{ $help['page']->page_id }}/{{ $help['page']->page_slug }}">{{ $help['page']->page_title }}</a>
                                    </li>
                                    @endif
                                    @endif
                                    @if(Auth::user()->id != 1)
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <a href="{{ url('/cart') }}"><span class="lnr lnr-cart"></span></a>
                                            <span class="notification_count purch theme-button">{{ $cartcount }}</span>
                                        </div>
                                        @if($cartcount != 0)
                                        <div class="dropdowns dropdown--cart">
                                            <div class="cart_area">
                                            @php $subtotal = 0; @endphp
                                            @foreach($cartitem['item'] as $cart)
                                                <div class="cart_product">
                                                    <div class="product__info">
                                                        <div class="thumbn">
                                                        <a href="{{ url('/item') }}/{{ $cart->item_slug }}/{{ $cart->item_id }}">
                                                            @if($cart->item_thumbnail!='')
                                            <img src="{{ url('/') }}/public/storage/items/{{ $cart->item_thumbnail }}" alt="{{ $cart->item_name }}" class="cart-thumb-small">
                                            @else
                                            <img src="{{ url('/') }}/public/img/no-image.png" alt="{{ $cart->item_name }}" class="cart-thumb-small">
                                            @endif
                                            </a>
                                            </div>
                                            <div class="info">
                                              <a class="title" href="{{ url('/item') }}/{{ $cart->item_slug }}/{{ $cart->item_id }}">{{ substr($cart->item_name,0,20).'...' }}</a>
                                                            <div class="cat">
                                                                <a href="{{ URL::to('/shop') }}/item-type/{{ $cart->item_type }}" class="theme-color">
                                                                  <span class="lnr lnr-book theme-color"></span>{{ str_replace('-',' ',$cart->item_type) }}</a>         
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="product__action">
                                                        <a href="{{ url('/cart') }}/{{ base64_encode($cart->ord_id) }}" onClick="return confirm('{{ Helper::translation(2892,$translate) }}');"><span class="lnr lnr-trash remove_carrt"></span>
                                                        </a>
                                                       <p>{{ $cart->item_price }} {{ $allsettings->site_currency }}</p>
                                                    </div>
                                                </div>
                                                @php $subtotal += $cart->item_price; @endphp
                                               @endforeach 
                                                <div class="total">
                                                    <p>
                                                        <span>{{ Helper::translation(2896,$translate) }} :</span>{{ $subtotal }} {{ $allsettings->site_currency }}</p>
                                                </div>
                                                <div class="cart_action">
                                                    <a class="go_cart" href="{{ url('/cart') }}">{{ Helper::translation(3021,$translate) }}</a>
                                                    <a class="go_checkout" href="{{ url('/checkout') }}">{{ Helper::translation(2899,$translate) }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if($cartcount == 0)
                                        <div class="dropdowns dropdown--cart">
                                            <div class="cart_area">
                                               <p align="center" class="emptycart">{{ Helper::translation(2898,$translate) }}</p> 
                                            </div>
                                        </div>
                                        @endif
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            @if($allsettings->multi_language == 1)
                            <div class="inline mover15 mover-top10 has_dropdown">
                               <div class="autor__info">
                                    <p class="name">
                                        {{ $language_title }}
                                    </p>
                                </div>
                                <div class="dropdowns dropdown--author mt-3">
                                    <ul>
                                     @foreach($languages['view'] as $language) 
                                     <li>
                                            <a href="{{ URL::to('/translate') }}/{{ $language->language_code }}">{{ $language->language_name }}</a>
                                      </li>
                                      @endforeach
                                     </ul>
                                </div>
                            </div>
                            @endif
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar">
                                    
                                    @if(Auth::user()->user_photo != '')
                                            <img src="{{ url('/') }}/public/storage/users/{{ Auth::user()->user_photo }}" alt="{{ Auth::user()->name }}">
                                            @else
                                            <img src="{{ url('/') }}/public/img/no-user.png" alt="{{ Auth::user()->name }}">
                                            @endif

                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        {{ Auth::user()->name }}
                                    </p>
                                    <p class="ammount">{{ Auth::user()->earnings }} {{ $allsettings->site_currency }}</p>
                                </div>
                                <div class="dropdowns dropdown--author">
                                    <ul>
                                      @if(Auth::user()->user_type == 'admin')
                                      <li>
                                            <a href="{{ URL::to('/admin') }}" target="_blank">
                                                <span class="lnr lnr-cog"></span>{{ Helper::translation(3022,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ url('/logout') }}">
                                                <span class="lnr lnr-exit"></span>{{ Helper::translation(3023,$translate) }}</a>
                                      </li>
                                      @endif
                                      @if(Auth::user()->user_type == 'vendor')
                                      <li>
                                            <a href="{{ URL::to('/user') }}/{{ Auth::user()->username }}">
                                                <span class="lnr lnr-user"></span>{{ Helper::translation(2926,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/profile-settings') }}">
                                                <span class="lnr lnr-cog"></span>{{ Helper::translation(2927,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/purchases') }}">
                                                <span class="lnr lnr-cart"></span>{{ Helper::translation(3024,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/favourites') }}">
                                                <span class="lnr lnr-heart"></span>{{ Helper::translation(2929,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/coupon') }}">
                                                <span class="lnr lnr-location"></span>{{ Helper::translation(2919,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/sales') }}">
                                                <span class="lnr lnr-chart-bars"></span>{{ Helper::translation(2930,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/upload-item') }}">
                                                <span class="lnr lnr-upload"></span>{{ Helper::translation(2931,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/manage-item') }}">
                                                <span class="lnr lnr-book"></span>{{ Helper::translation(2932,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/withdrawal') }}">
                                                <span class="lnr lnr-briefcase"></span>{{ Helper::translation(2933,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/logout') }}">
                                                <span class="lnr lnr-exit"></span>{{ Helper::translation(3023,$translate) }}</a>
                                        </li>
                                      @endif
                                      @if(Auth::user()->user_type == 'customer') 
                                      <li>
                                            <a href="{{ URL::to('/user') }}/{{ Auth::user()->username }}">
                                                <span class="lnr lnr-user"></span>{{ Helper::translation(2926,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ URL::to('/profile-settings') }}">
                                                <span class="lnr lnr-cog"></span>{{ Helper::translation(2927,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ URL::to('/purchases') }}">
                                                <span class="lnr lnr-cart"></span>{{ Helper::translation(3024,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ URL::to('/favourites') }}">
                                                <span class="lnr lnr-heart"></span>{{ Helper::translation(2929,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ URL::to('/withdrawal') }}">
                                                <span class="lnr lnr-briefcase"></span>{{ Helper::translation(2933,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ url('/logout') }}">
                                                <span class="lnr lnr-exit"></span>{{ Helper::translation(3023,$translate) }}</a>
                                      </li> 
                                      @endif
                                    </ul>
                                </div>
                            </div>
                         </div>
                        <div class="mobile_content ">
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">
                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    <div class="author__avatar v_middle">
                                        
                                        @if(Auth::user()->user_photo != '')
                                            <img src="{{ url('/') }}/public/storage/users/{{ Auth::user()->user_photo }}" alt="{{ Auth::user()->name }}">
                                            @else
                                            <img src="{{ url('/') }}/public/img/no-user.png" alt="{{ Auth::user()->name }}">
                                            @endif
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                            {{ Auth::user()->name }}
                                        </p>
                                        <p class="ammount">{{ Auth::user()->earnings }} {{ $allsettings->site_currency }}</p>
                                    </div>
                                </div>
                                <div class="author__notification_area">
                                    <ul>
                                      <li>
                                            <a href="{{ url('/cart') }}">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-cart"></span>
                                                    <span class="notification_count purch">{{ $cartcount }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--start .author__notification_area -->
                                 <div class="dropdowns dropdown--author">
                                    <ul>
                                      @if(Auth::user()->user_type == 'admin')
                                      <li>
                                            <a href="{{ URL::to('/admin') }}" target="_blank">
                                                <span class="lnr lnr-cog"></span>{{ Helper::translation(3022,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ url('/logout') }}">
                                                <span class="lnr lnr-exit"></span>{{ Helper::translation(3023,$translate) }}</a>
                                      </li>
                                      @endif
                                      @if(Auth::user()->user_type == 'vendor')
                                      <li>
                                            <a href="{{ URL::to('/user') }}/{{ Auth::user()->username }}">
                                                <span class="lnr lnr-user"></span>{{ Helper::translation(2926,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/profile-settings') }}">
                                                <span class="lnr lnr-cog"></span>{{ Helper::translation(2927,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/purchases') }}">
                                                <span class="lnr lnr-cart"></span>{{ Helper::translation(3024,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/favourites') }}">
                                                <span class="lnr lnr-heart"></span>{{ Helper::translation(2929,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/coupon') }}">
                                                <span class="lnr lnr-location"></span>{{ Helper::translation(2919,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/sales') }}">
                                                <span class="lnr lnr-chart-bars"></span>{{ Helper::translation(2930,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/upload-item') }}">
                                                <span class="lnr lnr-upload"></span>{{ Helper::translation(2931,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/manage-item') }}">
                                                <span class="lnr lnr-book"></span>{{ Helper::translation(2932,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/withdrawal') }}">
                                                <span class="lnr lnr-briefcase"></span>{{ Helper::translation(2933,$translate) }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/logout') }}">
                                                <span class="lnr lnr-exit"></span>{{ Helper::translation(3023,$translate) }}</a>
                                        </li>
                                      @endif
                                      @if(Auth::user()->user_type == 'customer') 
                                      <li>
                                            <a href="{{ URL::to('/user') }}/{{ Auth::user()->username }}">
                                                <span class="lnr lnr-user"></span>{{ Helper::translation(2926,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ URL::to('/profile-settings') }}">
                                                <span class="lnr lnr-cog"></span>{{ Helper::translation(2927,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ URL::to('/purchases') }}">
                                                <span class="lnr lnr-cart"></span>{{ Helper::translation(3024,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ URL::to('/favourites') }}">
                                                <span class="lnr lnr-heart"></span>{{ Helper::translation(2929,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ URL::to('/withdrawal') }}">
                                                <span class="lnr lnr-briefcase"></span>{{ Helper::translation(2933,$translate) }}</a>
                                      </li>
                                      <li>
                                            <a href="{{ url('/logout') }}">
                                                <span class="lnr lnr-exit"></span>{{ Helper::translation(3023,$translate) }}</a>
                                      </li> 
                                      @endif
                                    </ul>
                                </div>

                                
                            </div>
                        </div>
                        <!-- end /.mobile_content -->
                    </div>
                    @endif
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->

        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
              <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <!-- start mainmenu__search -->
                            <div class="mainmenu__search">
                                <form action="{{ route('shop') }}" class="setting_form" method="post" id="profile_form" enctype="multipart/form-data">
                                {{ csrf_field() }} 
                                    <div class="searc-wrap">
                                      <input type="text" name="product_item" placeholder="{{ Helper::translation(3030,$translate) }}" class="rounded">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- start mainmenu__search -->
                        </div>
                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    
                                    <li class="has_dropdown">
                                        <a href="{{ url('/shop') }}">{{ Helper::translation(3025,$translate) }}</a>
                                        <div class="dropdowns dropdown--menu">
                                            <ul>
                                                <li>
                                                    <a href="{{ url('/shop') }}/recent-items">{{ Helper::translation(3026,$translate) }}</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/shop') }}/featured-items">{{ Helper::translation(3027,$translate) }}</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/free-items') }}">{{ Helper::translation(3016,$translate) }}</a>
                                                </li>
                                                
                                                <li>
                                                    <a href="{{ url('/top-authors') }}">{{ Helper::translation(3028,$translate) }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @foreach($categories['menu'] as $menu)
                                    <li class="has_dropdown">
                                        <a href="{{ URL::to('/shop/category/') }}/{{$menu->cat_id}}/{{$menu->category_slug}}">{{ $menu->category_name }}</a>
                                        <div class="dropdowns dropdown--menu">
                                            <ul>
                                            @foreach($menu->subcategory as $sub_category)
                                                <li>
                                                    <a href="{{ URL::to('/shop/subcategory/') }}/{{$sub_category->subcat_id}}/{{$sub_category->subcategory_slug}}">{{ $sub_category->subcategory_name }}</a>
                                                </li>
                                              @endforeach  
                                            </ul>
                                        </div>
                                    </li>
                                   @endforeach 
                                   <li class="has_dropdown">
                                        <a href="javascript:void(0);">{{ Helper::translation(3029,$translate) }}</a>
                                        <div class="dropdowns dropdown--menu">
                                            <ul>
                                               @foreach($allpages['pages'] as $pages)
                                                <li>
                                                    <a href="{{ URL::to('/page/') }}/{{ $pages->page_id }}/{{ $pages->page_slug }}">{{ $pages->page_title }}</a>
                                                </li>
                                              @endforeach
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/flash-sale') }}" class="red-color">{{ Helper::translation(2993,$translate) }}</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>
<div class="menu-area">
       <div class="top-menu-area theme-primary">
            <div class="container">
                <div class="row">
                   <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <?php if($allsettings->site_logo != ''): ?>
                            <a href="<?php echo e(URL::to('/')); ?>">
                                <img src="<?php echo e(url('/')); ?>/public/storage/settings/<?php echo e($allsettings->site_logo); ?>" alt="<?php echo e($allsettings->site_title); ?>" width="180" class="img-fluid">
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if(Auth::guest()): ?>
                    <div class="col-lg-9 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area">
                            <div class="author__notification_area">
                                <ul class="topmenu">
                                   <li>
                                          <a href="<?php echo e(URL::to('/start-selling')); ?>"><?php echo e(Helper::translation(3018,$translate)); ?></a>
                                    </li>
                                    <?php if($allsettings->site_blog_display == 1): ?>
                                    <li>
                                        <a href="<?php echo e(URL::to('/blog')); ?>"><?php echo e(Helper::translation(2877,$translate)); ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <li>
                                        <a href="<?php echo e(URL::to('/contact')); ?>"><?php echo e(Helper::translation(2910,$translate)); ?></a>
                                    </li>
                                    <?php if($count_help != 0): ?>
                                    <?php if($help['page']->page_status == 1 && $help['page']->main_menu == 1): ?>
                                    <li>
                                        <a href="<?php echo e(URL::to('/page/')); ?>/<?php echo e($help['page']->page_id); ?>/<?php echo e($help['page']->page_slug); ?>"><?php echo e($help['page']->page_title); ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-cart"></span>
                                            <span class="notification_count purch theme-button">0</span>
                                        </div>
                                        <div class="dropdowns dropdown--cart">
                                            <div class="cart_area">
                                             <p align="center" class="emptycart"><?php echo e(Helper::translation(2898,$translate)); ?></p> 
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <?php if($allsettings->multi_language == 1): ?>
                            <div class="inline mover15 mover-top10 has_dropdown">
                                <div class="autor__info">
                                    <p class="name">
                                        <?php echo e($language_title); ?>

                                    </p>
                                 </div>
                                 <div class="dropdowns dropdown--author mt-3">
                                    <ul>
                                     <?php $__currentLoopData = $languages['view']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                     <li>
                                            <a href="<?php echo e(URL::to('/translate')); ?>/<?php echo e($language->language_code); ?>"><?php echo e($language->language_name); ?></a>
                                      </li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                            <span class="login-btn">
                            <a href="<?php echo e(url('/register')); ?>" class="btn btn--icon btn-ss btn-secondary radius-left md-login mdevice-off"><?php echo e(Helper::translation(3019,$translate)); ?></a>
                            <a href="<?php echo e(url('/login')); ?>" class="btn btn--icon btn-ss btn-secondary radius-right md-login"><?php echo e(Helper::translation(3020,$translate)); ?></a>
                            </span>
                         </div>
                   </div>
                   <?php endif; ?>         
                   <?php if(Auth::check()): ?>
                    <div class="col-lg-9 col-md-9 col-6 v_middle">
                        <div class="author-area">
                            <div class="author__notification_area">
                                <ul class="topmenu">
                                  <li>
                                          <a href="<?php echo e(URL::to('/start-selling')); ?>"><?php echo e(Helper::translation(3018,$translate)); ?></a>
                                    </li>
                                    <?php if($allsettings->site_blog_display == 1): ?>
                                    <li>
                                        <a href="<?php echo e(URL::to('/blog')); ?>"><?php echo e(Helper::translation(2877,$translate)); ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <li>
                                        <a href="<?php echo e(URL::to('/contact')); ?>"><?php echo e(Helper::translation(2910,$translate)); ?></a>
                                    </li>
                                    <?php if($count_help != 0): ?>
                                    <?php if($help['page']->page_status == 1 && $help['page']->main_menu == 1): ?>
                                    <li>
                                        <a href="<?php echo e(URL::to('/page/')); ?>/<?php echo e($help['page']->page_id); ?>/<?php echo e($help['page']->page_slug); ?>"><?php echo e($help['page']->page_title); ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(Auth::user()->id != 1): ?>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <a href="<?php echo e(url('/cart')); ?>"><span class="lnr lnr-cart"></span></a>
                                            <span class="notification_count purch theme-button"><?php echo e($cartcount); ?></span>
                                        </div>
                                        <?php if($cartcount != 0): ?>
                                        <div class="dropdowns dropdown--cart">
                                            <div class="cart_area">
                                            <?php $subtotal = 0; ?>
                                            <?php $__currentLoopData = $cartitem['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="cart_product">
                                                    <div class="product__info">
                                                        <div class="thumbn">
                                                        <a href="<?php echo e(url('/item')); ?>/<?php echo e($cart->item_slug); ?>/<?php echo e($cart->item_id); ?>">
                                                            <?php if($cart->item_thumbnail!=''): ?>
                                            <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($cart->item_thumbnail); ?>" alt="<?php echo e($cart->item_name); ?>" class="cart-thumb-small">
                                            <?php else: ?>
                                            <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($cart->item_name); ?>" class="cart-thumb-small">
                                            <?php endif; ?>
                                            </a>
                                            </div>
                                            <div class="info">
                                              <a class="title" href="<?php echo e(url('/item')); ?>/<?php echo e($cart->item_slug); ?>/<?php echo e($cart->item_id); ?>"><?php echo e(substr($cart->item_name,0,20).'...'); ?></a>
                                                            <div class="cat">
                                                                <a href="<?php echo e(URL::to('/shop')); ?>/item-type/<?php echo e($cart->item_type); ?>" class="theme-color">
                                                                  <span class="lnr lnr-book theme-color"></span><?php echo e(str_replace('-',' ',$cart->item_type)); ?></a>         
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="product__action">
                                                        <a href="<?php echo e(url('/cart')); ?>/<?php echo e(base64_encode($cart->ord_id)); ?>" onClick="return confirm('<?php echo e(Helper::translation(2892,$translate)); ?>');"><span class="lnr lnr-trash remove_carrt"></span>
                                                        </a>
                                                       <p><?php echo e($cart->item_price); ?> <?php echo e($allsettings->site_currency); ?></p>
                                                    </div>
                                                </div>
                                                <?php $subtotal += $cart->item_price; ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                <div class="total">
                                                    <p>
                                                        <span><?php echo e(Helper::translation(2896,$translate)); ?> :</span><?php echo e($subtotal); ?> <?php echo e($allsettings->site_currency); ?></p>
                                                </div>
                                                <div class="cart_action">
                                                    <a class="go_cart" href="<?php echo e(url('/cart')); ?>"><?php echo e(Helper::translation(3021,$translate)); ?></a>
                                                    <a class="go_checkout" href="<?php echo e(url('/checkout')); ?>"><?php echo e(Helper::translation(2899,$translate)); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($cartcount == 0): ?>
                                        <div class="dropdowns dropdown--cart">
                                            <div class="cart_area">
                                               <p align="center" class="emptycart"><?php echo e(Helper::translation(2898,$translate)); ?></p> 
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php if($allsettings->multi_language == 1): ?>
                            <div class="inline mover15 mover-top10 has_dropdown">
                               <div class="autor__info">
                                    <p class="name">
                                        <?php echo e($language_title); ?>

                                    </p>
                                </div>
                                <div class="dropdowns dropdown--author mt-3">
                                    <ul>
                                     <?php $__currentLoopData = $languages['view']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                     <li>
                                            <a href="<?php echo e(URL::to('/translate')); ?>/<?php echo e($language->language_code); ?>"><?php echo e($language->language_name); ?></a>
                                      </li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar">
                                    
                                    <?php if(Auth::user()->user_photo != ''): ?>
                                            <img src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e(Auth::user()->user_photo); ?>" alt="<?php echo e(Auth::user()->name); ?>">
                                            <?php else: ?>
                                            <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e(Auth::user()->name); ?>">
                                            <?php endif; ?>

                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        <?php echo e(Auth::user()->name); ?>

                                    </p>
                                    <p class="ammount"><?php echo e(Auth::user()->earnings); ?> <?php echo e($allsettings->site_currency); ?></p>
                                </div>
                                <div class="dropdowns dropdown--author">
                                    <ul>
                                      <?php if(Auth::user()->user_type == 'admin'): ?>
                                      <li>
                                            <a href="<?php echo e(URL::to('/admin')); ?>" target="_blank">
                                                <span class="lnr lnr-cog"></span><?php echo e(Helper::translation(3022,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(url('/logout')); ?>">
                                                <span class="lnr lnr-exit"></span><?php echo e(Helper::translation(3023,$translate)); ?></a>
                                      </li>
                                      <?php endif; ?>
                                      <?php if(Auth::user()->user_type == 'vendor'): ?>
                                      <li>
                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e(Auth::user()->username); ?>">
                                                <span class="lnr lnr-user"></span><?php echo e(Helper::translation(2926,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/profile-settings')); ?>">
                                                <span class="lnr lnr-cog"></span><?php echo e(Helper::translation(2927,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/purchases')); ?>">
                                                <span class="lnr lnr-cart"></span><?php echo e(Helper::translation(3024,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/favourites')); ?>">
                                                <span class="lnr lnr-heart"></span><?php echo e(Helper::translation(2929,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/coupon')); ?>">
                                                <span class="lnr lnr-location"></span><?php echo e(Helper::translation(2919,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/sales')); ?>">
                                                <span class="lnr lnr-chart-bars"></span><?php echo e(Helper::translation(2930,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/upload-item')); ?>">
                                                <span class="lnr lnr-upload"></span><?php echo e(Helper::translation(2931,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/manage-item')); ?>">
                                                <span class="lnr lnr-book"></span><?php echo e(Helper::translation(2932,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/withdrawal')); ?>">
                                                <span class="lnr lnr-briefcase"></span><?php echo e(Helper::translation(2933,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(url('/logout')); ?>">
                                                <span class="lnr lnr-exit"></span><?php echo e(Helper::translation(3023,$translate)); ?></a>
                                        </li>
                                      <?php endif; ?>
                                      <?php if(Auth::user()->user_type == 'customer'): ?> 
                                      <li>
                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e(Auth::user()->username); ?>">
                                                <span class="lnr lnr-user"></span><?php echo e(Helper::translation(2926,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(URL::to('/profile-settings')); ?>">
                                                <span class="lnr lnr-cog"></span><?php echo e(Helper::translation(2927,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(URL::to('/purchases')); ?>">
                                                <span class="lnr lnr-cart"></span><?php echo e(Helper::translation(3024,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(URL::to('/favourites')); ?>">
                                                <span class="lnr lnr-heart"></span><?php echo e(Helper::translation(2929,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(URL::to('/withdrawal')); ?>">
                                                <span class="lnr lnr-briefcase"></span><?php echo e(Helper::translation(2933,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(url('/logout')); ?>">
                                                <span class="lnr lnr-exit"></span><?php echo e(Helper::translation(3023,$translate)); ?></a>
                                      </li> 
                                      <?php endif; ?>
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
                                        
                                        <?php if(Auth::user()->user_photo != ''): ?>
                                            <img src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e(Auth::user()->user_photo); ?>" alt="<?php echo e(Auth::user()->name); ?>">
                                            <?php else: ?>
                                            <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e(Auth::user()->name); ?>">
                                            <?php endif; ?>
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                            <?php echo e(Auth::user()->name); ?>

                                        </p>
                                        <p class="ammount"><?php echo e(Auth::user()->earnings); ?> <?php echo e($allsettings->site_currency); ?></p>
                                    </div>
                                </div>
                                <div class="author__notification_area">
                                    <ul>
                                      <li>
                                            <a href="<?php echo e(url('/cart')); ?>">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-cart"></span>
                                                    <span class="notification_count purch"><?php echo e($cartcount); ?></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--start .author__notification_area -->
                                 <div class="dropdowns dropdown--author">
                                    <ul>
                                      <?php if(Auth::user()->user_type == 'admin'): ?>
                                      <li>
                                            <a href="<?php echo e(URL::to('/admin')); ?>" target="_blank">
                                                <span class="lnr lnr-cog"></span><?php echo e(Helper::translation(3022,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(url('/logout')); ?>">
                                                <span class="lnr lnr-exit"></span><?php echo e(Helper::translation(3023,$translate)); ?></a>
                                      </li>
                                      <?php endif; ?>
                                      <?php if(Auth::user()->user_type == 'vendor'): ?>
                                      <li>
                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e(Auth::user()->username); ?>">
                                                <span class="lnr lnr-user"></span><?php echo e(Helper::translation(2926,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/profile-settings')); ?>">
                                                <span class="lnr lnr-cog"></span><?php echo e(Helper::translation(2927,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/purchases')); ?>">
                                                <span class="lnr lnr-cart"></span><?php echo e(Helper::translation(3024,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/favourites')); ?>">
                                                <span class="lnr lnr-heart"></span><?php echo e(Helper::translation(2929,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/coupon')); ?>">
                                                <span class="lnr lnr-location"></span><?php echo e(Helper::translation(2919,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/sales')); ?>">
                                                <span class="lnr lnr-chart-bars"></span><?php echo e(Helper::translation(2930,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/upload-item')); ?>">
                                                <span class="lnr lnr-upload"></span><?php echo e(Helper::translation(2931,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/manage-item')); ?>">
                                                <span class="lnr lnr-book"></span><?php echo e(Helper::translation(2932,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(URL::to('/withdrawal')); ?>">
                                                <span class="lnr lnr-briefcase"></span><?php echo e(Helper::translation(2933,$translate)); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(url('/logout')); ?>">
                                                <span class="lnr lnr-exit"></span><?php echo e(Helper::translation(3023,$translate)); ?></a>
                                        </li>
                                      <?php endif; ?>
                                      <?php if(Auth::user()->user_type == 'customer'): ?> 
                                      <li>
                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e(Auth::user()->username); ?>">
                                                <span class="lnr lnr-user"></span><?php echo e(Helper::translation(2926,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(URL::to('/profile-settings')); ?>">
                                                <span class="lnr lnr-cog"></span><?php echo e(Helper::translation(2927,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(URL::to('/purchases')); ?>">
                                                <span class="lnr lnr-cart"></span><?php echo e(Helper::translation(3024,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(URL::to('/favourites')); ?>">
                                                <span class="lnr lnr-heart"></span><?php echo e(Helper::translation(2929,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(URL::to('/withdrawal')); ?>">
                                                <span class="lnr lnr-briefcase"></span><?php echo e(Helper::translation(2933,$translate)); ?></a>
                                      </li>
                                      <li>
                                            <a href="<?php echo e(url('/logout')); ?>">
                                                <span class="lnr lnr-exit"></span><?php echo e(Helper::translation(3023,$translate)); ?></a>
                                      </li> 
                                      <?php endif; ?>
                                    </ul>
                                </div>

                                
                            </div>
                        </div>
                        <!-- end /.mobile_content -->
                    </div>
                    <?php endif; ?>
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
                                <form action="<?php echo e(route('shop')); ?>" class="setting_form" method="post" id="profile_form" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?> 
                                    <div class="searc-wrap">
                                      <input type="text" name="product_item" placeholder="<?php echo e(Helper::translation(3030,$translate)); ?>" class="rounded">
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
                                        <a href="<?php echo e(url('/shop')); ?>"><?php echo e(Helper::translation(3025,$translate)); ?></a>
                                        <div class="dropdowns dropdown--menu">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo e(url('/shop')); ?>/recent-items"><?php echo e(Helper::translation(3026,$translate)); ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(url('/shop')); ?>/featured-items"><?php echo e(Helper::translation(3027,$translate)); ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(url('/free-items')); ?>"><?php echo e(Helper::translation(3016,$translate)); ?></a>
                                                </li>
                                                
                                                <li>
                                                    <a href="<?php echo e(url('/top-authors')); ?>"><?php echo e(Helper::translation(3028,$translate)); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <?php $__currentLoopData = $categories['menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="has_dropdown">
                                        <a href="<?php echo e(URL::to('/shop/category/')); ?>/<?php echo e($menu->cat_id); ?>/<?php echo e($menu->category_slug); ?>"><?php echo e($menu->category_name); ?></a>
                                        <div class="dropdowns dropdown--menu">
                                            <ul>
                                            <?php $__currentLoopData = $menu->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="<?php echo e(URL::to('/shop/subcategory/')); ?>/<?php echo e($sub_category->subcat_id); ?>/<?php echo e($sub_category->subcategory_slug); ?>"><?php echo e($sub_category->subcategory_name); ?></a>
                                                </li>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                            </ul>
                                        </div>
                                    </li>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                   <li class="has_dropdown">
                                        <a href="javascript:void(0);"><?php echo e(Helper::translation(3029,$translate)); ?></a>
                                        <div class="dropdowns dropdown--menu">
                                            <ul>
                                               <?php $__currentLoopData = $allpages['pages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="<?php echo e(URL::to('/page/')); ?>/<?php echo e($pages->page_id); ?>/<?php echo e($pages->page_slug); ?>"><?php echo e($pages->page_title); ?></a>
                                                </li>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(URL::to('/flash-sale')); ?>" class="red-color"><?php echo e(Helper::translation(2993,$translate)); ?></a>
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
    </div><?php /**PATH C:\Users\17329\Desktop\robertfromri\feberr\resources\views/header.blade.php ENDPATH**/ ?>
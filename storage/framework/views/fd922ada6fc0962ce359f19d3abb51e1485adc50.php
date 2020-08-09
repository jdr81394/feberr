<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(2862,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload home1 mutlti-vendor">

    
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="<?php echo e(url('/')); ?>/public/storage/settings/<?php echo e($allsettings->site_banner); ?>" alt="<?php echo e($allsettings->site_title); ?>">
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
                                    
                                     <span class="bold"><?php echo e($allsettings->site_banner_heading); ?></span>
                                </h1>
                                <p class="tagline"><?php echo e($allsettings->site_banner_subheading); ?></p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                            <div class="col-md-9 search_align">    
                            <div class="search_box">
                            
                             <form action="<?php echo e(route('shop')); ?>" class="setting_form" method="post" id="profile_form" enctype="multipart/form-data">
                             <?php echo e(csrf_field()); ?>   
                                <input type="text" class="text_field" name="product_item" placeholder="<?php echo e(Helper::translation(3030,$translate)); ?>">
                                <div class="search__select select-wrap">
                                    <select name="category" class="select--field" id="blah">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $categories['menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="category_<?php echo e($menu->cat_id); ?>"><?php echo e($menu->category_name); ?></option>
                                         <?php $__currentLoopData = $menu->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <option value="subcategory_<?php echo e($sub_category->subcat_id); ?>"> - <?php echo e($sub_category->subcategory_name); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                                <button type="submit" class="search-btn btn--lg"><?php echo e(Helper::translation(3031,$translate)); ?></button>
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
   
   
   
    <?php if($allsettings->site_layout == ''): ?>
    <section class="featured-products section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <h2><?php echo e(Helper::translation(3033,$translate)); ?> </h2>
                    
                    <div class="row margin-top-30">
                    <?php $__currentLoopData = $featured['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="featured">
                       <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e($items->item_slug); ?>/<?php echo e($items->item_id); ?>" title="<?php echo e($items->item_name); ?>">
                                   <?php if($items->item_thumbnail!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($items->item_thumbnail); ?>" alt="<?php echo e($items->item_name); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.jpg" alt="<?php echo e($items->item_name); ?>">
                                        <?php endif; ?>
                                       </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    </div>
                    
                    
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <div align="center" class="margin-top-20"><a href="<?php echo e(URL::to('/shop/featured-items')); ?>" class="btn btn--sm theme-button"><?php echo e(Helper::translation(3032,$translate)); ?></a></div>
            <!-- end /.row -->
        </div>

       
    </section>
    
    
    <?php else: ?>
      
    <section class="featured-products section--padding">
        <!-- start /.container -->
        <div class="container">
        
            <!-- start row -->
            <div class="row">
            
                <!-- start col-md-12 -->
                <div>
                    <h2><?php echo e(Helper::translation(3033,$translate)); ?> </h2>
                    
                    <div class="row margin-top-30">
                    <?php $__currentLoopData = $featured['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="featured">
                       <a class="tip_trigger" href="<?php echo e(URL::to('/item')); ?>/<?php echo e($items->item_slug); ?>/<?php echo e($items->item_id); ?>" title="<?php echo e($items->item_name); ?>" >
                                   <?php if($items->item_thumbnail!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($items->item_thumbnail); ?>" alt="<?php echo e($items->item_name); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.jpg" alt="<?php echo e($items->item_name); ?>">
                                        <?php endif; ?>
                                        <span class="tip">
                                        <div class="row">
                                          <div class="col-md-12" align="center">
                                            <?php if($items->item_preview!=''): ?>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($items->item_preview); ?>" alt="<?php echo e($items->item_name); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($items->item_name); ?>">
                                        <?php endif; ?>
                                          </div>
                                        </div>    
                                        <div class="row">
                                        <div class="col-md-8 text-left">
                                        <div class="titleitem"><?php echo e($items->item_name); ?></div>
                                        <span class="authorr"><?php echo e(Helper::translation(3034,$translate)); ?><?php echo e($items->username); ?></span>
                                        </div>
                                         <div class="col-md-4 text-right">
                                        <div class="currrency">
                                        <?php if($items->free_download == 1): ?>
                                        <span><?php echo e(Helper::translation(2992,$translate)); ?></span>
                                        <?php else: ?>
                                        <span><?php echo e($items->regular_price); ?> <?php echo e($allsettings->site_currency); ?></span>
                                        <?php endif; ?>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        </div>
                                        </span>
                    </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    </div>
                    
                    
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <div align="center" class="margin-top-20"><a href="<?php echo e(URL::to('/shop/featured-items')); ?>" class="btn btn--sm theme-button"><?php echo e(Helper::translation(3032,$translate)); ?></a></div>
            <!-- end /.row -->
        </div>

       
    </section>
    
    <?php endif; ?>
    
    
    
    
    
    
    
    
    
    <section class="products section--padding">
        <!-- start container -->
        <div class="container" id="demo">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <h2><?php echo e(Helper::translation(3035,$translate)); ?> <span class="highlighted"><?php echo e(Helper::translation(3003,$translate)); ?></span></h2>
                    
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
            
           

            
                    
            <div id="demo" class="box jplist">
				
					
					
					<!-- panel -->
					<div class="jplist-panel box panel-top">						
											
						<div class="jplist-group sorting">

						   <ul>
							  <?php $__currentLoopData = $newest['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li>
								 
                                 <a href="javascript:void(0);" data-control-type="button-text-filter"
									data-control-action="filter"
									data-control-name="<?php echo e($items->cat_id); ?>_category"
									data-path=".block"
									data-text="<?php echo e($items->cat_id); ?>_category"><?php echo e($items->category_name); ?></a>
							  </li>
							  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							  
						   </ul>
						</div>
						
					</div>				 
					
					
                    
                    <?php if($allsettings->site_layout == ''): ?>
                    <div class="row list">
                        
                        
                        
                        <?php $__currentLoopData = $itemData['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 list-item">
                            
                            <div class="product product--card product--card-small">

                                <div class="product__thumbnail">
                                    <?php if($item->item_preview!=''): ?>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item->item_preview); ?>" alt="<?php echo e($item->item_name); ?>" class="item-thumbnail">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($item->item_name); ?>" class="item-thumbnail">
                                        <?php endif; ?>
                                    <div class="prod_btn">
                                        
                                        <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>" class="transparent btn--sm btn--round"><?php echo e(Helper::translation(2999,$translate)); ?></a>
                                        <a href="<?php echo e(url('/preview')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>" class="transparent btn--sm btn--round" target="_blank"><?php echo e(Helper::translation(3000,$translate)); ?></a>
                                    </div>
                                    
                                </div>
                                

                                <div class="product-desc">
                                    <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>" class="product_title">
                                    <h4 class="title"><?php echo e(substr($item->item_name,0,20).'...'); ?></h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                           <?php if($item->user_photo!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($item->user_photo); ?>" alt="<?php echo e($item->username); ?>" class="auth-img">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($item->username); ?>" class="auth-img">
                                        <?php endif; ?>
                                            <p>
                                                <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($item->username); ?>"><?php echo e($item->username); ?></a>
                                            </p>
                                        </li>
                                        <li class="out_of_class_name">
                                            <div class="sell">
                                                <p>
                                                    <span class="lnr lnr-cart"></span>
                                                    <span><?php echo e($item->item_sold); ?></span>
                                                </p>
                                            </div>
                                            <?php
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
                                            ?>
                                            <div class="rating product--rating">
                                                <ul>
                                                    <?php if($count_rating == 0): ?>
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
                                                   <?php endif; ?> 
                                                   <?php if($count_rating == 1): ?>
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
                                                   <?php endif; ?> 
                                                   <?php if($count_rating == 2): ?>
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
                                                   <?php endif; ?>
                                                   <?php if($count_rating == 3): ?>
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
                                                   <?php endif; ?>
                                                   <?php if($count_rating == 4): ?>
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
                                                   <?php endif; ?>
                                                   <?php if($count_rating == 5): ?>
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
                                                   <?php endif; ?>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                               <div class="block"> 
                               <span class="<?php echo e($item->item_category); ?>_<?php echo e($item->item_category_type); ?> display-none"><?php echo e($item->item_category); ?>_<?php echo e($item->item_category_type); ?></span>
                               </div>
                               
                                <div class="product-purchase">
                                    <div class="price_love like">
                                    <?php if($item->free_download == 1): ?>
                                    <span><?php echo e(Helper::translation(2992,$translate)); ?></span>
                                    <?php else: ?>
                                    <?php if($item->item_flash == 1): ?>
                                    <span class="flash"><?php echo e(round($item->regular_price/2)); ?> <?php echo e($allsettings->site_currency); ?></span>
                                    <?php else: ?>
                                    <span><?php echo e($item->regular_price); ?> <?php echo e($allsettings->site_currency); ?></span>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    </div>
                                    <a href="<?php echo e(URL::to('/shop')); ?>/item-type/<?php echo e($item->item_type); ?>" class="theme-color">
                                            <span class="lnr lnr-book"></span><?php echo e(str_replace('-',' ',$item->item_type)); ?></a>
                                </div>
                               
                                
                            </div>
                           
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                       
                    </div>
                    <?php else: ?>
                    <div class="row list">
                    <?php $__currentLoopData = $itemData['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="list-item featured">
                       <a class="tip_trigger" href="<?php echo e(URL::to('/item')); ?>/<?php echo e($items->item_slug); ?>/<?php echo e($items->item_id); ?>" title="<?php echo e($items->item_name); ?>" >
                                   <?php if($items->item_thumbnail!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($items->item_thumbnail); ?>" alt="<?php echo e($items->item_name); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.jpg" alt="<?php echo e($items->item_name); ?>">
                                        <?php endif; ?>
                                        <span class="tip">
                                        <div class="row">
                                          <div class="col-md-12" align="center">
                                            <?php if($items->item_preview!=''): ?>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($items->item_preview); ?>" alt="<?php echo e($items->item_name); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($items->item_name); ?>">
                                        <?php endif; ?>
                                          </div>
                                        </div>    
                                        <div class="row">
                                        <div class="col-md-8 text-left">
                                        <div class="titleitem"><?php echo e($items->item_name); ?></div>
                                        <span class="authorr"><?php echo e(Helper::translation(3034,$translate)); ?> <?php echo e($items->username); ?></span>
                                        </div>
                                         <div class="col-md-4 text-right">
                                        <div class="currrency">
                                        <?php if($items->free_download == 1): ?>
                                        <span><?php echo e(Helper::translation(2992,$translate)); ?></span>
                                        <?php else: ?>
                                        <span><?php echo e($items->regular_price); ?> <?php echo e($allsettings->site_currency); ?></span>
                                        <?php endif; ?>
                                        </div>
                                        </div>
                                        </div>
                                        </span>
                                        
                    </a>
                    <div class="block"> 
                               <span class="<?php echo e($items->item_category); ?>_<?php echo e($items->item_category_type); ?> display-none"><?php echo e($items->item_category); ?>_<?php echo e($items->item_category_type); ?></span>
                               </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    
					<!--<div class="box jplist-no-results text-shadow align-center">
						<p>No results found</p>
					</div>-->
								
				</div>
                
                <div align="center" class="margin-top-20"><a href="<?php echo e(URL::to('/shop/recent-items')); ?>" class="btn btn--sm theme-button"><?php echo e(Helper::translation(3036,$translate)); ?></a></div>
            
            
        </div>
        
    </section>
    
    
    <section class="counter-up-area bgimage">
        <div class="bg_image_holder">
            <img src="<?php echo e(url('/')); ?>/public/storage/settings/<?php echo e($allsettings->site_count_bg); ?>" alt="">
        </div>
        <!-- start .container -->
        <div class="container content_above">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="counter-up">
                    <div class="counter mcolor2">
                        <span class="lnr lnr-briefcase"></span>
                        <span class="count"><?php echo e($totalearning); ?></span> <span><?php echo e($allsettings->site_currency); ?></span>
                        <p><?php echo e(Helper::translation(3037,$translate)); ?></p>
                    </div>
                    <div class="counter mcolor3">
                        <span class="lnr lnr-cloud-download"></span>
                        <span class="count"><?php echo e($totalfiles); ?></span>
                        <p><?php echo e(Helper::translation(3038,$translate)); ?></p>
                    </div>
                    <div class="counter mcolor1">
                        <span class="lnr lnr-cart"></span>
                        <span class="count"><?php echo e($totalsales); ?></span>
                        <p><?php echo e(Helper::translation(3039,$translate)); ?></p>
                    </div>
                    <div class="counter mcolor4">
                        <span class="lnr lnr-users"></span>
                        <span class="count"><?php echo e($totalmembers); ?></span>
                        <p><?php echo e(Helper::translation(3002,$translate)); ?></p>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
    <?php if($allsettings->site_layout == ''): ?>
    <section class="featured-products bgcolor section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <h2><?php echo e(Helper::translation(3040,$translate)); ?> </h2>
                    
                    <div class="row margin-top-30">
                    <?php $__currentLoopData = $free['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="featured">
                       <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e($items->item_slug); ?>/<?php echo e($items->item_id); ?>" title="<?php echo e($items->item_name); ?>">
                                   <?php if($items->item_thumbnail!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($items->item_thumbnail); ?>" alt="<?php echo e($items->item_name); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.jpg" alt="<?php echo e($items->item_name); ?>">
                                        <?php endif; ?>
                                       </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    </div>
                    
                    
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <div align="center" class="mt-3"><a href="<?php echo e(URL::to('/free-items')); ?>" class="btn btn--sm theme-button"><?php echo e(Helper::translation(3041,$translate)); ?></a></div>
            <!-- end /.row -->
        </div>

       
    </section>
    
    
    <?php else: ?>
    
    <section class="featured-products bgcolor section--padding">
        <!-- start /.container -->
        <div class="container">
        
            <!-- start row -->
            <div class="row">
            
                <!-- start col-md-12 -->
                <div>
                    <h2><?php echo e(Helper::translation(3040,$translate)); ?> </h2>
                    
                    <div class="row margin-top-30">
                    <?php $__currentLoopData = $free['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="featured">
                       <a class="tip_trigger" href="<?php echo e(URL::to('/item')); ?>/<?php echo e($items->item_slug); ?>/<?php echo e($items->item_id); ?>" title="<?php echo e($items->item_name); ?>" >
                                   <?php if($items->item_thumbnail!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($items->item_thumbnail); ?>" alt="<?php echo e($items->item_name); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.jpg" alt="<?php echo e($items->item_name); ?>">
                                        <?php endif; ?>
                                        <span class="tip">
                                        <div class="row">
                                          <div class="col-md-12" align="center">
                                            <?php if($items->item_preview!=''): ?>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($items->item_preview); ?>" alt="<?php echo e($items->item_name); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($items->item_name); ?>">
                                        <?php endif; ?>
                                          </div>
                                        </div>    
                                        <div class="row">
                                        <div class="col-md-8 text-left">
                                        <div class="titleitem"><?php echo e($items->item_name); ?></div>
                                        <span class="authorr"><?php echo e(Helper::translation(3034,$translate)); ?> <?php echo e($items->username); ?></span>
                                        </div>
                                         <div class="col-md-4 text-right">
                                        <div class="currrency">
                                        <?php if($items->free_download == 1): ?>
                                        <span><?php echo e(Helper::translation(2992,$translate)); ?></span>
                                        <?php else: ?>
                                        <span><?php echo e($items->regular_price); ?> <?php echo e($allsettings->site_currency); ?></span>
                                        <?php endif; ?>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        </div>
                                        </span>
                    </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    </div>
                    
                    
                   
                </div>
                <!-- end /.col-md-12 -->
            </div>
            
            <div align="center" class="mt-3"><a href="<?php echo e(URL::to('/free-items')); ?>" class="btn btn--sm theme-button"><?php echo e(Helper::translation(3041,$translate)); ?></a></div>
            
            <!-- end /.row -->
        </div>

       
    </section>
    <?php endif; ?>
    
    
    
    <section class="testimonial-area section--padding">
       
        <div class="container">
            
            <div class="row">
              
                <div class="col-md-12">
                    <div class="section-title">
                        <h1><?php echo e(Helper::translation(3042,$translate)); ?>

                            <span class="highlighted"><?php echo e(Helper::translation(3043,$translate)); ?></span>
                        </h1>
                        <p><?php echo e(Helper::translation(3044,$translate)); ?></p>
                    </div>
                </div>
               
            </div>
           
           
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-slider">
                        
                        
                        <?php $__currentLoopData = $review['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                   <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($review->username); ?>">
                                   <?php if($review->user_photo!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($review->user_photo); ?>" alt="<?php echo e($review->username); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($review->username); ?>">
                                        <?php endif; ?>
                                       </a> 
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name"><a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($review->username); ?>"><?php echo e($review->username); ?></a></h4>
                                    <span class="desig"><?php echo e($review->profile_heading); ?></span>
                                    
                                </div>
                                <span class="quote-icon"><?php echo e($review->rating); ?><i class="lnr lnr-star"></i></span>
                            </div>
                            <div class="testimonial__text">
                                <p><?php echo e($review->rating_comment); ?></p>
                            </div>
                        </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        
                        
                        
                    </div>
                    

                   
                </div>
                
            </div>
            
        </div>
        
    </section>
    
    
    
    
    <?php if($allsettings->site_blog_display == 1): ?>
    <?php if($allsettings->home_blog_display == 1): ?>
    <section class="latest-news section--padding">
        
        <div class="container">
           
            <div class="row">
                
                <div class="col-md-12">
                    <div class="section-title">
                        <h1><?php echo e(Helper::translation(3045,$translate)); ?>

                            <span class="highlighted"><?php echo e(Helper::translation(2877,$translate)); ?></span>
                        </h1>
                        <p><?php echo e(Helper::translation(3046,$translate)); ?></p>
                    </div>
                </div>
               
            </div>
           
            <div class="row">
            <?php $__currentLoopData = $blog['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_blog blog--card">
                        <figure>
                            
                            <a href="<?php echo e(URL::to('/single')); ?>/<?php echo e($post->post_slug); ?>">
                            <?php if($post->post_image!=''): ?>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/post/<?php echo e($post->post_image); ?>" alt="<?php echo e($post->post_title); ?>" class="tag-img">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($post->post_title); ?>" class="tag-img">
                                        <?php endif; ?>
                                        </a>
                            <figcaption>
                                <div class="blog__content">
                                    <a href="<?php echo e(URL::to('/single')); ?>/<?php echo e($post->post_slug); ?>" class="blog__title ellipsis">
                                        <h4><?php echo e($post->post_title.'...'); ?></h4>
                                    </a>
                                    <p><?php echo e(substr($post->post_short_desc,0,200).'...'); ?></p>
                                </div>

                                <div class="blog__meta">
                                    <div class="date_time">
                                        <span class="lnr lnr-clock"></span>
                                        <p><?php echo e(date('d F Y', strtotime($post->post_date))); ?></p>
                                    </div>
                                    <div class="comment_view">
                                        <p class="comment">
                                            <span class="lnr lnr-bubble"></span><?php echo e($comments->has($post->post_id) ? count($comments[$post->post_id]) : 0); ?></p>
                                        <p class="view">
                                            <span class="lnr lnr-eye"></span><?php echo e($post->post_view); ?></p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
            
        </div>
        
    </section>
    <?php endif; ?>
    <?php endif; ?>
    
    
    
    
    
    <section class="why_choose section--padding">
       <div class="container">
            
            <div class="row">
                
                <div class="col-md-12">
                    <div class="section-title">
                        <h1><?php echo e(Helper::translation(3047,$translate)); ?>

                            <span class="highlighted"><?php echo e($allsettings->site_title); ?>?</span>
                        </h1>
                        <p><?php echo e(Helper::translation(3048,$translate)); ?></p>
                    </div>
                </div>
               
            </div>
            

            
            <div class="row">
            
            
              <div class="col-lg-3 col-md-3">
                    
                    <div class="feature2">
                       
                        <div class="feature2__content">
                            <span class="<?php echo e($allsettings->site_icon1); ?> theme-color"></span>
                            <h3 class="feature2-title"><?php echo e($allsettings->site_text1); ?></h3>
                            
                        </div>
                        
                    </div>
                    
                </div>
            
            
            
                
                <div class="col-lg-3 col-md-3">
                    
                    <div class="feature2">
                        
                        <div class="feature2__content">
                            <span class="<?php echo e($allsettings->site_icon2); ?> theme-color"></span>
                            <h3 class="feature2-title"><?php echo e($allsettings->site_text2); ?></h3>
                           
                        </div>
                        
                    </div>
                    
                </div>
                

                
                <div class="col-lg-3 col-md-3">
                    
                    <div class="feature2">
                        
                        <div class="feature2__content">
                            <span class="<?php echo e($allsettings->site_icon3); ?> theme-color"></span>
                            <h3 class="feature2-title"><?php echo e($allsettings->site_text3); ?></h3>
                            
                        </div>
                        
                    </div>
                    
                </div>
                

                <div class="col-lg-3 col-md-3">
                    
                    <div class="feature2">
                        
                        <div class="feature2__content">
                            <span class="<?php echo e($allsettings->site_icon4); ?> theme-color"></span>
                            <h3 class="feature2-title"><?php echo e($allsettings->site_text4); ?></h3>
                            
                        </div>
                        
                    </div>
                    
                </div>

                
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>   
    
   <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
   <?php echo $__env->make('javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html><?php /**PATH C:\Users\17329\Desktop\robertfromri\feberr\resources\views/index.blade.php ENDPATH**/ ?>
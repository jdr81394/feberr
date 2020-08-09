<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(3178,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload category-list-page">

   
   <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <div id="demo">
    <section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                 <img src="<?php echo e(url('/')); ?>/public/storage/settings/<?php echo e($allsettings->site_banner); ?>" alt="<?php echo e($allsettings->site_title); ?>">
            </div>
            <div class="container content_above">
                <div class="row jplist-panel">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3>
                                    <?php echo e($allsettings->site_banner_subheading); ?></h3>
                            </div>
                            <div class="search__field">
                                
                                    <div class="field-wrapper">
                                        <input class="relative-field" data-path="*" 
							  type="text" 
							  value="" 
							  placeholder="Search your items"
							  data-control-type="textbox" 
							  data-control-name="title-filter" 
							  data-control-action="filter"></div>
                                    
                                   
                               
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="<?php echo e(URL::to('/')); ?>"><?php echo e(Helper::translation(2862,$translate)); ?></a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo e(URL::to('/shop')); ?>"><?php echo e(Helper::translation(3025,$translate)); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
    
    
    
    <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar filter--bar2 jplist-panel">
                        <div class="pull-right">
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select 
						   data-control-type="sort-select" 
						   data-control-name="sort" 
						   data-control-action="sort">
                                        <option data-path=".like" data-order="asc" data-type="number"><?php echo e(Helper::translation(3179,$translate)); ?></option>
                                        <option data-path=".like" data-order="desc" data-type="number"><?php echo e(Helper::translation(3180,$translate)); ?></option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                            
                            
                            					
						<div class="filter__option filter--select">
                                <div class="select-wrap">					
						<select 
						   
						   data-control-type="sort-select" 
						   data-control-name="sort" 
						   data-control-action="sort">
						   
							  
							  <option data-path=".popular-items" data-order="desc" data-type="number"><?php echo e(Helper::translation(3181,$translate)); ?></option>
							  <option data-path=".new-items" data-order="desc" data-type="number"><?php echo e(Helper::translation(3182,$translate)); ?></option>
							  <option data-path=".free-items" data-order="desc" data-type="number"><?php echo e(Helper::translation(3016,$translate)); ?></option>
                              
							  								
						</select>
                        <span class="lnr lnr-chevron-down"></span>						
						 </div>
                            </div>
					
                            
                           
                            <div class="filter__option filter--layout">
                                <a href="<?php echo e(URL::to('/shop')); ?>">
                                    <div class="svg-icon">
                                        <img class="svg" src="<?php echo e(url('/')); ?>/public/assets/images/svg/grid.svg" alt="Grid View">
                                    </div>
                                </a>
                                <a href="<?php echo e(URL::to('/shop-list')); ?>">
                                    <div class="svg-icon">
                                        <img class="svg" src="<?php echo e(url('/')); ?>/public/assets/images/svg/list.svg" alt="List View">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>
    
    
    
    
    <section class="products section--padding2">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-lg-3 ">
                 
                    <!-- start aside -->
                    <aside class="sidebar product--sidebar">
                        <div class="sidebar-card card--category">
                            <a class="card-title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4><?php echo e(Helper::translation(2937,$translate)); ?>

                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse1">
                              <div class="jplist-panel">						
											
						<div class="jplist-group"
						   data-control-type="button-text-filter-group"
						   data-control-action="filter"
						   data-control-name="button-text-filter-group-1">
                                <ul class="card-content">
                                    <?php $__currentLoopData = $getWell['type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <li>
                                    <a href="javascript:void(0);">
								 <span
									data-path=".<?php echo e($value->item_type_slug); ?>"
									data-text="<?php echo e($value->item_type_slug); ?>"
									data-button="true">
									   
									   <span class="lnr lnr-chevron-right"></span><?php echo e($value->item_type_name); ?>

                                            <span class="item-count"></span>
								 </span>
                                   </a>
								 
							  </li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </ul>
                                </div>

						
						
					</div>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        
                        
                        
                       

                        <div class="sidebar-card card--slider">
                            <a class="card-title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse3">
                                <h4><?php echo e(Helper::translation(3183,$translate)); ?>

                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content jplist-panel" id="collapse3">
                                <div class="card-content">
                                <div class="demo">
                                    <input type="text" id="amount" class="range-price" />
                                <div id="slider-range"></div>
                                </div>
                                    <!--<div class="range-slider price-range"></div>

                                    <div class="price-ranges">
                                        <span class="from rounded">$30</span>
                                        <span class="to rounded">$300</span>
                                    </div>-->
                                    
                                    <div id="slider-range-min"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end /.sidebar-card -->
                    </aside>
                    <!-- end aside -->
                </div>
                <!-- end /.col-md-3 -->

                <!-- start col-md-9 -->
                <div class="col-lg-9">
                    <!-- start .single-product -->
                    <?php if(count($itemData['item']) != 0): ?>
                    <div class="list items" id="listShow">
                    <?php $__currentLoopData = $itemData['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- start .single-product -->
                    <div class="product product--list product--list-small  li-item list-item" data-price="<?php echo e($item->regular_price); ?>">

                        <div class="product__thumbnail">
                             <?php if($item->item_preview!=''): ?>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item->item_preview); ?>" alt="<?php echo e($item->item_name); ?>" class="listitem-thumbnail">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($item->item_name); ?>" class="listitem-thumbnail">
                                        <?php endif; ?>
                            <div class="prod_btn">
                                
                                <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>" class="transparent btn--sm btn--round"><?php echo e(Helper::translation(2999,$translate)); ?></a>
                                        <a href="<?php echo e(url('/preview')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>" class="transparent btn--sm btn--round" target="_blank"><?php echo e(Helper::translation(3000,$translate)); ?></a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                
                                <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>" class="product_title">
                                    <h4 class="title"><?php echo e(substr($item->item_name,0,30).'...'); ?></h4>
                                    </a>
                                <p><?php echo e(substr($item->item_shortdesc,0,60).'...'); ?></p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                       <a href="<?php echo e(URL::to('/shop')); ?>/item-type/<?php echo e($item->item_type); ?>" class="theme-color">
                                            <span class="lnr lnr-book"></span><?php echo e(str_replace('-',' ',$item->item_type)); ?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <?php if($item->user_photo!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($item->user_photo); ?>" alt="<?php echo e($item->username); ?>" class="auth-img">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($item->username); ?>" class="auth-img">
                                        <?php endif; ?>
                                    <p>
                                        <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($item->username); ?>"><?php echo e($item->username); ?></a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> <?php echo e($item->item_liked); ?> likes</p>
                                    
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
                            </div>
                            <!-- end product-meta -->
                            <span class="new-items display-none"><?php echo e($item->item_id); ?></span>
                               <span class="popular-items display-none"><?php echo e($item->item_liked); ?></span>
                               <span class="free-items display-none"><?php echo e($item->free_download); ?></span>
                            <div class="product-purchase">
                                <div class="price_love">
                                    <?php if($item->free_download == 1): ?>
                                    <span><?php echo e(Helper::translation(2992,$translate)); ?></span>
                                    <?php else: ?>
                                    <span><?php echo e($item->regular_price); ?> <?php echo e($allsettings->site_currency); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span><?php echo e($item->item_sold); ?></span>
                                    </p>
                                </div>
                                <span class="<?php echo e($item->item_type); ?>" style="display:none;"><?php echo e($item->item_type); ?></span>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                       <div class="box jplist-no-results text-shadow align-center">
                         <p><?php echo e(Helper::translation(3184,$translate)); ?></p>
                        </div>
                    </div>
                    <?php else: ?>
                    <p><?php echo e(Helper::translation(3184,$translate)); ?></p>
                    <?php endif; ?>
                    
                    
                    
                    
                </div>
                <!-- end /.col-md-9 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="jplist-panel box panel-top">						
							
						<div 
						   class="jplist-label customlable" 
						   data-type="Page {current} of {pages}" 
						   data-control-type="pagination-info" 
						   data-control-name="paging" 
						   data-control-action="paging">
						</div>	

						<div 
						   class="jplist-pagination" 
						   data-control-type="pagination" 
						   data-control-name="paging" 
						   data-control-action="paging"
						   data-items-per-page="<?php echo e($allsettings->site_item_per_page); ?>">
						</div>			
						
					</div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
   
   </div>
   
   <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
   <?php echo $__env->make('javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH D:\xampp\htdocs\feberr\resources\views/shop-list.blade.php ENDPATH**/ ?>
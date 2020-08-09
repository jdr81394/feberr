<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(3016,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload term-condition-page">

    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row jplist-panel">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3><?php echo e(Helper::translation(3016,$translate)); ?></h3>
                                <h4 class="mt-3 pt-3 text--white"><?php echo e(Helper::translation(3017,$translate)); ?></h4>
                            </div>
                            <div class="countdown-timer">
                             <ul id="example">
                                <li class="pt-2 pb-1 mb-2"><span class="days">00</span><div><?php echo e(Helper::translation(2995,$translate)); ?></div></li>
                                <li class="pt-2 pb-1 mb-2"><span class="hours">00</span><div><?php echo e(Helper::translation(2996,$translate)); ?></div></li>
                                <li class="pt-2 pb-1 mb-2"><span class="minutes">00</span><div><?php echo e(Helper::translation(2997,$translate)); ?></div></li>
		                        <li class="pt-2 pb-1 mb-2"><span class="seconds">00</span><div><?php echo e(Helper::translation(2998,$translate)); ?></div></li>
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
                        
                        
                        
                        <?php $__currentLoopData = $itemData['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- start .single-product -->
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
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

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
                                <!-- end /.product-desc -->
                               <span class="new-items display-none"><?php echo e($item->item_id); ?></span>
                               <span class="popular-items display-none"><?php echo e($item->item_liked); ?></span>
                               <span class="free-items display-none"><?php echo e($item->free_download); ?></span>
                               
                                <div class="product-purchase">
                                    <div class="price_love like">
                                        <?php if($item->free_download == 1): ?>
                                    <span><?php echo e(Helper::translation(2992,$translate)); ?></span>
                                    <?php else: ?>
                                    <?php if($item->item_flash == 1): ?>
                                    <span class="flash"><?php echo e(round($item->regular_price/2)); ?> <?php echo e($allsettings->site_currency); ?></span>
                                    <?php endif; ?>
                                    <span><del><?php echo e($item->regular_price); ?> <?php echo e($allsettings->site_currency); ?></del></span>
                                    
                                    <?php endif; ?>
                                    </div>
                                    <a href="<?php echo e(URL::to('/shop')); ?>/item-type/<?php echo e($item->item_type); ?>" class="theme-color">
                                            <span class="lnr lnr-book"></span><?php echo e(str_replace('-',' ',$item->item_type)); ?></a>
                                </div>
                               <span class="<?php echo e($item->item_type); ?>" style="display:none;"><?php echo e($item->item_type); ?></span>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                       
                        
                       
                       
                       
                       
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
   <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
   <?php echo $__env->make('javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
 <?php if(!empty($allsettings->site_free_end_date)): ?>
	<script type="text/javascript">
            $('#example').countdown({
                date: '<?php echo e(date("m/d/Y H:i:s", strtotime($allsettings->site_free_end_date))); ?>',
                offset: -8,
                day: 'Day',
                days: 'Days'
            }, function () {
                
            });
    </script>
    <?php endif; ?> 
</body>

</html><?php /**PATH D:\xampp\htdocs\feberr\resources\views/free-items.blade.php ENDPATH**/ ?>
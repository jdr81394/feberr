<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(2926,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload">

    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="<?php echo e(URL::to('/')); ?>"><?php echo e(Helper::translation(2862,$translate)); ?></a>
                            </li>
                            <li class="active">
                                <a href="<?php echo e(URL::to('/user')); ?>"><?php echo e(Helper::translation(2926,$translate)); ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo e(Helper::translation(2926,$translate)); ?></h1>
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
                   
        <?php if($message = Session::get('success')): ?>
               <div class="alert alert-success" role="alert">
                                <span class="alert_icon lnr lnr-checkmark-circle"></span>
                                <?php echo e($message); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="lnr lnr-cross" aria-hidden="true"></span>
                                </button>
                            </div>
        <?php endif; ?>
        
        
        <?php if($message = Session::get('error')): ?>
        <div class="alert alert-danger" role="alert">
                                <span class="alert_icon lnr lnr-warning"></span>
                                <?php echo e($message); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="lnr lnr-cross" aria-hidden="true"></span>
                                </button>
                            </div>
        <?php endif; ?>
        
        <?php if(!$errors->isEmpty()): ?>
        <div class="alert alert-danger" role="alert">
        <span class="alert_icon lnr lnr-warning"></span>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
        <?php echo e($error); ?>


       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="lnr lnr-cross" aria-hidden="true"></span>
        </button>
        </div>
        <?php endif; ?>
        
                    
                </div>
            <div class="row">
                <?php echo $__env->make('user-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <?php echo $__env->make('user-box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-12 col-sm-12">
                            <div class="author_module">
                                
                                <?php if($user['user']->user_banner != ''): ?>
                                    <img src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($user['user']->user_banner); ?>" alt="<?php echo e($user['user']->username); ?>">
                                 <?php else: ?>
                                 <img src="<?php echo e(url('/')); ?>/public/img/no-image.jpg" alt="<?php echo e($user['user']->username); ?>">
                                 <?php endif; ?>
                            </div>

                            <?php if($user['user']->profile_heading != ''): ?>
                            <div class="author_module about_author">
                                <h2><?php echo e($user['user']->profile_heading); ?>

                                </h2>
                                <p><?php echo e($user['user']->about); ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- end /.row -->
                    <?php if($user['user']->user_type == 'vendor'): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2><?php echo e(Helper::translation(2886,$translate)); ?></h2>
                                </div>

                                
                            </div>
                            <!-- end /.product-title-area -->
                        </div>
                        <div class="col-md-12 row" id="listShow">
                        <?php $__currentLoopData = $itemData['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 col-md-6 li-item">
                            <!-- start .single-product -->
                            <div class="product product--card">

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
                                    <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>" class="product_title ellipsis">
                                    <h4><?php echo e($item->item_name); ?></h4>
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
                                        <li class="product_cat">
                                             <a href="<?php echo e(URL::to('/shop')); ?>/item-type/<?php echo e($item->item_type); ?>" class="theme-color">
                                            <span class="lnr lnr-book"></span><?php echo e(str_replace('-',' ',$item->item_type)); ?></a>
                                        </li>
                                    </ul>

                                    <p><?php echo e(substr($item->item_shortdesc,0,120).'...'); ?></p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <?php if($item->free_download == 1): ?>
                                    <span>Free</span>
                                    <?php else: ?>
                                    <span><?php echo e($item->regular_price); ?> <?php echo e($allsettings->site_currency); ?></span>
                                    <?php endif; ?>
                                        <p>
                                            <span class="lnr lnr-heart"></span> <?php echo e($item->item_liked); ?></p>
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
                                            <span><?php echo e($item->item_sold); ?></span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                       </div>
                       
                        
                      <div class="col-md-12 row" align="right">
                    <div class="col-md-12">
                        <div class="pagination-area">
                           <div class="turn-page" id="pager"></div>
                        </div>
                       
                    </div>
                   
                </div>  
                </div>
                 <?php endif; ?>   
                 <!-- end /.row -->
                </div>
                <!-- end /.col-md-8 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
    
    
    
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH D:\xampp\htdocs\feberr\resources\views/user.blade.php ENDPATH**/ ?>
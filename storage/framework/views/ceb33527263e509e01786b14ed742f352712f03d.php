<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(2989,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload dashboard-edit">

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
                                <a href="<?php echo e(URL::to('/favourites')); ?>"><?php echo e(Helper::translation(2989,$translate)); ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo e(Helper::translation(2990,$translate)); ?></h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
    
    
    <section class="dashboard-area">
    <?php if(Auth::user()->id != 1): ?>
        <?php echo $__env->make('dashboard-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <div class="dashboard_contents">
            <div class="container">
                
                <!-- end /.row -->
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
                <div class="row" id="listShow">
                    
                    
                    <?php $__currentLoopData = $fav['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 li-item">
                        <!-- start .single-product -->
                        <div class="product product--card">

                            <div class="product__thumbnail">
                                
                                <?php if($item->item_preview!=''): ?>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item->item_preview); ?>" alt="<?php echo e($item->item_name); ?>" class="item-thumbnail">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($item->item_name); ?>" class="item-thumbnail">
                                        <?php endif; ?>
                                <div class="prod_option">
                                    <a href="<?php echo e(url('/favourites')); ?>/<?php echo e(base64_encode($item->fav_id)); ?>/<?php echo e(base64_encode($item->item_id)); ?>" id="drop1" class="dropdown-trigger" onClick="return confirm('<?php echo e(Helper::translation(2991,$translate)); ?>');">
                                        <span class="lnr lnr-trash setting-icon"></span>
                                    </a>

                                    
                                </div>
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
                                    <span><?php echo e(Helper::translation(2992,$translate)); ?></span>
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
                    <!-- end /.col-md-4 -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    
                    
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination-area">
                           
                           <div class="turn-page" id="pager"></div>
                           
                        </div>
                        <!-- end /.pagination-area -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
</section>

   <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
   <?php echo $__env->make('javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html><?php /**PATH D:\xampp\htdocs\feberr\resources\views/favourites.blade.php ENDPATH**/ ?>
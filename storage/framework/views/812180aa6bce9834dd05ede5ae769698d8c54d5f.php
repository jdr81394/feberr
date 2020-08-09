<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(3207,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
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
                                <a href="<?php echo e(URL::to('/user-reviews')); ?>"><?php echo e(Helper::translation(3207,$translate)); ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo e(Helper::translation(3207,$translate)); ?></h1>
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
                        
                    </div>
                    <!-- end /.row -->

                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2>
                                        <span class="bold"><?php echo e($countreview); ?></span> <?php echo e(Helper::translation(3207,$translate)); ?></h2>
                                </div>
                            </div>
                            <!-- end /.product-title-area -->

                            <div class="thread thread_review thread_review2">
                                <ul class="media-list thread-list" id="listShow">
                                    
                                    <?php $__currentLoopData = $ratingview['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="single-thread li-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="<?php echo e(url('/user')); ?>/<?php echo e($review->username); ?>">
                                                <?php if($review->user_photo != ''): ?>
                                                   <img src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($review->user_photo); ?>" alt="<?php echo e($review->username); ?>" class="media-object">
                                                 <?php else: ?>
                                                 <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($review->username); ?>" class="media-object">
                                                 <?php endif; ?>
                                                 </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="<?php echo e(url('/user')); ?>/<?php echo e($review->username); ?>">
                                                                <h4><?php echo e($review->username); ?></h4>
                                                            </a>
                                                            <a href="<?php echo e(url('/item')); ?>/<?php echo e($review->item_slug); ?>/<?php echo e($review->item_id); ?>" class="theme-color"><?php echo e($review->item_name); ?></a>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <?php if($review->rating == 0): ?>
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
                                                                <?php if($review->rating == 1): ?>
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
                                                                <?php if($review->rating == 2): ?>
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
                                                                <?php if($review->rating == 3): ?>
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
                                                                 <?php if($review->rating == 4): ?>
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
                                                                <?php if($review->rating == 5): ?>
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
                                                        <span class="review_tag"><?php echo e($review->rating_reason); ?></span>
                                                    </div>

                                                    <div class="pull-right rev_time"><?php echo e(date('F d Y, h:i:s', strtotime($review->rating_date))); ?></div>
                                                </div>
                                                <p><?php echo e($review->rating_comment); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    

                                    
                                    
                                </ul>
                                <!-- end /.media-list -->

                                <div class="pagination-area pagination-area2">
                                    <nav class="navigation pagination " role="navigation">
                                        <div class="pagination-area">
                           <div class="turn-page" id="pager"></div>
                        </div>
                                    </nav>
                                </div>
                                <!-- end /.comment pagination area -->
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    
                    
                    
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

</html><?php /**PATH D:\xampp\htdocs\feberr\resources\views/user-reviews.blade.php ENDPATH**/ ?>
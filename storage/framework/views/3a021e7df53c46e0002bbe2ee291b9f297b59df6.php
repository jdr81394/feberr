<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(3197,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload author-followers">

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
                                <a href="<?php echo e(URL::to('/user-followers')); ?>"><?php echo e(Helper::translation(3197,$translate)); ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo e(Helper::translation(3197,$translate)); ?></h1>
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
                                        <span class="bold"><?php echo e($followercount); ?></span> <?php if($followercount <= 1): ?> <?php echo e(Helper::translation(3198,$translate)); ?> <?php else: ?> <?php echo e(Helper::translation(3197,$translate)); ?> <?php endif; ?></h2>
                                </div>
                            </div>
                            <!-- end /.product-title-area -->

                            <div class="user_area">
                                <ul id="listShow">
                                
                                    <?php $__currentLoopData = $viewfollowing['view']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="li-item">
                                        <div class="user_single">
                                            <div class="user__short_desc">
                                                <div class="user_avatar">
                                                    <a href="<?php echo e(url('/user')); ?>/<?php echo e($follower->username); ?>">
                                                   <?php if($follower->user_photo != ''): ?>
                                                   <img src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($follower->user_photo); ?>" alt="<?php echo e($follower->username); ?>" width="60">
                                                 <?php else: ?>
                                                 <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($follower->username); ?>" width="60">
                                                 <?php endif; ?>
                                                 </a>
                                                </div>
                                                <div class="user_info">
                                                    <a href="<?php echo e(url('/user')); ?>/<?php echo e($follower->username); ?>"><?php echo e($follower->username); ?></a>
                                                    <p><?php echo e(Helper::translation(3077,$translate)); ?>: <?php echo e(date("F Y", strtotime($follower->created_at))); ?> </p>
                                                </div>
                                            </div>
                                            <div class="user__meta">
                                                <p class="height-40"></p>
                                                <p><?php echo e(Helper::translation(3199,$translate)); ?> : <?php if($follower->country !=''): ?> <?php echo e($follower->country_name); ?> <?php else: ?> - <?php endif; ?></p>
                                               
                                            </div>
                                            
                                            <div class="user__status">
                                                <a href="<?php echo e(url('/user')); ?>/<?php echo e($follower->username); ?>" class="btn btn--md theme-button"><?php echo e(Helper::translation(3078,$translate)); ?></a>
                                            </div>
                                            
                                        </div>
                                        <!-- end /.user_single -->
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                    
                                </ul>

                                <div class="pagination-area pagination-area2">
                                    <nav class="navigation pagination " role="navigation">
                                      <div class="turn-page" id="pager"></div>  
                                    </nav>
                                </div>
                            </div>
                            <!-- end /.user_area -->
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

</html><?php /**PATH D:\xampp\htdocs\feberr\resources\views/user-followers.blade.php ENDPATH**/ ?>
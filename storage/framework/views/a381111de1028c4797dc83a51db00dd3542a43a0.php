<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e($item['item']->item_name); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload single_prduct2">

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
                            <li>
                                <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>"><?php echo e($item['item']->item_name); ?></a>
                            </li>
                            
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo e($item['item']->item_name); ?></h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
    <section class="single-product-desc">
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
                <div class="col-lg-8">
                    <div class="item-preview item-preview2">
                        <div class="prev-slide">
                        <?php if($item['item']->item_preview!=''): ?>
                        <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_preview); ?>" alt="<?php echo e($item['item']->item_name); ?>" class="single-thumbnail">
                        <?php else: ?>
                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($item['item']->item_name); ?>" class="single-thumbnail">
                        <?php endif; ?>
                            
                        </div>

                        <div class="item__preview-thumb">
                            <div class="item-action">
                                <div class="action-btns">
                                    <?php if($item['item']->demo_url != ''): ?><a href="<?php echo e($item['item']->demo_url); ?>" class="btn btn--sm theme-button" target="_blank"><?php echo e(Helper::translation(3049,$translate)); ?></a><?php endif; ?>
                                    <?php if($getcount != 0): ?><a href="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item_image['item']->item_image); ?>" class="btn btn--sm theme-button lightbox" data-lightbox-gallery="mygallery"><?php echo e(Helper::translation(3050,$translate)); ?></a><?php endif; ?>
                                    <?php if(Auth::guest()): ?>
                                    <a href="javascript:void(0);" class="btn btn--sm btn--icon theme-button" onClick="alert('Login user only');">
                                        <span class="lnr lnr-heart"></span><?php echo e(Helper::translation(3051,$translate)); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if(Auth::check()): ?>
                                    <?php if($item['item']->user_id != Auth::user()->id): ?>
                                    <a href="<?php echo e(url('/item')); ?>/<?php echo e(base64_encode($item['item']->item_id)); ?>/favorite/<?php echo e(base64_encode($item['item']->item_liked)); ?>" class="btn btn--sm btn--icon theme-button">
                                        <span class="lnr lnr-heart"></span><?php echo e(Helper::translation(3051,$translate)); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($item['item']->video_url != ''): ?>
                                    <a id="feberr-video" video-url="<?php echo e($item['item']->video_url); ?>" class="btn btn--sm btn--icon theme-button videobtn"><span class="lnr lnr-camera-video"></span> Video</a>
                                    <?php endif; ?>
                                </div>
                                
                    
                    
                            </div>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $item_allimage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($no != 1): ?>
                            <a href="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($image->item_image); ?>" class="lightbox" data-lightbox-gallery="mygallery" hidden></a>
                            <?php endif; ?>
                            <?php $no++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            <!-- end /.item__action -->

                            <div class="item_social_share">
                                <p>
                                    <img src="<?php echo e(url('/')); ?>/public/assets/images/svg/share.svg" alt="Share this item">
                                    <span><?php echo e(Helper::translation(3052,$translate)); ?></span>
                                </p>

                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                                    <a class="share-button" data-share-url="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>" data-share-network="facebook" data-share-text="<?php echo e($item['item']->item_shortdesc); ?>" data-share-title="<?php echo e($item['item']->item_name); ?>" data-share-via="<?php echo e($allsettings->site_title); ?>" data-share-tags="" data-share-media="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_thumbnail); ?>" href="javascript:void(0)">
                                                        <span class="fa fa-facebook"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="share-button" data-share-url="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>" data-share-network="twitter" data-share-text="<?php echo e($item['item']->item_shortdesc); ?>" data-share-title="<?php echo e($item['item']->item_name); ?>" data-share-via="<?php echo e($allsettings->site_title); ?>" data-share-tags="" data-share-media="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_thumbnail); ?>" href="javascript:void(0)">
                                                        <span class="fa fa-twitter"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="share-button" data-share-url="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>" data-share-network="googleplus" data-share-text="<?php echo e($item['item']->item_shortdesc); ?>" data-share-title="<?php echo e($item['item']->item_name); ?>" data-share-via="<?php echo e($allsettings->site_title); ?>" data-share-tags="" data-share-media="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_thumbnail); ?>" href="javascript:void(0)">
                                                        <span class="fa fa-google-plus"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="share-button" data-share-url="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>" data-share-network="linkedin" data-share-text="<?php echo e($item['item']->item_shortdesc); ?>" data-share-title="<?php echo e($item['item']->item_name); ?>" data-share-via="<?php echo e($allsettings->site_title); ?>" data-share-tags="" data-share-media="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_thumbnail); ?>" href="javascript:void(0)">
                                                        <span class="fa fa-linkedin"></span>
                                                    </a>
                                                </li>
                                        
                                    </ul>
                                </div>
                                <!-- end /.social-->

                            </div>
                            <!-- end /.item__preview-thumb-->
                        </div>
                        <!-- end /.item__preview-thumb-->


                    </div>
                    <!-- end /.item-preview-->

                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3053,$translate)); ?></a>
                                </li>
                                <li>
                                    <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3054,$translate)); ?> <span>(<?php echo e($comment_count); ?>)</span></a>
                                </li>
                                <li>
                                    <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3043,$translate)); ?>

                                        <span>(<?php echo e($getreview); ?>)</span>
                                    </a>
                                </li>
                                <?php if(Auth::guest()): ?>
                                <li>
                                    <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3055,$translate)); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php if(Auth::check()): ?>
                                <?php if($item['item']->user_id != Auth::user()->id): ?>
                                 <li>
                                    <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3055,$translate)); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php endif; ?>
                                
                                
                                
                            </ul>
                        </div>
                        <!-- end /.item-navigation -->

                        <div class="tab-content">
                        
                                                    
                            <div class="tab-pane fade show product-tab active" id="product-details">
                                <div class="tab-content-wrapper">
                                    <?php echo html_entity_decode($item['item']->item_desc); ?>

                                </div>
                            </div>
                            <!-- end /.tab-content -->

                            <div class="fade tab-pane product-tab" id="product-comment">
                                <div class="thread">
                                
                                                                
                                    <ul class="media-list thread-list" id="listShow">
                                        
                                        
                                        <?php $__currentLoopData = $comment['view']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="single-thread commli-item">
                                            <div class="media">
                                                <div class="media-left">
                                                <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($parent->username); ?>">
                                                       
                                                        <?php if($parent->user_photo!=''): ?>
                                                    <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($parent->user_photo); ?>" alt="<?php echo e($parent->username); ?>" class="media-object">
                                                    <?php else: ?>
                                                    <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($parent->username); ?>" class="media-object">
                                                    <?php endif; ?>
                                                    </a>
                                                    
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($parent->username); ?>">
                                                                <h4><?php echo e($parent->username); ?></h4>
                                                            </a>
                                                            <span><?php echo e(date('d F Y, H:i:s', strtotime($parent->comm_date))); ?></span>
                                                        </div>
                                                        
                                                        <?php if($parent->id == $item['item']->user_id): ?>
                                                        <span class="comment-tag buyer"><?php echo e(Helper::translation(3057,$translate)); ?></span>
                                                        <?php endif; ?>
                                                        <?php if(Auth::check()): ?>
                                                        <?php if($item['item']->user_id == Auth::user()->id): ?>
                                                        <a href="javascript:void(0);" class="reply-link theme-color"><?php echo e(Helper::translation(3056,$translate)); ?></a>
                                                        <?php endif; ?>
                                                        <?php if($parent->comm_user_id == Auth::user()->id): ?>
                                                        <a href="javascript:void(0);" class="reply-link theme-color"><?php echo e(Helper::translation(3056,$translate)); ?></a>
                                                        <?php endif; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <p><?php echo e($parent->comm_text); ?></p>
                                                </div>
                                            </div>
                                            
                                            
                                            <ul class="children">
                                            <?php $__currentLoopData = $parent->replycomment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="single-thread depth-2">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($child->username); ?>">
                                                       
                                                        <?php if($child->user_photo!=''): ?>
                                                    <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($child->user_photo); ?>" alt="<?php echo e($child->username); ?>" class="media-object">
                                                    <?php else: ?>
                                                    <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($child->username); ?>" class="media-object">
                                                    <?php endif; ?>
                                                    </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                                <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($child->username); ?>">
                                                                <h4><?php echo e($child->username); ?></h4>
                                                                </a>
                                                                <span><?php echo e(date('d F Y, H:i:s', strtotime($child->comm_date))); ?></span>
                                                            </div>
                                                            <?php if($child->id == $item['item']->user_id): ?>
                                                            <span class="comment-tag buyer"><?php echo e(Helper::translation(3057,$translate)); ?></span>
                                                            <?php endif; ?>
                                                            <!--<span class="comment-tag author">Author</span>-->
                                                            <p><?php echo e($child->comm_text); ?></p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                            
                                            <!-- comment reply -->
                                            <?php if(Auth::check()): ?>
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e(Auth::user()->username); ?>">
                                                       
                                                        <?php if(Auth::user()->user_photo!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e(Auth::user()->user_photo); ?>" alt="<?php echo e(Auth::user()->username); ?>" class="media-object">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e(Auth::user()->username); ?>" class="media-object">
                                        <?php endif; ?>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="<?php echo e(route('reply-post-comment')); ?>" class="comment-reply-form" id="item_form" method="post" enctype="multipart/form-data">
                                                    <?php echo e(csrf_field()); ?>

                                                    <textarea name="comm_text" placeholder="<?php echo e(Helper::translation(3059,$translate)); ?>" data-bvalidator="required"></textarea>
                                                    <input type="hidden" name="comm_user_id" value="<?php echo e(Auth::user()->id); ?>">
                                                    <input type="hidden" name="comm_item_user_id" value="<?php echo e($item['item']->user_id); ?>">
                                                    <input type="hidden" name="comm_item_id" value="<?php echo e($item['item']->item_id); ?>">
                                                    <input type="hidden" name="comm_id" value="<?php echo e($parent->comm_id); ?>">
                                                    <input type="hidden" name="comm_item_url" value="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>">
                                                   <button class="btn btn--sm theme-button"><?php echo e(Helper::translation(3058,$translate)); ?></button>
                                                </form>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <!-- comment reply -->
                                        </li>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                       
                                       
                                    </ul>
                                    <!-- end /.media-list -->

                                    <div class="pagination-area pagination-area2">
                                        <nav class="navigation pagination" role="navigation">
                                           <div class="pagination-area">
                                                <div class="turn-page" id="commpager"></div>
                                           </div> 
                                        </nav>
                                    </div>
                                    <!-- end /.comment pagination area -->

                                    <?php if(Auth::check()): ?>
                                    <?php if($item['item']->user_id != Auth::user()->id): ?>
                                    <div class="comment-form-area">
                                        <h4>Leave a comment</h4>
                                        <!-- comment reply -->
                                        <div class="media comment-form">
                                            <div class="media-left">
                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e(Auth::user()->username); ?>">
                                                       
                                                        <?php if(Auth::user()->user_photo!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e(Auth::user()->user_photo); ?>" alt="<?php echo e(Auth::user()->username); ?>" class="media-object">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e(Auth::user()->username); ?>" class="media-object">
                                        <?php endif; ?>
                                                    </a>
                                                
                                            </div>
                                            <div class="media-body">
                                                <form action="<?php echo e(route('post-comment')); ?>" class="comment-reply-form" id="item_form" method="post" enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                    <textarea name="comm_text" placeholder="<?php echo e(Helper::translation(3059,$translate)); ?>" data-bvalidator="required"></textarea>
                                                    <input type="hidden" name="comm_user_id" value="<?php echo e(Auth::user()->id); ?>">
                                                    <input type="hidden" name="comm_item_user_id" value="<?php echo e($item['item']->user_id); ?>">
                                                    <input type="hidden" name="comm_item_id" value="<?php echo e($item['item']->item_id); ?>">
                                                    <input type="hidden" name="comm_item_url" value="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>">
                                                   <button class="btn btn--sm theme-button"><?php echo e(Helper::translation(3058,$translate)); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </div>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    
                                    
                                </div>
                                <!-- end /.comments -->
                            </div>
                            <!-- end /.product-comment -->

                            <div class="tab-pane fade product-tab" id="product-review">
                                <div class="thread thread_review">
                                    <ul class="media-list thread-list" id="listShow">
                                        <?php $__currentLoopData = $getreviewdata['view']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="single-thread li-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($rating->username); ?>">
                                                       
                                                        <?php if($rating->user_photo!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($rating->user_photo); ?>" alt="<?php echo e($rating->username); ?>" class="media-object">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($rating->username); ?>" class="media-object">
                                        <?php endif; ?>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="media-heading">
                                                                <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($rating->username); ?>">
                                                                    <h4><?php echo e($rating->username); ?></h4>
                                                                </a>
                                                                <span><?php echo e(date('d F Y H:i:s', strtotime($rating->rating_date))); ?></span>
                                                            </div>
                                                            <div class="rating product--rating">
                                                                <ul>
                                                                    <?php if($rating->rating == 0): ?>
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
                                                                    <?php if($rating->rating == 1): ?>
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
                                                                    <?php if($rating->rating == 2): ?>
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
                                                                    <?php if($rating->rating == 3): ?>
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
                                                                    <?php if($rating->rating == 4): ?>
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
                                                                    <?php if($rating->rating == 5): ?>
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
                                                            <span class="review_tag"><?php echo e($rating->rating_reason); ?></span>
                                                        </div>
                                                        
                                                    </div>
                                                    <p><?php echo e($rating->rating_comment); ?></p>
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
                            <!-- end /.product-comment -->

                            <div class="tab-pane fade product-tab" id="product-support">
                                <div class="support">
                                    <div class="support__title">
                                        <h3><?php echo e(Helper::translation(3060,$translate)); ?></h3>
                                    </div>
                                    <div class="support__form">
                                        <div class="usr-msg">
                                            <?php if(Auth::guest()): ?>
                                            <p><?php echo e(Helper::translation(3061,$translate)); ?>

                                                <a href="<?php echo e(URL::to('/login')); ?>" class="theme-color"><?php echo e(Helper::translation(3020,$translate)); ?></a> <?php echo e(Helper::translation(3062,$translate)); ?></p>
                                                <?php endif; ?>

                                            <?php if(Auth::check()): ?>
                                            <form action="<?php echo e(route('support')); ?>" class="support_form" id="support_form" method="post" enctype="multipart/form-data">
                                            <?php echo e(csrf_field()); ?>

                                                <div class="form-group">
                                                    <label for="subj"><?php echo e(Helper::translation(3063,$translate)); ?>:</label>
                                                    <input type="text" id="support_subject" name="support_subject" class="text_field" placeholder="Enter your subject" data-bvalidator="required">
                                                </div>

                                                <div class="form-group">
                                                    <label for="supmsg"><?php echo e(Helper::translation(2918,$translate)); ?>: </label>
                                                    <textarea class="text_field" id="support_msg" name="support_msg" placeholder="Enter your message" data-bvalidator="required"></textarea>
                                                </div>
                                                <input type="hidden" name="to_address" value="<?php echo e($item['item']->email); ?>">
                                                <input type="hidden" name="to_name" value="<?php echo e($item['item']->username); ?>">
                                                <input type="hidden" name="from_address" value="<?php echo e(Auth::user()->email); ?>">
                                                <input type="hidden" name="from_name" value="<?php echo e(Auth::user()->username); ?>">
                                                <input type="hidden" name="item_url" value="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>">
                                                <button type="submit" class="btn btn--md theme-button"><?php echo e(Helper::translation(3064,$translate)); ?></button>
                                            </form>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.product-support -->

                            
                            <!-- end /.product-faq -->
                        </div>
                        <!-- end /.tab-content -->
                    </div>
                    <!-- end /.item-info -->
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
                <?php if($item['item']->free_download == 1): ?>
                <div class="author-card sidebar-card freefile">
                   <p><?php echo e(Helper::translation(3065,$translate)); ?> <strong><?php echo e(Helper::translation(3040,$translate)); ?></strong>. <?php echo e(Helper::translation(3066,$translate)); ?>

                   </p>
                   <div align="center">
                   <?php if(Auth::guest()): ?>
                   <a href="<?php echo e(URL::to('/login')); ?>" class="btn btn--md theme-button"> <i class="fa fa-download"></i> <?php echo e(Helper::translation(3067,$translate)); ?> (<?php echo e($item['item']->download_count); ?>)</a>
                   <?php else: ?>
                   <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e(base64_encode($item['item']->item_token)); ?>" class="btn btn--md theme-button" download> <i class="fa fa-download"></i> <?php echo e(Helper::translation(3067,$translate)); ?> (<?php echo e($item['item']->download_count); ?>)</a>
                   <?php endif; ?>
                   </div>
                </div>
                <?php endif; ?>
                
                <form action="<?php echo e(route('cart')); ?>" class="setting_form" method="post" id="order_form" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?> 
                <?php if($item['item']->item_flash == 1)
                { 
                $item_price = round($item['item']->regular_price/2);
                $extend_item_price = round($item['item']->extended_price/2);
                } 
                else 
                { 
                $item_price = $item['item']->regular_price;
                $extend_item_price = $item['item']->extended_price; 
                } 
                ?>
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing card--pricing2">
                            <div class="price">
                                <h1>
                                    <sup><?php echo e($allsettings->site_currency); ?></sup>
                                    <span><?php echo e($item_price); ?></span>
                                </h1>
                            </div>
                            <ul class="pricing-options">
                               <li>
                               <div class="item-features">
                                        <ul>
                                           <li><span class="lnr lnr-checkmark-circle right"></span> <?php echo e(Helper::translation(3068,$translate)); ?> <?php echo e($allsettings->site_title); ?></li>
                                           <?php if($item['item']->future_update == 1): ?>
                                           <li><span class="lnr lnr-checkmark-circle right"></span>  <?php echo e(Helper::translation(3069,$translate)); ?></li>
                                           <?php else: ?>
                                           <li><span class="lnr lnr-cross-circle wrong"></span>  <?php echo e(Helper::translation(3069,$translate)); ?></li>
                                           <?php endif; ?>
                                           
                                           <?php if($item['item']->item_support == 1): ?>
                                           <li><span class="lnr lnr-checkmark-circle right"></span> <?php echo e(Helper::translation(3070,$translate)); ?> <?php echo e($item['item']->username); ?></li>
                                           <?php else: ?>
                                           <li><span class="lnr lnr-cross-circle wrong"></span> <?php echo e(Helper::translation(3070,$translate)); ?> <?php echo e($item['item']->username); ?></li>
                                           <?php endif; ?>
                                           
                                        </ul>
                                    </div>
                               </li>
                            
                                
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt1" class="" value="<?php echo e(base64_encode($item_price)); ?>_regular" name="item_price" checked>
                                        <label for="opt1" data-price="<?php echo e($item_price); ?>">
                                            <span class="circle"></span><?php echo e(Helper::translation(3072,$translate)); ?> </label>
                                    </div>

                                    
                                </li>
                               
                                <?php if($item['item']->extended_price != 0): ?>
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt2" class="" value="<?php echo e(base64_encode($extend_item_price)); ?>_extended" name="item_price">
                                        <label for="opt2" data-price="<?php echo e($extend_item_price); ?>">
                                            <span class="circle"></span><?php echo e(Helper::translation(3073,$translate)); ?></label>
                                    </div>

                                </li>
                                <?php endif; ?>
                            </ul>
                            
                            
                            <!-- end /.pricing-options -->

                            <div class="purchase-button">
                               <?php if(Auth::guest()): ?>
                               <a href="javascript:void(0);" class="btn btn--md theme-button cart-btn" onClick="alert('Login user only');">
                                    <span class="lnr lnr-cart"></span> <?php echo e(Helper::translation(3074,$translate)); ?></a>
                               <?php endif; ?> 
                               <?php if(Auth::check()): ?>
                               <?php if($item['item']->user_id == Auth::user()->id): ?>
                               <a href="<?php echo e(URL::to('/edit-item')); ?>/<?php echo e($item['item']->item_token); ?>" class="btn btn--md theme-button"><?php echo e(Helper::translation(2935,$translate)); ?></a>
                               <?php else: ?>
                               <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                               <input type="hidden" name="item_id" value="<?php echo e($item['item']->item_id); ?>">
                               <input type="hidden" name="item_name" value="<?php echo e($item['item']->item_name); ?>">
                               <input type="hidden" name="item_user_id" value="<?php echo e($item['item']->user_id); ?>">
                               <input type="hidden" name="item_token" value="<?php echo e($item['item']->item_token); ?>">
                               <?php if($checkif_purchased == 0): ?>
                               <?php if(Auth::user()->id != 1): ?>
                               <button type="submit" class="btn btn--md theme-button cart-btn"><span class="lnr lnr-cart"></span> <?php echo e(Helper::translation(3074,$translate)); ?></button>
                               <?php endif; ?> 
                               <?php endif; ?>    
                               <?php endif; ?>
                               <?php endif; ?>    
                                
                                
                                
                            </div>
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.sidebar--card -->
                        <?php if($item['item']->item_featured == 'yes'): ?>
                        <div class="sidebar-card card--metadata">
                            <div>
                                    <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->featured_item_icon); ?>" border="0" class="single-badges" title="Featured Item"> <?php echo e(Helper::translation(3075,$translate)); ?> <?php echo e($allsettings->site_title); ?>

                            </div>
                            
                        </div>    
                        <?php endif; ?>
                        <?php if($sold_amount >= $badges['setting']->author_sold_level_six): ?>
                        <div class="sidebar-card card--metadata">
                            <div>
                                    <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->power_elite_author_icon); ?>" border="0" class="single-badges" title="<?php echo e($badges['setting']->author_sold_level_six_label); ?> : Sold more than <?php echo e($allsettings->site_currency); ?> <?php echo e($badges['setting']->author_sold_level_six); ?>+ on <?php echo e($allsettings->site_title); ?>"> <?php echo e($badges['setting']->author_sold_level_six_label); ?>

                            </div>
                            
                        </div> 
                        <?php endif; ?>
                        
                        
                        <div class="author-card sidebar-card ">
                            <div class="card-title">
                                <h4><?php echo e(Helper::translation(3076,$translate)); ?></h4>
                            </div>

                            <div class="author-infos">
                                <div class="author_avatar">
                                    
                                    <?php if($item['item']->user_photo != ''): ?>
                                            <img src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($item['item']->user_photo); ?>" alt="<?php echo e($item['item']->name); ?>" width="100">
                                            <?php else: ?>
                                            <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($item['item']->name); ?>" width="100">
                                            <?php endif; ?>
                                </div>

                                <div class="author">
                                    <h4><?php echo e($item['item']->username); ?></h4>
                                    <p><?php echo e(Helper::translation(3077,$translate)); ?> <?php echo e(date("F Y", strtotime($item['item']->created_at))); ?></p>
                                </div>
                                <!-- end /.author -->

                                <div class="social social--color--filled">
                                    <ul>
                                        <?php if($item['item']->country_badge == 1): ?>
                                        <?php if($country['view']->country_badges != ""): ?>
                                        <li>
                                          <img src="<?php echo e(url('/')); ?>/public/storage/flag/<?php echo e($country['view']->country_badges); ?>" border="0" class="icon-badges" title="Located in <?php echo e($country['view']->country_name); ?>">  
                                        </li>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                        
                                        <?php if($item['item']->exclusive_author == 1): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->exclusive_author_icon); ?>" border="0" class="other-badges" title="Exclusive Author: Sells items exclusively on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($trends != 0): ?>
                                         <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->trends_icon); ?>" border="0" class="other-badges" title="Trendsetter: Had an item that was trending">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($item['item']->item_featured == 'yes'): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->featured_item_icon); ?>" border="0" class="other-badges" title="Featured Item: Had an item featured on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($item['item']->free_download == 1): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->free_item_icon); ?>" border="0" class="other-badges" title="Free Item : Contributed a free file of this item">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($year == 1): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->one_year_icon); ?>" border="0" class="other-badges" title="<?php echo e($year); ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php echo e($year); ?> years">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($year == 2): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->two_year_icon); ?>" border="0" class="other-badges" title="<?php echo e($year); ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php echo e($year); ?> years">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($year == 3): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->three_year_icon); ?>" border="0" class="other-badges" title="<?php echo e($year); ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php echo e($year); ?> years">
                                        </li>
                                        <?php endif; ?>
                                        
                                        
                                        <?php if($year == 4): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->four_year_icon); ?>" border="0" class="other-badges" title="<?php echo e($year); ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php echo e($year); ?> years">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($year == 5): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->five_year_icon); ?>" border="0" class="other-badges" title="<?php echo e($year); ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php echo e($year); ?> years">
                                        </li>
                                        <?php endif; ?> 
                                        
                                        <?php if($year == 6): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->six_year_icon); ?>" border="0" class="other-badges" title="<?php echo e($year); ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php echo e($year); ?> years">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($year == 7): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->seven_year_icon); ?>" border="0" class="other-badges" title="<?php echo e($year); ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php echo e($year); ?> years">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($year == 8): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->eight_year_icon); ?>" border="0" class="other-badges" title="<?php echo e($year); ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php echo e($year); ?> years">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($year == 9): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->nine_year_icon); ?>" border="0" class="other-badges" title="<?php echo e($year); ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php echo e($year); ?> years">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($year >= 10): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->ten_year_icon); ?>" border="0" class="other-badges" title="<?php if($year >= 10): ?> 10+ <?php else: ?> <?php echo e($year); ?> <?php endif; ?> Years of Membership: Has been part of the <?php echo e($allsettings->site_title); ?> Community for over <?php if($year >= 10): ?> 10+ <?php else: ?> <?php echo e($year); ?> <?php endif; ?> years">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($sold_amount >= $badges['setting']->author_sold_level_one && $badges['setting']->author_sold_level_two > $sold_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_sold_level_one_icon); ?>" border="0" class="other-badges" title="Author Level 1: Has sold <?php echo e($allsettings->site_currency); ?> <?php echo e($badges['setting']->author_sold_level_one); ?>+ on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($sold_amount >= $badges['setting']->author_sold_level_two &&  $badges['setting']->author_sold_level_three > $sold_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_sold_level_two_icon); ?>" border="0" class="other-badges" title="Author Level 2: Has sold <?php echo e($allsettings->site_currency); ?> <?php echo e($badges['setting']->author_sold_level_two); ?>+ on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($sold_amount >= $badges['setting']->author_sold_level_three &&  $badges['setting']->author_sold_level_four > $sold_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->	author_sold_level_three_icon); ?>" border="0" class="other-badges" title="Author Level 3: Has sold <?php echo e($allsettings->site_currency); ?> <?php echo e($badges['setting']->author_sold_level_three); ?>+ on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        
                                        <?php if($sold_amount >= $badges['setting']->author_sold_level_four &&  $badges['setting']->author_sold_level_five > $sold_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_sold_level_four_icon); ?>" border="0" class="other-badges" title="Author Level 4: Has sold <?php echo e($allsettings->site_currency); ?> <?php echo e($badges['setting']->author_sold_level_four); ?>+ on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($sold_amount >= $badges['setting']->author_sold_level_five &&  $badges['setting']->author_sold_level_six > $sold_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_sold_level_five_icon); ?>" border="0" class="other-badges" title="Author Level 5: Has sold <?php echo e($allsettings->site_currency); ?> <?php echo e($badges['setting']->author_sold_level_five); ?>+ on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        
                                        <?php if($sold_amount >= $badges['setting']->author_sold_level_six): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_sold_level_six_icon); ?>" border="0" class="other-badges" title="Author Level 6: Has sold <?php echo e($allsettings->site_currency); ?> <?php echo e($badges['setting']->author_sold_level_six); ?>+ on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($sold_amount >= $badges['setting']->author_sold_level_six): ?>
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->power_elite_author_icon); ?>" border="0" class="other-badges" title="<?php echo e($badges['setting']->author_sold_level_six_label); ?> : Sold more than <?php echo e($allsettings->site_currency); ?> <?php echo e($badges['setting']->author_sold_level_six); ?>+ on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($collect_amount >= $badges['setting']->author_collect_level_one && $badges['setting']->author_collect_level_two > $collect_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_collect_level_one_icon); ?>" border="0" class="other-badges" title="Collector Level 1: Has collected <?php echo e($badges['setting']->author_collect_level_one); ?>+ items on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($collect_amount >= $badges['setting']->author_collect_level_two && $badges['setting']->author_collect_level_three > $collect_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_collect_level_two_icon); ?>" border="0" class="other-badges" title="Collector Level 2: Has collected <?php echo e($badges['setting']->author_collect_level_two); ?>+ items on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($collect_amount >= $badges['setting']->author_collect_level_three && $badges['setting']->author_collect_level_four > $collect_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_collect_level_three_icon); ?>" border="0" class="other-badges" title="Collector Level 3: Has collected <?php echo e($badges['setting']->author_collect_level_three); ?>+ items on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($collect_amount >= $badges['setting']->author_collect_level_four && $badges['setting']->author_collect_level_five > $collect_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_collect_level_four_icon); ?>" border="0" class="other-badges" title="Collector Level 4: Has collected <?php echo e($badges['setting']->author_collect_level_four); ?>+ items on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($collect_amount >= $badges['setting']->author_collect_level_five && $badges['setting']->author_collect_level_six > $collect_amount): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_collect_level_five_icon); ?>" border="0" class="other-badges" title="Collector Level 5: Has collected <?php echo e($badges['setting']->author_collect_level_five); ?>+ items on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($collect_amount >= $badges['setting']->author_collect_level_six): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_collect_level_six_icon); ?>" border="0" class="other-badges" title="Collector Level 6: Has collected <?php echo e($badges['setting']->author_collect_level_six); ?>+ items on <?php echo e($allsettings->site_title); ?>">
                                        </li>
                                        <?php endif; ?>
                                        
                                        
                                        <?php if($referral_count >= $badges['setting']->author_referral_level_one && $badges['setting']->author_referral_level_two > $referral_count): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_referral_level_one_icon); ?>" border="0" class="other-badges" title="Affiliate Level 1: Has referred <?php echo e($badges['setting']->author_referral_level_one); ?>+ members">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($referral_count >= $badges['setting']->author_referral_level_two && $badges['setting']->author_referral_level_three > $referral_count): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_referral_level_two_icon); ?>" border="0" class="other-badges" title="Affiliate Level 2: Has referred <?php echo e($badges['setting']->author_referral_level_two); ?>+ members">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($referral_count >= $badges['setting']->author_referral_level_three && $badges['setting']->author_referral_level_four > $referral_count): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_referral_level_three_icon); ?>" border="0" class="other-badges" title="Affiliate Level 3: Has referred <?php echo e($badges['setting']->author_referral_level_three); ?>+ members">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($referral_count >= $badges['setting']->author_referral_level_four && $badges['setting']->author_referral_level_five > $referral_count): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_referral_level_four_icon); ?>" border="0" class="other-badges" title="Affiliate Level 4: Has referred <?php echo e($badges['setting']->author_referral_level_four); ?>+ members">
                                        </li>
                                        <?php endif; ?>
                                        
                                        <?php if($referral_count >= $badges['setting']->author_referral_level_five && $badges['setting']->author_referral_level_six > $referral_count): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_referral_level_five_icon); ?>" border="0" class="other-badges" title="Affiliate Level 5: Has referred <?php echo e($badges['setting']->author_referral_level_five); ?>+ members">
                                        </li>
                                        <?php endif; ?>
                                        
                                        
                                        <?php if($referral_count >= $badges['setting']->author_referral_level_six): ?> 
                                        <li>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->author_referral_level_six_icon); ?>" border="0" class="other-badges" title="Affiliate Level 6: Has referred <?php echo e($badges['setting']->author_referral_level_six); ?>+ members">
                                        </li>
                                        <?php endif; ?>
                                        
                                    </ul>
                                </div>
                                <!-- end /.social -->

                                <div class="author-btn">
                                    <a href="<?php echo e(url('/user')); ?>/<?php echo e($item['item']->username); ?>" class="btn btn--sm theme-button"><?php echo e(Helper::translation(3078,$translate)); ?></a>
                                    
                                </div>
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->


                        </div>
                        
                        

                        <div class="sidebar-card card--metadata">
                            <ul class="data">
                                <li>
                                    <p>
                                        <span class="lnr lnr-cart pcolor theme-color"></span><?php echo e(Helper::translation(3039,$translate)); ?></p>
                                    <span><?php echo e($item['item']->item_sold); ?></span>
                                </li>
                                <li>
                                    <p>
                                        <span class="lnr lnr-heart scolor theme-color"></span><?php echo e(Helper::translation(2989,$translate)); ?></p>
                                    <span><?php echo e($item['item']->item_liked); ?></span>
                                </li>
                                <li>
                                    <p>
                                        <span class="lnr lnr-bubble mcolor3 theme-color"></span><?php echo e(Helper::translation(3054,$translate)); ?></p>
                                    <span><?php echo e($comment_count); ?></span>
                                </li>
                                
                                <li>
                                <div class="rating product--rating" align="center"> 
                                
                                <ul>
                                    <?php if($getreview == 0): ?>
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
                                    <?php else: ?>
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
                                    
                                    
                                    <?php endif; ?>
                                </ul>
                                <span class="rating__count">( <?php echo e($getreview); ?> <?php echo e(Helper::translation(3080,$translate)); ?> )</span>
                            </div>
                                </li>
                                
                            </ul>


                            
                            <!-- end /.rating -->
                        </div>
                        
                        
                        
                        

                        <div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4><?php echo e(Helper::translation(3081,$translate)); ?></h4>
                            </div>

                            <ul class="infos">
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(3082,$translate)); ?></p>
                                    <p class="info"><?php echo e(date("d F Y", strtotime($item['item']->created_item))); ?></p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(3083,$translate)); ?></p>
                                    <p class="info"><?php echo e(date("d F Y", strtotime($item['item']->updated_item))); ?> </p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(3084,$translate)); ?></p>
                                    <p class="info"><?php echo e($category_name); ?></p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2937,$translate)); ?></p>
                                    <p class="info"><?php echo e(str_replace('-',' ',$item['item']->item_type)); ?></p>
                                </li>
                                
                                <?php if($item['item']->item_type == 'scripts'): ?>
                               <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2953,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->compatible_browsers); ?></p>
                                </li>
                                
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2954,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->package_includes); ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if($item['item']->item_type == 'themes'): ?>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2954,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->package_includes_two); ?></p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2955,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->columns); ?></p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2957,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->layout); ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if($item['item']->item_type == 'plugins'): ?>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2953,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->compatible_browsers); ?></p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2954,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->package_includes); ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if($item['item']->item_type == 'print' or $item['item']->item_type == 'graphics'): ?>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2954,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->package_includes_three); ?></p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2959,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->layered); ?></p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(3086,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->cs_version); ?></p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2962,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->print_dimensions); ?></p>
                                </li>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2964,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->pixel_dimensions); ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if($item['item']->item_type == 'mobile-apps'): ?>
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2954,$translate)); ?></p>
                                    <p class="info"><?php echo e($item['item']->package_includes_four); ?></p>
                                </li>
                                <?php endif; ?>
                                
                                <li>
                                    <p class="data-label"><?php echo e(Helper::translation(2974,$translate)); ?></p>
                                    <p class="info">
                                    
                                    <?php $__currentLoopData = $item_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tags): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(url('/tag')); ?>/item/<?php echo e(strtolower(str_replace(' ','-',$tags))); ?>" class="item-tags"><?php echo e($tags); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.aside -->

                        
                        <!-- end /.author-card -->
                    </aside>
                    </form>
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

    <!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
    <section class="more_product_area section--padding">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1><?php echo e(Helper::translation(3087,$translate)); ?>

                            <span class="highlighted">by <?php echo e($item['item']->username); ?></span>
                        </h1>
                    </div>
                </div>
                <!-- end /.col-md-12 -->

                
                <?php $__currentLoopData = $itemData['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
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
                                <li class="product_cat">
                                     <a href="<?php echo e(URL::to('/shop')); ?>/item-type/<?php echo e($item->item_type); ?>" class="theme-color">
                                            <span class="lnr lnr-book"></span><?php echo e(str_replace('-',' ',$item->item_type)); ?></a>
                                </li>
                            </ul>

                            <p><?php echo e(substr($item->item_shortdesc,0,100).'...'); ?></p>
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
                
                
                
                <!-- end /.col-lg-4 col-md-6 -->

            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
   <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
   <?php echo $__env->make('javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html><?php /**PATH C:\Users\17329\Desktop\robertfromri\feberr\resources\views/item.blade.php ENDPATH**/ ?>
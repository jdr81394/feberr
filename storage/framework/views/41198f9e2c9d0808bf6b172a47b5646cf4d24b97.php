<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(__('Reset Password')); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload home1 mutlti-vendor">

    
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="<?php echo e(URL::to('/')); ?>"><?php echo e(__('Home')); ?></a>
                            </li>
                            <li class="active">
                                <a href="<?php echo e(URL::to('/login')); ?>"><?php echo e(__('Reset Password')); ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo e(__('Reset Password')); ?></h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    <section class="login_area section--padding2">
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
                <div class="col-lg-6 offset-lg-3">
                    <form method="POST" action="<?php echo e(route('reset')); ?>">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="user_token" value="<?php echo e($token); ?>">
                        <div class="cardify login">
                           

                            <div class="login--form">
                                
                                <div class="form-group">
                                    <label for="pass"><?php echo e(__('Password')); ?></label>
                                                                   
                                <input id="password" type="password" class="text_field <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="pass"><?php echo e(__('Confirm Password')); ?></label>
                               <input id="password-confirm" type="password" class="text_field" name="password_confirmation" required autocomplete="new-password">                                    
                               
                                
                                </div>
                                
                                

                                

                                <button class="btn btn--md theme-button" type="submit"><?php echo e(__('Reset Password')); ?></button>
                            
                                
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    
 
    
   <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
   <?php echo $__env->make('javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html>
<?php /**PATH D:\xampp\htdocs\feberr\resources\views/reset.blade.php ENDPATH**/ ?>
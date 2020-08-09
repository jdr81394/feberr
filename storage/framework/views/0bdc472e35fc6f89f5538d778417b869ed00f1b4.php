<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(3233,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo NoCaptcha::renderJs(); ?>

</head>

<body class="preload signup-page">

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
                                <a href="<?php echo e(URL::to('/register')); ?>"><?php echo e(Helper::translation(3233,$translate)); ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo e(Helper::translation(3233,$translate)); ?></h1>
                </div>
               
            </div>
            
        </div>
        
    </section>
    
    
    <section class="signup_area section--padding2">
        <div class="container">
        <div>
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
                    <form method="POST" action="<?php echo e(route('register')); ?>" id="item_form">
                    <?php echo csrf_field(); ?>
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3><?php echo e(Helper::translation(3234,$translate)); ?></h3>
                                <p><?php echo e(Helper::translation(3236,$translate)); ?>

                                </p>
                            </div>
                            

                            <div class="login--form">

                                <div class="form-group row">
                                   <div class="col-sm-6">
                                    <label for="urname"><?php echo e(Helper::translation(3237,$translate)); ?></label>
                                   <input id="name" type="text" class="text_field <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" placeholder="<?php echo e(Helper::translation(3238,$translate)); ?>" value="<?php echo e(old('name')); ?>" data-bvalidator="required" autocomplete="name" autofocus>
                                   <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                   <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                   </div>
                                   <div class="col-sm-6">
                                   <label for="user_name"><?php echo e(Helper::translation(3111,$translate)); ?></label>
                                    <input id="username" type="text" name="username" class="text_field" placeholder="<?php echo e(Helper::translation(3239,$translate)); ?>" data-bvalidator="required">
                                   </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                      <label for="email_ad"><?php echo e(Helper::translation(3240,$translate)); ?></label>
                                   <input id="email" type="email" class="text_field <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(Helper::translation(3241,$translate)); ?>"  autocomplete="email" data-bvalidator="email,required">
                                   <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                   <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-sm-6">
                                     <label for="password"><?php echo e(Helper::translation(3113,$translate)); ?></label>
                                        <input id="password" type="password" class="text_field <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" placeholder="<?php echo e(Helper::translation(3242,$translate)); ?>" autocomplete="new-password" data-bvalidator="required">
    
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
                                </div>
                                

                                

                                <div class="form-group row">
                                   <div class="col-sm-6">
                                    <label for="con_pass"> <?php echo e(Helper::translation(3114,$translate)); ?></label>
                                   
                                    <input id="password-confirm" type="password" class="text_field" name="password_confirmation" placeholder="<?php echo e(Helper::translation(3243,$translate)); ?>" data-bvalidator="equal[password],required" autocomplete="new-password">
                                    </div>
                                    <div class="col-sm-6">
                                      <label for="email_ad"><?php echo e(Helper::translation(4827,$translate)); ?> <span class="required">*</span></label>
                                       <select id="user_type" class="text_field" name="user_type" data-bvalidator="required">
                                          <option value=""></option>
                                          <option value="<?php echo e($encrypter->encrypt('customer')); ?>"><?php echo e(Helper::translation(4830,$translate)); ?></option>
                                          <option value="<?php echo e($encrypter->encrypt('vendor')); ?>"><?php echo e(Helper::translation(3142,$translate)); ?></option>
                                       </select>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group<?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">
                                    <label for="con_pass"> <?php echo e(Helper::translation(3244,$translate)); ?></label>
                                   
                                    <?php echo app('captcha')->display(); ?>

                                <?php if($errors->has('g-recaptcha-response')): ?>
                                    <span class="help-block">
                                        <strong class="red"><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                </div>
                                
                                <button class="btn btn--md register_btn theme-button" type="submit"><?php echo e(Helper::translation(3233,$translate)); ?></button>

                                <div class="login_assist">
                                    <p><?php echo e(Helper::translation(3245,$translate)); ?>

                                        <a href="<?php echo e(URL::to('/login')); ?>" class="theme-color"><?php echo e(Helper::translation(3225,$translate)); ?></a>
                                    </p>
                                </div>
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
<?php /**PATH C:\Users\17329\Desktop\robertfromri\feberr\resources\views/auth/register.blade.php ENDPATH**/ ?>
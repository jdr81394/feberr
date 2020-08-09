<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(4782,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload term-condition-page">

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
                                <a href="<?php echo e(URL::to('/order-confirm')); ?>"><?php echo e(Helper::translation(4782,$translate)); ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo e(Helper::translation(4782,$translate)); ?></h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
    <section class="term_condition_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                    <div class="cardify term_modules">
                        <div class="row justify-content-center pb-2 mb-2 mt-5 pt-5">
                        <div class="col-md-6 mx-auto">
                        <h3><?php echo e(Helper::translation(4783,$translate)); ?> <span>:</span> <?php echo e($allsettings->site_currency); ?><?php echo e($final_amount); ?></h3>
                        </div>
                        </div> 
                        <div class="row justify-content-center pb-2 mb-2 mt-2 pt-2">
                <div class="col-md-6 mx-auto">
                    <div class="card bg-light mb-3">
                <div class="card-body">
                <form action="<?php echo e(route('2checkout')); ?>" class="needs-validation" id="subscribe_form" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                   <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label class="info-title black" for="exampleInputName"><?php echo e(Helper::translation(4784,$translate)); ?> <span class="red">*</span></label>
                                        <input id="ccNo" type="text" size="20" value="" class="form-control" autocomplete="off" data-bvalidator="required" placeholder="<?php echo e(Helper::translation(4785,$translate)); ?>" />
                                    </div>
                                </div>
                                
                            </div>
                       <div class="row">
                       <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="info-title black" for="exampleInputName"><?php echo e(Helper::translation(4786,$translate)); ?> <span class="red">*</span></label>
                                        <input type="number" size="2" id="expMonth" class="form-control" data-bvalidator="required,maxlen[2]" placeholder="<?php echo e(Helper::translation(4790,$translate)); ?>" />
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="info-title black" for="exampleInputName"><?php echo e(Helper::translation(4787,$translate)); ?> <span class="red">*</span></label>
                                        <input type="number" size="4" id="expYear" class="form-control" data-bvalidator="required,maxlen[4]" placeholder="<?php echo e(Helper::translation(4791,$translate)); ?>" />
                                    </div>
                                </div>
                                </div>     
                     <div class="row">
                       <div class="col-sm-12">
                                    <div class="form-group">
                                    <label class="info-title black" for="exampleInputName"><?php echo e(Helper::translation(4788,$translate)); ?> <span class="red">*</span></label>
                                        <input id="cvv" size="4" type="number" class="form-control" value="" autocomplete="off" data-bvalidator="required,maxlen[4]" />
                                    </div>
                                </div>
                                </div>
                                <input type="hidden" name="two_checkout_private" value="<?php echo e($two_checkout_private); ?>">
                                <input type="hidden" name="two_checkout_account" value="<?php echo e($two_checkout_account); ?>">
                                <input type="hidden" name="two_checkout_mode" value="<?php echo e($two_checkout_mode); ?>">
                                <input type="hidden" name="purchase_token" value="<?php echo e($purchase_token); ?>">
                                <input type="hidden" name="token" value="<?php echo e($token); ?>">
                                <input type="hidden" name="site_currency" value="<?php echo e($site_currency); ?>">
                                <input type="hidden" name="amount" value="<?php echo e(base64_encode($final_amount)); ?>">
                                <input type="hidden" name="product_names" value="<?php echo e($item_names_data); ?>">
                                <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                                <input type="hidden" name="user_name" value="<?php echo e(Auth::user()->name); ?>">
                                <input type="hidden" name="user_email" value="<?php echo e(Auth::user()->email); ?>">
                                <div class="mx-auto">
                        <button type="submit" class="btn btn--sm theme-button"><?php echo e(Helper::translation(4789,$translate)); ?></button>
                        </div>
                   </form>
                   </div>
                   </div>
                   </div>
                   </div>
                        
                        <!-- end /.term -->
                    </div>
                    <!-- end /.term_modules -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
   <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
   <?php echo $__env->make('javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--- 2Checkout --->
<script type="text/javascript" src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
<script>
            
			
			
            var successCallback = function(data) {
                var myForm = document.getElementById('subscribe_form');

                
                myForm.token.value = data.response.token.token;

                
                myForm.submit();
            };

           
            var errorCallback = function(data) {
                if (data.errorCode === 200) {
                    tokenRequest();
                } else {
                    alert(data.errorMsg);
                }
            };

            var tokenRequest = function() {
                
                var args = {
                    sellerId: "<?php echo e($two_checkout_account); ?>",
                    publishableKey: "<?php echo e($two_checkout_publishable); ?>",
                    ccNo: $("#ccNo").val(),
                    cvv: $("#cvv").val(),
                    expMonth: $("#expMonth").val(),
                    expYear: $("#expYear").val()
					
                };

               
                TCO.requestToken(successCallback, errorCallback, args);
            };
			
			

            $(function() {
			
			  
                
                TCO.loadPubKey('sandbox');

                $("#subscribe_form").submit(function(e) {
                    
                    tokenRequest();

                    
                    return false;
                });
				
				
				
				
            });
			
			
			
 </script>
<!-- 2Checkout --->    
</body>

</html><?php /**PATH D:\xampp\htdocs\feberr\resources\views/order-confirm.blade.php ENDPATH**/ ?>
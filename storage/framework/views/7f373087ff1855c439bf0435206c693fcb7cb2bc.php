<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    
    <?php echo $__env->make('admin.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    
    <?php echo $__env->make('admin.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        
                       <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                       

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Item</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    
                </div>
            </div>
        </div>
        
        <?php if(session('success')): ?>
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="col-sm-12">
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('error')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
<?php endif; ?>


<?php if($errors->any()): ?>
    <div class="col-sm-12">
     <div class="alert  alert-danger alert-dismissible fade show" role="alert">
     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
         <?php echo e($error); ?>

      
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
     </div>
    </div>   
 <?php endif; ?>
       
       <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                       
                        
                        
                      
                        <div class="card">
                           <?php if($demo_mode == 'on'): ?>
                           <?php echo $__env->make('admin.demo-mode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           <?php else: ?>
                           <form action="<?php echo e(route('admin.edit-item')); ?>" class="setting_form" id="item_form" method="post" enctype="multipart/form-data">
                           <?php echo e(csrf_field()); ?>

                           <?php endif; ?>
                          
                           
                             <div class="col-md-6">
                           
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                       
                                        <div class="form-group">
                                                <label for="name" class="control-label mb-1">Item Type <span class="require">*</span></label>
                                               
                                                <select name="item_type" id="item_type" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                   <?php $__currentLoopData = $getWell['type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <option value="<?php echo e($value->item_type_slug); ?>" <?php if($edit['item']->item_type == $value->item_type_slug): ?> selected="selected" <?php endif; ?>><?php echo e($value->item_type_name); ?></option>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                </select>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Item Name<span class="require">*</span></label>
                                               <input type="text" id="item_name" name="item_name" class="form-control" value="<?php echo e($edit['item']->item_name); ?>" data-bvalidator="required,maxlen[100]"> 
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Short Description<span class="require">*</span></label>
                                                <textarea name="item_shortdesc" rows="6"  class="form-control" data-bvalidator="required"><?php echo e($edit['item']->item_shortdesc); ?></textarea>
                                            
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Description<span class="require">*</span></label>
                                                
                                            <textarea name="item_desc" id="summary-ckeditor" rows="6"  class="form-control" data-bvalidator="required"><?php echo e(html_entity_decode($edit['item']->item_desc)); ?></textarea>
                                            </div>
                                                
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Thumbnail <span class="require">*</span> </label><br/>
                                                <input type="file" id="thumbnail" name="item_thumbnail" class="files" <?php if($edit['item']->item_thumbnail==''): ?> data-bvalidator="required,extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" <?php else: ?> data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" <?php endif; ?>><small>(Size : 80x80px)</small><br/>
                                        <?php if($edit['item']->item_thumbnail!=''): ?>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($edit['item']->item_thumbnail); ?>" alt="<?php echo e($edit['item']->item_name); ?>" class="item-thumb">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($edit['item']->item_name); ?>" class="item-thumb">
                                        <?php endif; ?>
                                           
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Preview <span class="require">*</span> </label><br/>
                                                <input type="file" id="item_preview" name="item_preview" class="files" <?php if($edit['item']->item_preview==''): ?> data-bvalidator="required,extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" <?php else: ?> data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" <?php endif; ?>><small>(Size : 361x230px)</small><br/>
                                        <?php if($edit['item']->item_preview!=''): ?>
                                        <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($edit['item']->item_preview); ?>" alt="<?php echo e($edit['item']->item_name); ?>" class="item-thumb">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($edit['item']->item_name); ?>" class="item-thumb">
                                        <?php endif; ?>
                                           
                                            </div>
                                            
                                            
                                            
                                             <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Main File  <span class="require">*</span> </label><br/>
                                                <input type="file" id="main_file" name="item_file" class="files" <?php if($edit['item']->item_file==''): ?> data-bvalidator="required,extension[zip]" data-bvalidator-msg="Please select file of type .zip only" <?php else: ?> data-bvalidator="extension[zip]" data-bvalidator-msg="Please select file of type .zip only" <?php endif; ?>><small>(ZIP - All files)</small>
                                                
                                                <?php if($allsettings->site_s3_storage == 1): ?>
                                                    <?php $fileurl = Storage::disk('s3')->url($edit['item']->item_file); ?>
                                                    <br/><a href="<?php echo e($fileurl); ?>" class="blue-color" download><?php echo e($edit['item']->item_file); ?></a>
                                                    <?php else: ?>
                                                    <br/><?php if($edit['item']->item_file!=''): ?><a href="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($edit['item']->item_file); ?>" class="blue-color" download><?php echo e($edit['item']->item_file); ?></a><?php endif; ?>
                                                    <?php endif; ?>
                                                
                                           
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Screenshots (multiple) </label><br/>
                                                <input type="file" id="item_screenshot" name="item_screenshot[]" class="files" data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" multiple><small>(Size : 750x430px)</small><br/><br/><?php $__currentLoopData = $item_image['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <div class="item-img"><img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item->item_image); ?>" alt="<?php echo e($item->item_image); ?>" class="item-thumb">
                                                    <a href="<?php echo e(url('/admin/edit-item')); ?>/dropimg/<?php echo e(base64_encode($item->itm_id)); ?>" onClick="return confirm('Are you sure you want to delete?');" class="drop-icon"><span class="ti-trash drop-icon"></span></a>
                                                    </div>
                                                    
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           <div class="clearfix"></div>
                                            </div> 
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Youtube Video URL </label>
                                                
                                                <input type="text" id="video_url" name="video_url" class="form-control" value="<?php echo e($edit['item']->video_url); ?>" data-bvalidator="url">
                                        <small>(example : https://www.youtube.com/watch?v=C0DPdy98e4c)</small>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="name" class="control-label mb-1">Apply For Free Download?<span class="require">*</span></label>
                                               <select name="free_download" id="free_download" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                    <option value="1" <?php if($edit['item']->free_download == 1): ?> selected="selected" <?php endif; ?>>Yes</option>
                                                    <option value="0" <?php if($edit['item']->free_download == 0): ?> selected="selected" <?php endif; ?>>No</option>
                                                </select>
                                            </div>
                                           
                                           
                                           <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Tags<span class="require">*</span></label>
                                                <textarea name="item_tags" id="item_tags" class="form-control"><?php echo e($edit['item']->item_tags); ?></textarea>
                                                <small>(Maximum of 15 keywords. Keywords should all be in lowercase and separated by commas. ex: shopping, blog, forum....ect)</small>
                                            
                                            </div> 
                                            
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Feature Update<span class="require">*</span></label>
                                                <select name="future_update" id="future_update" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                    <option value="1" <?php if($edit['item']->future_update == 1): ?> selected="selected" <?php endif; ?>>Yes</option>
                                                    <option value="0" <?php if($edit['item']->future_update == 0): ?> selected="selected" <?php endif; ?>>No</option>
                                                </select>
                                               
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Item Support<span class="require">*</span></label>
                                                <select name="item_support" id="item_support" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                    <option value="1" <?php if($edit['item']->item_support == 1): ?> selected="selected" <?php endif; ?>>Yes</option>
                                                    <option value="0" <?php if($edit['item']->item_support == 0): ?> selected="selected" <?php endif; ?>>No</option>
                                                </select>
                                               
                                            </div> 
                                            
                                           
                                    </div>
                                </div>

                            </div>
                            </div>
                             
                            <div class="col-md-6">
                           
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                       
                                        <div class="form-group">
                                                <label for="name" class="control-label mb-1">Select Category <span class="require">*</span></label>
                                               <select name="item_category" id="item_category" class="form-control" data-bvalidator="required">
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $categories['menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <option value="category_<?php echo e($menu->cat_id); ?>" <?php if($cat_name == 'category'): ?> <?php if($menu->cat_id == $cat_id): ?> selected="selected" <?php endif; ?> <?php endif; ?>><?php echo e($menu->category_name); ?></option>
                                                <?php $__currentLoopData = $menu->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="subcategory_<?php echo e($sub_category->subcat_id); ?>" <?php if($cat_name == 'subcategory'): ?> <?php if($sub_category->subcat_id == $cat_id): ?> selected="selected" <?php endif; ?> <?php endif; ?>> - <?php echo e($sub_category->subcategory_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                                
                                            </div>
                                            
                                            
                                             <div id="scripts1" <?php if($edit['item']->item_type == 'scripts' or $edit['item']->item_type == 'plugins'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Compatible Browsers <span class="require">*</span></label>
                                               <select id="compatible_browsers" name="compatible_browsers[]" class="form-control" data-bvalidator="required" multiple="multiple">
                                                <?php $__currentLoopData = $compatible_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compatible): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($compatible); ?>" <?php if(in_array($compatible,$checkbrowser)): ?> selected="selected" <?php endif; ?>><?php echo e($compatible); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                               
                                            </div>
                                            
                                            
                                            
                                            <div id="scripts2" <?php if($edit['item']->item_type == 'scripts' or $edit['item']->item_type == 'plugins'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Package Includes <span class="require">*</span></label>
                                               
                                               <select id="package_includes" name="package_includes[]" class="form-control" data-bvalidator="required" multiple="multiple">
                                                <?php $__currentLoopData = $package_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($package); ?>" <?php if(in_array($package,$checkpackage)): ?> selected="selected" <?php endif; ?>><?php echo e($package); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            
                                            
                                            <div id="themes1" <?php if($edit['item']->item_type == 'themes'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Package Includes <span class="require">*</span></label>
                                               
                                                                                              
                                                <select id="package_includes_two" name="package_includes_two[]" class="form-control" data-bvalidator="required" multiple="multiple">
                                                <?php $__currentLoopData = $package_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($package); ?>" <?php if(in_array($package,$checkpackagetwo)): ?> selected="selected" <?php endif; ?>><?php echo e($package); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            
                                            
                                            <div id="themes2" <?php if($edit['item']->item_type == 'themes'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Columns <span class="require">*</span></label>
                                               <select name="columns" id="columns" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose Columns</option>
                                                        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($column); ?>" <?php if($edit['item']->columns == $column): ?> selected="selected" <?php endif; ?>><?php echo e($column); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                
                                            </div>
                                            
                                            
                                            <div id="themes3" <?php if($edit['item']->item_type == 'themes'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Layout <span class="require">*</span></label>
                                                <select name="layout" id="layout" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose Layout</option>
                                                        <?php $__currentLoopData = $layouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($layout); ?>" <?php if($edit['item']->layout == $layout): ?> selected="selected" <?php endif; ?>><?php echo e($layout); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                               
                                                
                                            </div>
                                            
                                            
                                            <div id="print1" <?php if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Package Includes <span class="require">*</span></label>
                                                
                                               <select id="package_includes_three" name="package_includes_three[]" class="form-control" multiple="multiple" data-bvalidator="required">
                                                <?php $__currentLoopData = $package_three; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($package); ?>" <?php if(in_array($package,$checkthree)): ?> selected="selected" <?php endif; ?>><?php echo e($package); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                
                                            </div>
                                            
                                            <div id="print2" <?php if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Layered? <span class="require">*</span></label>
                                                <select name="layered" id="layered" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $layered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($layer); ?>" <?php if($edit['item']->layered == $layer): ?> selected="selected" <?php endif; ?>><?php echo e($layer); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                               
                                                
                                            </div>
                                            
                                             <div id="print3" <?php if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Minimum Adobe CS Version <span class="require">*</span></label>
                                                <select name="cs_version" id="cs_version" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $adobe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adobes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($adobes); ?>" <?php if($edit['item']->cs_version == $adobes): ?> selected="selected" <?php endif; ?>><?php echo e($adobes); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                               
                                                
                                            </div>
                                             
                                            <div id="print4" <?php if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Print Dimensions <span class="require">*</span></label>
                                                <input type="text" id="print_dimensions" name="print_dimensions" class="form-control" value="<?php echo e($edit['item']->print_dimensions); ?>" data-bvalidator="required">
                                               <small>(Print dimensions in Inches for printable items, width x height. E.g. 3.5x2.5, 8.5x11)</small>
                                                
                                            </div> 
                                            
                                            <div id="print5" <?php if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Pixel Dimensions <span class="require">*</span></label>
                                                <input type="text" id="pixel_dimensions" name="pixel_dimensions" class="form-control" value="<?php echo e($edit['item']->pixel_dimensions); ?>" data-bvalidator="required">
                                              <small>(Image dimensions in Pixels for screen-based items. E.g. 300x600, 50x50)</small>
                                                
                                            </div> 
                                            
                                             <div id="mobile1" <?php if($edit['item']->item_type == 'mobile-apps'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Package Includes<span class="require">*</span></label>
                                                <select id="package_includes_four" name="package_includes_four[]" class="form-control" multiple="multiple" data-bvalidator="required">
                                                <?php $__currentLoopData = $package_four; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($package); ?>" <?php if(in_array($package,$checkfour)): ?> selected="selected" <?php endif; ?>><?php echo e($package); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            
                                            <div id="demourl" <?php if($edit['item']->item_type == 'scripts' or $edit['item']->item_type == 'themes' or $edit['item']->item_type == 'plugins' or $edit['item']->item_type == 'mobile-apps'): ?> class="form-group force-block" <?php else: ?> class="form-group force-none" <?php endif; ?>>
                                                <label for="name" class="control-label mb-1">Demo URL <span class="require">*</span></label>
                                                <input type="text" id="demo_url" name="demo_url" class="form-control" value="<?php echo e($edit['item']->demo_url); ?>" data-bvalidator="url">
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Regular License (6 months support) </label>
                                                <input type="text" id="regular_price" name="regular_price"  class="form-control" value="<?php echo e($edit['item']->regular_price); ?>" data-bvalidator="digit,min[1],required">
                                                (<?php echo e($allsettings->site_currency); ?>)
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Extended License (12 months support) </label>
                                                
                                                <input type="text" id="extended_price" name="extended_price" class="form-control" value="<?php if($edit['item']->extended_price==0): ?> <?php else: ?> <?php echo e($edit['item']->extended_price); ?> <?php endif; ?>" data-bvalidator="digit,min[1]">
                                                (<?php echo e($allsettings->site_currency); ?>)
                                            </div> 
                                            
                                            <?php if($edit['item']->item_flash_request == 1): ?>
                                            <div class="form-group">
                                                <label for="site_title" class="control-label mb-1"> Flash Sale <span class="require">*</span></label>
                                                <select name="item_flash" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                <option value="1" <?php if($edit['item']->item_flash == 1): ?> selected="selected" <?php endif; ?>>Active</option>
                                                <option value="0" <?php if($edit['item']->item_flash == 0): ?> selected="selected" <?php endif; ?>>InActive</option>
                                                
                                                </select>
                                                
                                            </div> 
                                            <?php else: ?>
                                            <input type="hidden" name="item_flash" value="0">
                                            <?php endif; ?>
                                            
                                                                                                                          
                                            
                                            <div class="form-group">
                                                <label for="site_title" class="control-label mb-1"> Status <span class="require">*</span></label>
                                                <select name="item_status" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                <option value="1" <?php if($edit['item']->item_status == 1): ?> selected="selected" <?php endif; ?>>Approved</option>
                                                <option value="0" <?php if($edit['item']->item_status == 0): ?> selected="selected" <?php endif; ?>>UnApproved</option>
                                                <option value="2" <?php if($edit['item']->item_status == 2): ?> selected="selected" <?php endif; ?>>Rejected</option>
                                                </select>
                                                
                                            </div>   
                                        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">    
                                        <input type="hidden" name="save_file" value="<?php echo e($edit['item']->item_file); ?>">
                                        <input type="hidden" name="save_thumbnail" value="<?php echo e($edit['item']->item_thumbnail); ?>">
                                        <input type="hidden" name="save_preview" value="<?php echo e($edit['item']->item_preview); ?>">
                                        <input type="hidden" name="save_extended_price" value="<?php echo e($edit['item']->extended_price); ?>">
                                        <input type="hidden" name="item_token" value="<?php echo e($edit['item']->item_token); ?>">
                                          
                                           
                                    </div>
                                </div>

                            </div>
                            </div> 
                             
                             <div class="col-md-12 no-padding">
                             <div class="card-footer">
                                 <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                 <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset </button>
                             </div>
                             
                             </div>
                             
                            
                            </form>
                            
                                                    
                                                    
                                                 
                            
                        </div> 

                     
                    
                    
                    </div>
                    

                </div>
            </div><!-- .animated -->
        </div>
        
        
        <!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


   <?php echo $__env->make('admin.javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html>
<?php /**PATH D:\xampp\htdocs\feberr\resources\views/admin/edit-item.blade.php ENDPATH**/ ?>
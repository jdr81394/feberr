@include('version')
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    
    @include('admin.stylesheet')
</head>

<body>
    
    @include('admin.navigation')

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        
                       @include('admin.header')
                       

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Upload Item</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    
                </div>
            </div>
        </div>
        
        @if (session('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="col-sm-12">
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif


@if ($errors->any())
    <div class="col-sm-12">
     <div class="alert  alert-danger alert-dismissible fade show" role="alert">
     @foreach ($errors->all() as $error)
      
         {{$error}}
      
     @endforeach
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
     </div>
    </div>   
 @endif
 
      <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                       
                        
                        
                      
                        <div class="card">
                           @if($demo_mode == 'on')
                           @include('admin.demo-mode')
                           @else
                        <form action="{{ route('admin.upload-item') }}" class="setting_form" id="item_form" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @endif
                          
                           
                             <div class="col-md-6">
                           
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                       
                                        <div class="form-group">
                                                <label for="name" class="control-label mb-1">Item Type <span class="require">*</span></label>
                                               
                                                <select name="item_type" id="item_type" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                   @foreach($getWell['type'] as $value) 
                                                    <option value="{{ $value->item_type_slug }}">{{ $value->item_type_name }}</option>
                                                   @endforeach  
                                                </select>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Item Name<span class="require">*</span></label>
                                               <input type="text" id="item_name" name="item_name" class="form-control" data-bvalidator="required,maxlen[100]"> 
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Short Description<span class="require">*</span></label>
                                                <textarea name="item_shortdesc" rows="6"  class="form-control" data-bvalidator="required"></textarea>
                                            
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Description<span class="require">*</span></label>
                                                
                                            <textarea name="item_desc" id="summary-ckeditor" rows="6"  class="form-control" data-bvalidator="required"></textarea>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Thumbnail <span class="require">*</span> </label><br/>
                                                <input type="file" id="item_thumbnail" name="item_thumbnail" class="files" data-bvalidator="required,extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg"><small>(Size : 80x80px)</small>
                                           
                                            </div>
                                                
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Preview <span class="require">*</span> </label><br/>
                                                <input type="file" id="item_preview" name="item_preview" class="files" data-bvalidator="required,extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg"><small>(Size : 361x230px)</small>
                                           
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Main File  <span class="require">*</span> </label><br/>
                                                <input type="file" id="main_file" name="item_file" class="files" data-bvalidator="required,extension[zip]" data-bvalidator-msg="Please select file of type .zip only"><small>(ZIP - All files)</small>
                                           
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Screenshots (multiple)  </label><br/>
                                                <input type="file" id="item_screenshot" name="item_screenshot[]" class="files" data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" multiple><small>(Size : 750x430px)</small>
                                           
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Youtube Video URL </label>
                                                
                                                <input type="text" id="video_url" name="video_url" class="form-control" data-bvalidator="url">
                                        <small>(example : https://www.youtube.com/watch?v=C0DPdy98e4c)</small>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="name" class="control-label mb-1">Apply For Free Download?<span class="require">*</span></label>
                                               <select name="free_download" id="free_download" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                           
                                           
                                           <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Tags<span class="require">*</span></label>
                                                <textarea name="item_tags" id="item_tags" class="form-control"></textarea>
                                                <small>(Maximum of 15 keywords. Keywords should all be in lowercase and separated by commas. ex: shopping, blog, forum....ect)</small>
                                            
                                            </div> 
                                            
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Feature Update<span class="require">*</span></label>
                                                <select name="future_update" id="future_update" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                               
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Item Support<span class="require">*</span></label>
                                                <select name="item_support" id="item_support" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
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
                                            @foreach($categories['menu'] as $menu)
                                                
                                                <option value="category_{{ $menu->cat_id }}">{{ $menu->category_name }}</option>
                                                @foreach($menu->subcategory as $sub_category)
                                                <option value="subcategory_{{$sub_category->subcat_id}}"> - {{ $sub_category->subcategory_name }}</option>
                                                @endforeach  
                                            @endforeach
                                            </select>
                                                
                                            </div>
                                            
                                            
                                             <div class="form-group" id="scripts1">
                                                <label for="name" class="control-label mb-1">Compatible Browsers <span class="require">*</span></label>
                                               <select id="compatible_browsers" name="compatible_browsers[]" class="form-control" data-bvalidator="required" multiple="multiple">
                                                @foreach($compatible_one as $compatible)
                                                <option value="{{ $compatible }}">{{ $compatible }}</option>
                                                @endforeach
                                                </select>
                                               
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group" id="scripts2">
                                                <label for="name" class="control-label mb-1">Package Includes <span class="require">*</span></label>
                                               
                                               <select id="package_includes" name="package_includes[]" class="form-control" data-bvalidator="required" multiple="multiple">
                                                @foreach($package_one as $package)
                                                <option value="{{ $package }}">{{ $package }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            
                                            
                                            <div class="form-group" id="themes1">
                                                <label for="name" class="control-label mb-1">Package Includes <span class="require">*</span></label>
                                               
                                                                                              
                                                <select id="package_includes_two" name="package_includes_two[]" class="form-control" data-bvalidator="required" multiple="multiple">
                                                @foreach($package_two as $package)
                                                <option value="{{ $package }}">{{ $package }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            
                                            
                                            <div class="form-group" id="themes2">
                                                <label for="name" class="control-label mb-1">Columns <span class="require">*</span></label>
                                               <select name="columns" id="columns" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose Columns</option>
                                                        @foreach($columns as $column)
                                                        <option value="{{ $column }}">{{ $column }}</option>
                                                        @endforeach
                                                    </select>
                                                
                                            </div>
                                            
                                            
                                            <div class="form-group" id="themes3">
                                                <label for="name" class="control-label mb-1">Layout <span class="require">*</span></label>
                                                <select name="layout" id="layout" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose Layout</option>
                                                        @foreach($layouts as $layout)
                                                        <option value="{{ $layout }}">{{ $layout }}</option>
                                                        @endforeach
                                                    </select>
                                               
                                                
                                            </div>
                                            
                                            
                                            <div class="form-group" id="print1">
                                                <label for="name" class="control-label mb-1">Package Includes <span class="require">*</span></label>
                                                
                                               <select id="package_includes_three" name="package_includes_three[]" class="form-control" multiple="multiple" data-bvalidator="required">
                                                @foreach($package_three as $package)
                                                <option value="{{ $package }}">{{ $package }}</option>
                                                @endforeach
                                                </select>
                                                
                                            </div>
                                            
                                            <div class="form-group" id="print2">
                                                <label for="name" class="control-label mb-1">Layered? <span class="require">*</span></label>
                                                <select name="layered" id="layered" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose</option>
                                                        @foreach($layered as $layer)
                                                        <option value="{{ $layer }}">{{ $layer }}</option>
                                                        @endforeach
                                                    </select>
                                               
                                                
                                            </div>
                                            
                                             <div class="form-group" id="print3">
                                                <label for="name" class="control-label mb-1">Minimum Adobe CS Version <span class="require">*</span></label>
                                                <select name="cs_version" id="cs_version" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose</option>
                                                        @foreach($adobe as $adobes)
                                                        <option value="{{ $adobes }}">{{ $adobes }}</option>
                                                        @endforeach
                                                    </select>
                                               
                                                
                                            </div>
                                             
                                            <div class="form-group" id="print4">
                                                <label for="name" class="control-label mb-1">Print Dimensions <span class="require">*</span></label>
                                                <input type="text" id="print_dimensions" name="print_dimensions" class="form-control" data-bvalidator="required">
                                               <small>(Print dimensions in Inches for printable items, width x height. E.g. 3.5x2.5, 8.5x11)</small>
                                                
                                            </div> 
                                            
                                            <div class="form-group" id="print5">
                                                <label for="name" class="control-label mb-1">Pixel Dimensions <span class="require">*</span></label>
                                                <input type="text" id="pixel_dimensions" name="pixel_dimensions" class="form-control" data-bvalidator="required">
                                              <small>(Image dimensions in Pixels for screen-based items. E.g. 300x600, 50x50)</small>
                                                
                                            </div> 
                                            
                                             <div class="form-group" id="mobile1">
                                                <label for="name" class="control-label mb-1">Package Includes<span class="require">*</span></label>
                                                <select id="package_includes_four" name="package_includes_four[]" class="form-control" multiple="multiple" data-bvalidator="required">
                                                @foreach($package_four as $package)
                                                <option value="{{ $package }}">{{ $package }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="form-group" id="demourl">
                                                <label for="name" class="control-label mb-1">Demo URL </label>
                                                <input type="text" id="demo_url" name="demo_url" class="form-control" data-bvalidator="url">
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Regular License (6 months support) </label>
                                                <input type="text" id="regular_price" name="regular_price"  class="form-control" data-bvalidator="digit,min[1],required">
                                                ({{ $allsettings->site_currency }})
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Extended License (12 months support) </label>
                                                
                                                <input type="text" id="extended_price" name="extended_price" class="form-control" data-bvalidator="digit,min[1]">
                                                ({{ $allsettings->site_currency }})
                                            </div> 
                                            
                                            
                                            <div class="form-group">
                                                <label for="site_title" class="control-label mb-1"> Vendor <span class="require">*</span></label>
                                                <select name="user_id" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                @foreach($getvendor['view'] as $user)
                                                <option value="{{ $user->id }}">{{ $user->username }}</option>
                                                @endforeach
                                                </select>
                                                
                                            </div>                                                                               
                                            
                                            <div class="form-group">
                                                <label for="site_title" class="control-label mb-1"> Status <span class="require">*</span></label>
                                                <select name="item_status" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                <option value="1">Approved</option>
                                                <option value="0">UnApproved</option>
                                                </select>
                                                
                                            </div>   
                                            
                                            
                                           
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


   @include('admin.javascript')


</body>

</html>

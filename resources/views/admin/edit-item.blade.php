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
                        <h1>Edit Item</h1>
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
                           <form action="{{ route('admin.edit-item') }}" class="setting_form" id="item_form" method="post" enctype="multipart/form-data">
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
                                                    
                                                    <option value="{{ $value->item_type_slug }}" @if($edit['item']->item_type == $value->item_type_slug) selected="selected" @endif>{{ $value->item_type_name }}</option>
                                                   @endforeach 
                                                </select>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Item Name<span class="require">*</span></label>
                                               <input type="text" id="item_name" name="item_name" class="form-control" value="{{ $edit['item']->item_name }}" data-bvalidator="required,maxlen[100]"> 
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Short Description<span class="require">*</span></label>
                                                <textarea name="item_shortdesc" rows="6"  class="form-control" data-bvalidator="required">{{ $edit['item']->item_shortdesc }}</textarea>
                                            
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Description<span class="require">*</span></label>
                                                
                                            <textarea name="item_desc" id="summary-ckeditor" rows="6"  class="form-control" data-bvalidator="required">{{ html_entity_decode($edit['item']->item_desc) }}</textarea>
                                            </div>
                                                
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Thumbnail <span class="require">*</span> </label><br/>
                                                <input type="file" id="thumbnail" name="item_thumbnail" class="files" @if($edit['item']->item_thumbnail=='') data-bvalidator="required,extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" @else data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" @endif><small>(Size : 80x80px)</small><br/>
                                        @if($edit['item']->item_thumbnail!='')
                                        <img src="{{ url('/') }}/public/storage/items/{{ $edit['item']->item_thumbnail }}" alt="{{ $edit['item']->item_name }}" class="item-thumb">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.png" alt="{{ $edit['item']->item_name }}" class="item-thumb">
                                        @endif
                                           
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Preview <span class="require">*</span> </label><br/>
                                                <input type="file" id="item_preview" name="item_preview" class="files" @if($edit['item']->item_preview=='') data-bvalidator="required,extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" @else data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" @endif><small>(Size : 361x230px)</small><br/>
                                        @if($edit['item']->item_preview!='')
                                        <img src="{{ url('/') }}/public/storage/items/{{ $edit['item']->item_preview }}" alt="{{ $edit['item']->item_name }}" class="item-thumb">
                                        @else
                                        <img src="{{ url('/') }}/public/img/no-image.png" alt="{{ $edit['item']->item_name }}" class="item-thumb">
                                        @endif
                                           
                                            </div>
                                            
                                            
                                            
                                             <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Main File  <span class="require">*</span> </label><br/>
                                                <input type="file" id="main_file" name="item_file" class="files" @if($edit['item']->item_file=='') data-bvalidator="required,extension[zip]" data-bvalidator-msg="Please select file of type .zip only" @else data-bvalidator="extension[zip]" data-bvalidator-msg="Please select file of type .zip only" @endif><small>(ZIP - All files)</small>
                                                
                                                @if($allsettings->site_s3_storage == 1)
                                                    @php $fileurl = Storage::disk('s3')->url($edit['item']->item_file); @endphp
                                                    <br/><a href="{{ $fileurl }}" class="blue-color" download>{{ $edit['item']->item_file }}</a>
                                                    @else
                                                    <br/>@if($edit['item']->item_file!='')<a href="{{ url('/') }}/public/storage/items/{{ $edit['item']->item_file }}" class="blue-color" download>{{ $edit['item']->item_file }}</a>@endif
                                                    @endif
                                                
                                           
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Upload Screenshots (multiple) </label><br/>
                                                <input type="file" id="item_screenshot" name="item_screenshot[]" class="files" data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" multiple><small>(Size : 750x430px)</small><br/><br/>@foreach($item_image['item'] as $item)
                                                    
                                                    <div class="item-img"><img src="{{ url('/') }}/public/storage/items/{{ $item->item_image }}" alt="{{ $item->item_image }}" class="item-thumb">
                                                    <a href="{{ url('/admin/edit-item') }}/dropimg/{{ base64_encode($item->itm_id) }}" onClick="return confirm('Are you sure you want to delete?');" class="drop-icon"><span class="ti-trash drop-icon"></span></a>
                                                    </div>
                                                    
                                                    @endforeach
                                           <div class="clearfix"></div>
                                            </div> 
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Youtube Video URL </label>
                                                
                                                <input type="text" id="video_url" name="video_url" class="form-control" value="{{ $edit['item']->video_url }}" data-bvalidator="url">
                                        <small>(example : https://www.youtube.com/watch?v=C0DPdy98e4c)</small>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="name" class="control-label mb-1">Apply For Free Download?<span class="require">*</span></label>
                                               <select name="free_download" id="free_download" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                    <option value="1" @if($edit['item']->free_download == 1) selected="selected" @endif>Yes</option>
                                                    <option value="0" @if($edit['item']->free_download == 0) selected="selected" @endif>No</option>
                                                </select>
                                            </div>
                                           
                                           
                                           <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">Tags<span class="require">*</span></label>
                                                <textarea name="item_tags" id="item_tags" class="form-control">{{ $edit['item']->item_tags }}</textarea>
                                                <small>(Maximum of 15 keywords. Keywords should all be in lowercase and separated by commas. ex: shopping, blog, forum....ect)</small>
                                            
                                            </div> 
                                            
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Feature Update<span class="require">*</span></label>
                                                <select name="future_update" id="future_update" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                    <option value="1" @if($edit['item']->future_update == 1) selected="selected" @endif>Yes</option>
                                                    <option value="0" @if($edit['item']->future_update == 0) selected="selected" @endif>No</option>
                                                </select>
                                               
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Item Support<span class="require">*</span></label>
                                                <select name="item_support" id="item_support" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                    <option value="1" @if($edit['item']->item_support == 1) selected="selected" @endif>Yes</option>
                                                    <option value="0" @if($edit['item']->item_support == 0) selected="selected" @endif>No</option>
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
                                                
                                                <option value="category_{{ $menu->cat_id }}" @if($cat_name == 'category') @if($menu->cat_id == $cat_id) selected="selected" @endif @endif>{{ $menu->category_name }}</option>
                                                @foreach($menu->subcategory as $sub_category)
                                                <option value="subcategory_{{$sub_category->subcat_id}}" @if($cat_name == 'subcategory') @if($sub_category->subcat_id == $cat_id) selected="selected" @endif @endif> - {{ $sub_category->subcategory_name }}</option>
                                                @endforeach  
                                            @endforeach
                                            </select>
                                                
                                            </div>
                                            
                                            
                                             <div id="scripts1" @if($edit['item']->item_type == 'scripts' or $edit['item']->item_type == 'plugins') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Compatible Browsers <span class="require">*</span></label>
                                               <select id="compatible_browsers" name="compatible_browsers[]" class="form-control" data-bvalidator="required" multiple="multiple">
                                                @foreach($compatible_one as $compatible)
                                                <option value="{{ $compatible }}" @if(in_array($compatible,$checkbrowser)) selected="selected" @endif>{{ $compatible }}</option>
                                                @endforeach
                                                </select>
                                               
                                            </div>
                                            
                                            
                                            
                                            <div id="scripts2" @if($edit['item']->item_type == 'scripts' or $edit['item']->item_type == 'plugins') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Package Includes <span class="require">*</span></label>
                                               
                                               <select id="package_includes" name="package_includes[]" class="form-control" data-bvalidator="required" multiple="multiple">
                                                @foreach($package_one as $package)
                                                <option value="{{ $package }}" @if(in_array($package,$checkpackage)) selected="selected" @endif>{{ $package }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            
                                            
                                            <div id="themes1" @if($edit['item']->item_type == 'themes') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Package Includes <span class="require">*</span></label>
                                               
                                                                                              
                                                <select id="package_includes_two" name="package_includes_two[]" class="form-control" data-bvalidator="required" multiple="multiple">
                                                @foreach($package_two as $package)
                                                <option value="{{ $package }}" @if(in_array($package,$checkpackagetwo)) selected="selected" @endif>{{ $package }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            
                                            
                                            <div id="themes2" @if($edit['item']->item_type == 'themes') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Columns <span class="require">*</span></label>
                                               <select name="columns" id="columns" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose Columns</option>
                                                        @foreach($columns as $column)
                                                        <option value="{{ $column }}" @if($edit['item']->columns == $column) selected="selected" @endif>{{ $column }}</option>
                                                        @endforeach
                                                    </select>
                                                
                                            </div>
                                            
                                            
                                            <div id="themes3" @if($edit['item']->item_type == 'themes') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Layout <span class="require">*</span></label>
                                                <select name="layout" id="layout" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose Layout</option>
                                                        @foreach($layouts as $layout)
                                                        <option value="{{ $layout }}" @if($edit['item']->layout == $layout) selected="selected" @endif>{{ $layout }}</option>
                                                        @endforeach
                                                    </select>
                                               
                                                
                                            </div>
                                            
                                            
                                            <div id="print1" @if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Package Includes <span class="require">*</span></label>
                                                
                                               <select id="package_includes_three" name="package_includes_three[]" class="form-control" multiple="multiple" data-bvalidator="required">
                                                @foreach($package_three as $package)
                                                <option value="{{ $package }}" @if(in_array($package,$checkthree)) selected="selected" @endif>{{ $package }}</option>
                                                @endforeach
                                                </select>
                                                
                                            </div>
                                            
                                            <div id="print2" @if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Layered? <span class="require">*</span></label>
                                                <select name="layered" id="layered" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose</option>
                                                        @foreach($layered as $layer)
                                                        <option value="{{ $layer }}" @if($edit['item']->layered == $layer) selected="selected" @endif>{{ $layer }}</option>
                                                        @endforeach
                                                    </select>
                                               
                                                
                                            </div>
                                            
                                             <div id="print3" @if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Minimum Adobe CS Version <span class="require">*</span></label>
                                                <select name="cs_version" id="cs_version" class="form-control" data-bvalidator="required">
                                                        <option value="">Choose</option>
                                                        @foreach($adobe as $adobes)
                                                        <option value="{{ $adobes }}" @if($edit['item']->cs_version == $adobes) selected="selected" @endif>{{ $adobes }}</option>
                                                        @endforeach
                                                    </select>
                                               
                                                
                                            </div>
                                             
                                            <div id="print4" @if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Print Dimensions <span class="require">*</span></label>
                                                <input type="text" id="print_dimensions" name="print_dimensions" class="form-control" value="{{ $edit['item']->print_dimensions }}" data-bvalidator="required">
                                               <small>(Print dimensions in Inches for printable items, width x height. E.g. 3.5x2.5, 8.5x11)</small>
                                                
                                            </div> 
                                            
                                            <div id="print5" @if($edit['item']->item_type == 'print' or $edit['item']->item_type == 'graphics') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Pixel Dimensions <span class="require">*</span></label>
                                                <input type="text" id="pixel_dimensions" name="pixel_dimensions" class="form-control" value="{{ $edit['item']->pixel_dimensions }}" data-bvalidator="required">
                                              <small>(Image dimensions in Pixels for screen-based items. E.g. 300x600, 50x50)</small>
                                                
                                            </div> 
                                            
                                             <div id="mobile1" @if($edit['item']->item_type == 'mobile-apps') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Package Includes<span class="require">*</span></label>
                                                <select id="package_includes_four" name="package_includes_four[]" class="form-control" multiple="multiple" data-bvalidator="required">
                                                @foreach($package_four as $package)
                                                <option value="{{ $package }}" @if(in_array($package,$checkfour)) selected="selected" @endif>{{ $package }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            
                                            <div id="demourl" @if($edit['item']->item_type == 'scripts' or $edit['item']->item_type == 'themes' or $edit['item']->item_type == 'plugins' or $edit['item']->item_type == 'mobile-apps') class="form-group force-block" @else class="form-group force-none" @endif>
                                                <label for="name" class="control-label mb-1">Demo URL <span class="require">*</span></label>
                                                <input type="text" id="demo_url" name="demo_url" class="form-control" value="{{ $edit['item']->demo_url }}" data-bvalidator="url">
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Regular License (6 months support) </label>
                                                <input type="text" id="regular_price" name="regular_price"  class="form-control" value="{{ $edit['item']->regular_price }}" data-bvalidator="digit,min[1],required">
                                                ({{ $allsettings->site_currency }})
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Extended License (12 months support) </label>
                                                
                                                <input type="text" id="extended_price" name="extended_price" class="form-control" value="@if($edit['item']->extended_price==0) @else {{ $edit['item']->extended_price }} @endif" data-bvalidator="digit,min[1]">
                                                ({{ $allsettings->site_currency }})
                                            </div> 
                                            
                                            @if($edit['item']->item_flash_request == 1)
                                            <div class="form-group">
                                                <label for="site_title" class="control-label mb-1"> Flash Sale <span class="require">*</span></label>
                                                <select name="item_flash" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                <option value="1" @if($edit['item']->item_flash == 1) selected="selected" @endif>Active</option>
                                                <option value="0" @if($edit['item']->item_flash == 0) selected="selected" @endif>InActive</option>
                                                
                                                </select>
                                                
                                            </div> 
                                            @else
                                            <input type="hidden" name="item_flash" value="0">
                                            @endif
                                            
                                                                                                                          
                                            
                                            <div class="form-group">
                                                <label for="site_title" class="control-label mb-1"> Status <span class="require">*</span></label>
                                                <select name="item_status" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                <option value="1" @if($edit['item']->item_status == 1) selected="selected" @endif>Approved</option>
                                                <option value="0" @if($edit['item']->item_status == 0) selected="selected" @endif>UnApproved</option>
                                                <option value="2" @if($edit['item']->item_status == 2) selected="selected" @endif>Rejected</option>
                                                </select>
                                                
                                            </div>   
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">    
                                        <input type="hidden" name="save_file" value="{{ $edit['item']->item_file }}">
                                        <input type="hidden" name="save_thumbnail" value="{{ $edit['item']->item_thumbnail }}">
                                        <input type="hidden" name="save_preview" value="{{ $edit['item']->item_preview }}">
                                        <input type="hidden" name="save_extended_price" value="{{ $edit['item']->extended_price }}">
                                        <input type="hidden" name="item_token" value="{{ $edit['item']->item_token }}">
                                          
                                           
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

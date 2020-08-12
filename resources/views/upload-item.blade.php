@include('version')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@if(Auth::user()->user_type == 'vendor') {{ Helper::translation(2931,$translate) }} @else {{ Helper::translation(2860,$translate) }} @endif - {{ $allsettings->site_title }}</title>
    @include('stylesheet')
    @include('dynamic-style')


</head>

<body class="preload dashboard-upload">

    @include('header')
    @if(Auth::user()->user_type == 'vendor')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{ URL::to('/') }}">{{ Helper::translation(2862,$translate) }}</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/upload-item') }}">{{ Helper::translation(2931,$translate) }}</a>
                            </li>

                        </ul>
                    </div>
                    <h1 class="page-title">{{ Helper::translation(2931,$translate) }}</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>



    <section class="dashboard-area">

        @include('dashboard-menu')
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">

                <div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <span class="alert_icon lnr lnr-checkmark-circle"></span>
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="lnr lnr-cross" aria-hidden="true"></span>
                        </button>
                    </div>
                    @endif


                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        <span class="alert_icon lnr lnr-warning"></span>
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="lnr lnr-cross" aria-hidden="true"></span>
                        </button>
                    </div>
                    @endif

                    @if (!$errors->isEmpty())
                    <div class="alert alert-danger" role="alert">
                        <span class="alert_icon lnr lnr-warning"></span>
                        @foreach ($errors->all() as $error)

                        {{ $error }}

                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="lnr lnr-cross" aria-hidden="true"></span>
                        </button>
                    </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <form action="{{ route('upload-item') }}" class="setting_form" id="item_form" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>{{ Helper::translation(4852,$translate) }}</h3>
                                </div>


                                <div class="modules__content">


                                    <div class="form-group">
                                        <label for="product_name">{{ Helper::translation(4839,$translate) }} <sup>*</sup>
                                            <span>(Max 100 characters)</span>
                                        </label>
                                        <input type="text" id="product_name" name="product_name" class="text_field" data-bvalidator="required,maxlen[100]">
                                    </div>

                                    <div class="form-group">
                                        <label for="price">{{ Helper::translation(4840,$translate) }} <sup>*</sup>
                                        </label>
                                        <input type="text" id="price" name="price" class="text_field" data-bvalidator="required,maxlen[100]">
                                    </div>


                                    <div class="form-group">
                                        <label for="selected">{{ Helper::translation(4843,$translate) }} <sup>*</sup></label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="geometry_type" id="geometry_type" class="text_field" data-bvalidator="required">
                                                <option value=""></option>
                                                @foreach($geometry as $value)
                                                <option value="{{$value->id}}">{{ $value->geometry }}</option>
                                                @endforeach
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="polygons">{{ Helper::translation(4844,$translate) }} <sup>*</sup>
                                        </label>
                                        <input type="text" id="polygons" name="polygons" class="text_field" data-bvalidator="required,maxlen[100]">
                                    </div>

                                    <div class="form-group">
                                        <label for="vertices">{{ Helper::translation(4845,$translate) }} <sup>*</sup>
                                        </label>
                                        <input type="text" id="vertices" name="vertices" class="text_field" data-bvalidator="required,maxlen[100]">
                                    </div>

                                    <!-- <div class="form-group ">
                                        <label for="textures">{{ Helper::translation(4846, $translate)}}<sup>*</sup></label>
                                        <label class="checkbox-container">
                                            <input type="checkbox" value="1"name="textures"/>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-container">
                                            <input type="checkbox" value="0" name="textures"/>
                                            <span class="checkmark"></span>
                                        </label>

                                    </div> -->

                                    <div class="form-group">
                                        <label for="textures">{{ Helper::translation(4846,$translate) }}: <sup>*</sup></label>
                                        <label class="checkbox-container">Yes
                                            <input value="1" type="radio" checked="checked" name="textures">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-container">No
                                            <input value="0" type="radio" name="textures">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label for="materials">{{ Helper::translation(4847,$translate) }}: <sup>*</sup></label>
                                        <label class="checkbox-container">Yes
                                            <input value="1" type="radio" checked="checked" name="materials">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-container">No
                                            <input value="0" type="radio" name="materials">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label for="rigged">{{ Helper::translation(4848,$translate) }}: <sup>*</sup></label>
                                        <label class="checkbox-container">Yes
                                            <input value="1" type="radio" checked="checked" name="rigged">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-container">No
                                            <input value="0" type="radio" name="rigged">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label for="animated">{{ Helper::translation(4849,$translate) }}: <sup>*</sup></label>
                                        <label class="checkbox-container">Yes
                                            <input value="1" type="radio" checked="checked" name="animated">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-container">No
                                            <input value="0" type="radio" name="animated">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label for="uv_mapped">{{ Helper::translation(4850,$translate) }}: <sup>*</sup></label>
                                        <label class="checkbox-container">Yes
                                            <input value="1" type="radio" checked="checked" name="uv_mapped">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-container">No
                                            <input value="0" type="radio" name="uv_mapped">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label for="unwrapped_uvs">{{ Helper::translation(4851,$translate) }}: <sup>*</sup></label>
                                        <select name="unwrapped_uvs" id="unwrapped_uvs" class="text_field" data-bvalidator="required">
                                                <option value=""></option>
                                                @foreach($unwrapped_uvs as $value)
                                                <option value="{{$value->id}}">{{ $value->unwrapped_uvs }}</option>
                                                @endforeach
                                            </select>
                                    </div>

                                    <div class="form-group no-margin">
                                        <p class="label">{{ Helper::translation(2941,$translate) }} <sup>*</sup></p>
                                        <textarea name="product_desc" id="summary-ckeditor" rows="6" class="form-control" data-bvalidator="required"></textarea>
                                    </div>
                                </div>
                                <!-- end /.modules__content -->
                            </div>
                            <!-- end /.upload_modules -->

                            <div class="upload_modules module--upload">
                                <div class="modules__title">
                                    <h3>{{ Helper::translation(2942,$translate) }}</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <!-- <div class="upload_wrapper">
                                            <p class="label">{{ Helper::translation(2943,$translate) }} <sup>*</sup>
                                                <span>({{ Helper::translation(2946,$translate) }} : 80x80px)</span>
                                            </p>

                                            <div class="custom_upload">
                                                <label for="thumbnail">
                                                    <input type="file" id="item_thumbnail" name="item_thumbnail" class="files" data-bvalidator="required,extension[jpg:png:jpeg]" data-bvalidator-msg="{{ Helper::translation(2944,$translate) }}">

                                                </label>
                                            </div>



                                        </div> -->
                                        <!-- end /.upload_wrapper -->
                                    </div>
                                    <!-- end /.form-group -->

<!-- 
                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <p class="label">{{ Helper::translation(2945,$translate) }} <sup>*</sup>
                                                <span>({{ Helper::translation(2946,$translate) }} : 361x230px)</span>
                                            </p>

                                            <div class="custom_upload">
                                                <label for="thumbnail">
                                                    <input type="file" id="item_preview" name="item_preview" class="files" data-bvalidator="required,extension[jpg:png:jpeg]" data-bvalidator-msg="{{ Helper::translation(2944,$translate) }}">

                                                </label>
                                            </div>



                                        </div>
                                        end /.upload_wrapper -->
                                    <!-- </div> --> 



                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <p class="label">{{ Helper::translation(2947,$translate) }} <sup>*</sup>
                                                <span>({{ Helper::translation(2948,$translate) }})</span>
                                            </p>

                                            <div class="custom_upload">
                                                <label for="main_file">
                                                    <input type="file" id="main_file" name="item_file" class="files" data-bvalidator="required,extension[zip]" data-bvalidator-msg="{{ Helper::translation(2949,$translate) }}">

                                                </label>
                                            </div>



                                        </div>
                                        <!-- end /.upload_wrapper -->
                                    </div>
                                    <!-- end /.form-group -->

                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <!-- <p class="label">{{ Helper::translation(2950,$translate) }}
                                                <span>({{ Helper::translation(2946,$translate) }} : 750x430px)</span>
                                            </p>

                                            <div class="custom_upload">
                                                <label for="screenshot">
                                                    <input type="file" id="item_screenshot" name="item_screenshot[]" class="files" data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="{{ Helper::translation(2944,$translate) }}" multiple>

                                                </label>
                                            </div> -->



                                        </div>
                                        <!-- end /.upload_wrapper -->
                                    </div>
                                    <!-- end /.form-group -->
                                </div>
                                <!-- end /.upload_modules -->
                            </div>
                            <!-- end /.upload_modules -->

                           
                            <!-- end /.upload_modules -->

                        
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            @if($allsettings->item_approval == 0)
                            <button type="submit" class="btn btn--fullwidth btn--lg theme-button">{{ Helper::translation(2981,$translate) }}</button>
                            @else
                            <button type="submit" class="btn btn--fullwidth btn--lg theme-button">{{ Helper::translation(2876,$translate) }}</button>
                            @endif
                        </form>
                    </div>
                    <!-- end /.col-md-8 -->

                    <div class="col-lg-4 col-md-5">
                        <aside class="sidebar upload_sidebar">
                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>{{ Helper::translation(2982,$translate) }}</h3>
                                </div>

                                <div class="card_content">
                                    <div class="card_info">
                                        <h4>{{ Helper::translation(2983,$translate) }}</h4>
                                        <p>{{ Helper::translation(2984,$translate) }} : <strong>jpeg, jpg, png</strong>
                                        </p>

                                    </div>

                                    <div class="card_info">
                                        <h4>{{ Helper::translation(2985,$translate) }}</h4>
                                        <p>{{ Helper::translation(2984,$translate) }} : <strong>zip</strong> format
                                        </p>
                                    </div>


                                </div>
                            </div>
                            <!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>{{ Helper::translation(2986,$translate) }}</h3>
                                </div>

                                <div class="card_content">
                                    <p>{{ Helper::translation(2987,$translate) }}</p><br />
                                    <p>{{ Helper::translation(2988,$translate) }}</p>
                                </div>
                            </div>
                            <!-- end /.sidebar-card -->


                            <!-- end /.sidebar-card -->
                        </aside>
                        <!-- end /.sidebar -->
                    </div>
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    @else
    @include('not-found')
    @endif

    @include('footer')

    @include('javascript')


</body>

</html>
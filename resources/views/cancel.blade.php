@include('version')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Helper::translation(2882,$translate) }} - {{ $allsettings->site_title }}</title>
    @include('stylesheet')
    @include('dynamic-style')
</head>

<body class="preload term-condition-page">

    @include('header')
    
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{ URL::to('/') }}">{{ Helper::translation(2862,$translate) }}</a>
                            </li>
                            <li class="active">
                                <a href="{{ URL::to('/cancel') }}">{{ Helper::translation(2882,$translate) }}</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">{{ Helper::translation(2883,$translate) }}</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    
    
    
    <section class="term_condition_area">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="term">
                            
                            <div class="content">
                            <h4>{{ Helper::translation(2884,$translate) }}</h4>
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
    
    
   @include('footer')
    
   @include('javascript')
    
</body>

</html>
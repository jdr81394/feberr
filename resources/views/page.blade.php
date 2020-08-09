@include('version')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $page['page']->page_title }} - {{ $allsettings->site_title }}</title>
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
                                <a href="{{ URL::to('/page') }}/{{ $page['page']->page_id }}/{{ $page['page']->page_slug }}">{{ $page['page']->page_title }}</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">{{ $page['page']->page_title }}</h1>
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
                <div class="col-md-12">
                    <div class="cardify term_modules">
                        <div class="term">
                            <div class="term__title">
                                <h4>{{ $page['page']->page_title }}</h4>
                            </div>
                            <div class="content">
                            {!! html_entity_decode($page['page']->page_desc) !!}
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
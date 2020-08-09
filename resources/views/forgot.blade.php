@include('version')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Helper::translation(3009,$translate) }} - {{ $allsettings->site_title }}</title>
    @include('stylesheet')
    @include('dynamic-style')
</head>

<body class="preload recover-pass-page">
   
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
                                <a href="{{ URL::to('/password/reset') }}">{{ Helper::translation(3009,$translate) }}</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">{{ Helper::translation(3009,$translate) }}</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
   
   
   
    <section class="pass_recover_area section--padding2">
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
                <div class="col-lg-6 offset-lg-3">
                   <form method="POST" action="{{ route('forgot') }}" id="item_form">
                        @csrf
                        <div class="cardify recover_pass">
                            <div class="login--header">
                                <p>{{ Helper::translation(3010,$translate) }}</p>
                            </div>
                            <!-- end .login_header -->
                            
                            @if(isset($user['user']->name))
                            {{ $user['user']->name }}
                            @endif
                            <div class="login--form">
                                <div class="form-group">
                                    <label for="email_ad">{{ Helper::translation(3011,$translate) }}</label>
                                    <input id="email" type="text" class="text_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email address" data-bvalidator="email,required" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                   
                                </div>

                                <button class="btn btn--md register_btn theme-button" type="submit">{{ Helper::translation(3012,$translate) }}</button>
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
    
    
    @include('footer')
    
   @include('javascript')
</body>

</html>

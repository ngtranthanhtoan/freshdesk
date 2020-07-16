<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Smarttax Support</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Smarttax Support" />
        <meta name="keywords" content="smarttax,support" />
        <meta name="author" content="Như Là Mơ" />
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if(isset($content_id)) 
        <meta name="content_id" content="{{ $content_id }}">
        @endif

        @if(\Auth::check())
        <meta name="user_id"  content="{{ \Auth::id() }}">
        <meta name="access_token" content="">
        @endif


        <!-- Styles -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="{{ asset('assets/plugins/pace-master/themes/blue/pace-theme-flash.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/plugins/uniform/css/uniform.default.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/waves/waves.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/3d-bold-navigation/css/style.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/slidepushmenus/css/component.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="{{ asset('assets/css/modern.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/themes/green.css') }}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
        
        <script src="{{ asset('assets/plugins/3d-bold-navigation/js/modernizr.js') }}"></script>
        <script src="{{ asset('assets/plugins/offcanvasmenueffects/js/snap.svg-min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="small-sidebar">
        <div class="overlay"></div>

        <form class="search-form" action="/search" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Tìm kiếm...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            @include('components.topbar')
            @include('components.sidebar')
            <div class="page-inner">
                @yield("breadcrumb")
                <div id="main-wrapper">
                        @yield('content')
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2017 &copy; Được phát triển bởi Nguyễn Trần Thanh Toàn.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->

        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        @section('javascript')
        <script src="{{ asset('js/app.js') }}"> </script>
        @show
       
       
        <script src="{{ asset('assets/plugins/jquery-blockui/jquery.blockui.js') }}"></script>

        <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/uniform/jquery.uniform.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/offcanvasmenueffects/js/classie.js') }}"></script>
        <script src="{{ asset('assets/plugins/offcanvasmenueffects/js/main.js') }}"></script>
        <script src="{{ asset('assets/plugins/waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/3d-bold-navigation/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/modern.js') }}"></script>
  
        
    </body>
</html>
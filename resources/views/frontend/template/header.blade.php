<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <title>{{ trans('web.site_title') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/justified-nav.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{ asset('assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script src="{{ asset('assets/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- https://github.com/js-cookie/js-cookie -->
    <script src="{{ asset('js/js.cookie.js') }}"></script>

    <script src="{{ asset('js/site.js?time=20160303') }}"></script>

    <!-- Custom CSS -->
    <!-- <link href="dist/css/site.css?time=20160303" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
	<div class="container" style="padding-left: 0 !important; padding-right: 0 !important;">
	<!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead" style="background-image: url('{{ asset('img/header_background.jpg') }}');">

        <!-- Header Left -->
        <!-- Logo & Title -->
        <h3 class="text-muted">
          <img src="{{ asset('img/bsg_logo_500x500.png') }}">
          <ul class="company-name">
            <li>{{ trans('web.company_name') }}</li>
            <li>Beijing Securities Group Limited</li>
          </ul>
        </h3>

        <!-- Header Right  -->
        <div class="header-right">
          {{--<!-- Language Bar -->
          <ul class="lang-bar">
            <li><a href="#">{{ trans('web.home') }}</a></li>
            <li>|</li>
            <li><a href="#/?lang=sim">简体</a></li>
            <li>|</li>
            <li><a href="#/?lang=trad">繁體</a></li>
            <li>|</li>
            <li><a href="#/?lang=eng">english</a></li>
          </ul>

          <div class="clearfix"></div>--}}

          <!-- Login Block -->
          <a href="https://bjsginv.infocast.hk/cas/login" target="_blank">
            <ul class="login-block hidden-custom">
              <li>
                {{ trans('web.login_to_trade') }}
                <ul>
                  <li>&raquo;</li>
                  <li>&raquo;</li>
                  <li>&raquo;</li>
                </ul>
              </li>
            </ul>
          </a>

          <script>
//            var flash_arrow = 3;

            function flashArrow() {

              /*$('.login-block ul li').css('color', 'white');

              $('.login-block ul li:nth-child(' + flash_arrow + ')').css('color', 'yellow');

              if(flash_arrow ==1 ) {
                flash_arrow = 3;
                return;
              }

              flash_arrow --;*/

              $('.login-block ul li').css('color', '#F7FE2E');
              setTimeout(function() {$('.login-block ul li').css('color', 'white')}, 1000)

            }


            setInterval(function(){ flashArrow(); }, 2000);

          </script>

        </div>

      </div>

      <!-- Navigation Bar -->
      <nav class="navbar navbar-default main_navbar ">
        <div class="container-fluid navbar-main">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Brand</a> -->
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
              <li><a href="{{route('front.homepage')}}">{{ trans('web.home') }}</a></li>
              <li><a href="{{route('front.aboutus')}}">{{ trans('web.about_us') }}</a></li>
              <li><a href="{{route('front.marketnews')}}">{{ trans('web.market_news') }}</a></li>
              <li><a href="{{route('front.companynews')}}">集团新闻</a></li>
              {{--<li><a href="{{route('front.companystructure')}}">{{ trans('web.company_structure') }}</a></li>--}}
              <li><a href="{{route('front.download')}}">{{ trans('web.form_download') }}</a></li>
              <li><a href="{{route('front.appointment')}}">{{ trans('web.appointment') }}</a></li>
              <li><a href="{{route('front.contactus')}}">{{ trans('web.contact_us') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">{{ trans('web.customer_hot_line') }} (852) 3899 1333</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->


        </div><!-- /.container-fluid -->

        {{--<div class="col-md-12 nav-custom" style="display: none;">--}}
          {{--<ul class="nav navbar-nav">--}}
            {{--<!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->--}}
            {{--<li><a href="{{route('front.homepage')}}">{{ trans('web.home') }}</a></li>--}}
            {{--<li><a href="{{route('front.aboutus')}}">{{ trans('web.about_us') }}</a></li>--}}
            {{--<li><a href="{{route('front.marketnews')}}">{{ trans('web.market_news') }}</a></li>--}}
            {{--<li><a href="{{route('front.companystructure')}}">{{ trans('web.company_structure') }}</a></li>--}}
            {{--<li><a href="{{route('front.download')}}">{{ trans('web.form_download') }}</a></li>--}}
            {{--<li><a href="{{route('front.contactus')}}">{{ trans('web.contact_us') }}</a></li>--}}
          {{--</ul></div>--}}
      </nav>
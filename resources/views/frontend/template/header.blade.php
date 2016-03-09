<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>北京证券集团有限公司</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/justified-nav.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="dist/js/bootstrap.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/site.js?time=20160303"></script>

    <!-- Custom CSS -->
    <!-- <link href="dist/css/site.css?time=20160303" rel="stylesheet"> -->
    <link href="css/app.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
	<div class="container">
	<!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead" style="background-image: url('img/header_background.jpg');">

        <!-- Header Left -->
        <!-- Logo & Title -->
        <h3 class="text-muted">
          <img src="img/bsg_logo_500x500.png">
          <ul class="company-name">
            <li>北京证券集团有限公司</li>
            <li>Beijing Securities Group Limited</li>
          </ul>
        </h3>

        <!-- Header Right  -->
        <div class="header-right">
          <!-- Language Bar -->
          <ul class="lang-bar">
            <li><a href="#">首页</a></li>
            <li>|</li>
            <li><a href="#/?lang=sim">简体</a></li>
            <li>|</li>
            <li><a href="#/?lang=trad">繁體</a></li>
            <li>|</li>
            <li><a href="#/?lang=eng">英文</a></li>
            <li>|</li>
            <li><a href="admin/index.html">後台管理</a></li>
          </ul>

          <div class="clearfix"></div>

          <!-- Login Block -->
          <ul class="login-block">
            <li>登入交易系统 <span>&raquo;</span><span>&raquo;</span><span>&raquo;</span></li>
          </ul>
        </div>

      </div>

      <!-- Navigation Bar -->
      <nav class="navbar navbar-default main_navbar">
        <div class="container-fluid">
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
              <li><a href="{{route('front-homepage')}}">首页</a></li>
              <li><a href="{{route('front-marketnews')}}">市场动态</a></li>
              <li><a href="{{route('front-structure')}}">公司架构</a></li>
              <li><a href="{{route('front-download')}}">表格下載</a></li>
              <li><a href="{{route('front-aboutus')}}">关于我们</a></li>
              <li><a href="{{route('front-contactus')}}">联络我们</a></li>
              <!-- <li><a href="/beijingsecgorup/cs">客户服务</a></li>  -->

              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li> -->
            </ul>
            <!-- <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">客户热线 (852) 3899 1373</a></li>

             <!--  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li> -->
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
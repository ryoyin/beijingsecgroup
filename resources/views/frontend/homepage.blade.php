@extends('frontend.template.layout')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

{{--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <!-- <div class="item active">
      <img src="img/banner/banner_s1_1_1140x350.jpg" alt="Banner 1">
    </div> -->
    <div class="item active">
      <img src="{{ asset('img/banner/banner4_1140x493.jpg') }}" alt="Banner 2">
      <!-- <div class="carousel-caption"></div> -->
    </div>
    <div class="item">
      <img src="{{ asset('img/banner/banner5_1140x493.jpg') }}" alt="Banner 3">
      <!-- <div class="carousel-caption"></div> -->
    </div>
    <!-- <div class="item">
      <img src="img/banner/banner_s4_1_1140x350.jpg" alt="Banner 4">
    </div> -->
    <div class="item">
      <img src="{{ asset('img/banner/banner6_1140x493.jpg') }}" alt="Banner 5">
      <!-- <div class="carousel-caption"></div> -->
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>--}}

<!-- Jumbotron -->
<!-- <div class="jumbotron trading_platform">
  <h1>網上交易平台</h1>
  <p class="lead">
    <img src="img/app_trading_platform.png">
    <img src="img/online_trading_platform.png">
  </p>
  <p><a class="btn btn-lg btn-success" href="#" role="button">立即開戶</a></p>
</div> -->

<div>
  <img src="{{ asset('img/banner/banner4_1140x493.jpg') }}" style="width: 100%">
</div>

<div class="row stock-block">
  <div class="col-md-12">
    @include('frontend.block.marketnews')

    <div class="hidden">
      @include('frontend.block.mostactive')
    </div>
  </div>
  <div class="col-md-3 hidden-custom hidden">
    @include('frontend.block.stockenquiry')
    <script>
      stockEnquiry(5);
    </script>

    {{--<div class="ad-app-block">
      <div class="col-md-12" style="padding-bottom: 10px;"><h4>电脑交易平台</h4></div>
      <div class="col-md-12" style="padding-bottom: 10px;"><img src="{{ asset('img/infocast_logo_sim.png') }}" style="height:130px"></div>
      <div class="col-md-12" style="padding-bottom: 20px;"><a class="btn btn-primary login-btn" href="https://bjsginv.infocast.hk/cas/login" role="button" style=" font-size: 27px;" target="_blank">立即登入</a></div>
      <div class="col-md-12"><h4>{{ trans('web.mobile_trade_platform') }}</h4></div>
      --}}{{--<div class="col-md-12 app-image"><img src="{{ asset('img/app_trading_platform.png') }}"></div>--}}{{--
      <div class="col-md-12">
        <ul>
          <li class="app-item">
            <ul class="ios_icon">
              <li><img src="{{ asset('img/app_store_download_icon.png') }}" style="height: 78px; padding: 7px;"></li>
              <li>{{ trans('web.iphone_trade_download') }}</li>
            </ul>
          </li>
          <li class="app-item">
            <ul class="android_icon">
              <li><img src="{{ asset('img/google-play-badge.png') }}" style="height: 78px; padding: 7px;"></li>
              <li>{{ trans('web.android_trade_download') }}</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>--}}
  </div>
</div>

<div class="row trading-platform hidden-custom">
  <!-- Online Trading System -->
  <div class="col-md-12 title">提供全面的交易平台，让你在任何地方也不会错过投资机会</div>
  <!-- App Trading System -->
  <div class="col-md-5 col-xs-12 app-trading">
    <div class="col-md-4 col-xs-4" style="text-align: center;"><img src="{{ asset('img/app_trading_platform.png') }}"></div>
    <div class="col-md-8 col-xs-8 left">
      <ul>
        <li>
          <h3>手机交易平台</h3>
          <p>为流动装置提供股票交易和金融信息行情，流动交易应用程式支援iOS和Android。</p>
          <ul>
            <li class="app-item">
              <ul class="ios_icon">
                <li><a href="https://itunes.apple.com/hk/app/beijing-securities-group-limited/id1091181118?mt=8"><img src="{{ asset('img/app_store_download_icon.png') }}" style="height: 45px; padding: 5px;"></a></li>
                <li><a href="https://itunes.apple.com/hk/app/beijing-securities-group-limited/id1091181118?mt=8">iPhone 平台下载</a></li>
              </ul>
            </li>
            <li class="app-item">
              <ul class="android_icon">
                <li><a href="https://play.google.com/store/apps/details?id=hk.com.bjsg.imobility"><img src="{{ asset('img/google-play-badge.png') }}" style="height: 45px; padding: 5px;"></a></li>
                <li><a href="https://itunes.apple.com/hk/app/beijing-securities-group-limited/id1091181118?mt=8">Android 平台下载</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- <li><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></li> -->
      </ul>
    </div>
  </div>
  <!-- Web Trading System -->
  <div class="col-md-7 col-xs-12 online-trading">
    <div class="col-md-7" style="text-align: center;"><img src="{{ asset('img/online_trading_platform.png') }}"></div>
    <div class="col-md-5 right">
      <ul>
        <li>
          <h3>网上证券交易</h3>
          <p>一站式证券交易平台，使用方便，并提供其他先进功能，稳健及快速恢复的系统结构赋予最高性能、安全和稳健性的平台。</p>
        </li>
        <li align="center"><a class="btn btn-primary login-btn" href="https://bjsginv.infocast.hk/cas/login" role="button" target="_blank">立即登入</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="row service-block hidden-custom">
  <div class="col-md-4">
    <h2>交易服务</h2>
    <p>北京证券集团有限公司一向致力为客户提供全面证券买卖服务，配合多元化交易渠道及全面交易信息，让客户全方位把握投资良机。</p>
    <div class="img-block"><img class="img-rounded" src="{{ asset('img/trade-service.jpg') }}"></div>
  </div>
  <div class="col-md-4">
    <h2>专业团队</h2>
    <p>以您为主的投资策略，让您全面掌握个人投资配置，我们会以专业客观的角度，为您创造最大价值，获取最理想的投资报酬。</p>
    <div class="img-block"><img class="img-rounded" src="{{ asset('img/invest-service.jpg') }}"></div>
  </div>
  <div class="col-md-4">
    <h2>服务范围</h2>
    <p>在香港开设投资证券帐户，并提供港股、美股等境外股票买卖服务。为投资者提供咨询、分析、参谋等服务，最大限度降低投资风险。为投资者提供孖展融资服务，最大限度放大投资者的投资规模，实现投资效益最大化。</p>
    <div class="img-block"><img class="img-rounded" src="{{ asset('img/provided-service.jpg') }}"></div>
  </div>
</div>

@endsection
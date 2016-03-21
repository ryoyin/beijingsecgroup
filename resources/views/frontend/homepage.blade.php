@extends('frontend.template.layout')

@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
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
      <img src="img/banner/banner_s2_1_1140x350.jpg" alt="Banner 2">
      <!-- <div class="carousel-caption"></div> -->
    </div>
    <div class="item">
      <img src="img/banner/banner_s3_1_1140x350.jpg" alt="Banner 3">
      <!-- <div class="carousel-caption"></div> -->
    </div>
    <!-- <div class="item">
      <img src="img/banner/banner_s4_1_1140x350.jpg" alt="Banner 4">
    </div> -->
    <div class="item">
      <img src="img/banner/banner_s5_1_1140x350.jpg" alt="Banner 5">
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
</div>

<!-- Jumbotron -->
<!-- <div class="jumbotron trading_platform">
  <h1>網上交易平台</h1>
  <p class="lead">
    <img src="img/app_trading_platform.png">
    <img src="img/online_trading_platform.png">
  </p>
  <p><a class="btn btn-lg btn-success" href="#" role="button">立即開戶</a></p>
</div> -->
<div class="row stock-block">
  <div class="col-md-7">
    <table class="table table-hover index-table">
      <thead>
        <tr>
          <th>指数名称</th>
          <th>收盘</th>
          <th>涨跌</th>
          <th>最高</th>
          <th>最低</th>
        </tr>
      </thead>
      <tbody class="index-tbody">
        <tr class="index-temp">
          <th scope="row"></th>
          <td></td>
          <td><span class="glyphicon" aria-hidden="true"></span> </td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-md-5"><img src="img/chart.jpg" style="width: 100%"></div>
</div>

<div class="row trading-platform">
  <!-- Online Trading System -->
  <div class="col-md-12 title">提供全面的交易平台，让你在任何地方也不会错过投资机会</div>
  <!-- App Trading System -->
  <div class="col-md-5 col-xs-12 app-trading">
    <div class="col-md-4 col-xs-4" style="text-align: center;"><img src="img/app_trading_platform.png"></div>
    <div class="col-md-8 col-xs-8 left">
      <ul>
        <li>
          <h3>手机交易平台</h3>
          <p>为流动装置提供股票交易和金融信息行情，流动交易应用程式支援iOS和Android。</p>
          <div class="col-md-6 col-xs-6 qr-code">
            <img src="img/qr_code_image.png">
            <p>iOS 下载</p>
          </div>
          <div class="col-md-6 col-xs-6 qr-code">
            <img src="img/qr_code_image.png">
            <p>安卓下载</p>
          </div>
        </li>
        <!-- <li><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></li> -->
      </ul>
    </div>
  </div>
  <!-- Web Trading System -->
  <div class="col-md-7 col-xs-12 online-trading">
    <div class="col-md-7" style="text-align: center;"><img src="img/online_trading_platform.png"></div>
    <div class="col-md-5 right">
      <ul>
        <li>
          <h3>网上证券交易</h3>
          <p>一站式证券交易平台，使用方便，并提供其他先进功能，稳健及快速恢复的系统结构赋予最高性能、安全和稳健性的平台。</p>
        </li>
        <li><a class="btn btn-primary login-btn" href="#" role="button">立即登入</a></li>
      </ul>
    </div>
  </div>
</div>

<!-- Example row of columns -->
<div class="row service-block">
  <div class="col-lg-4">
    <h2>交易服务</h2>
    <p>北京证券集团有限公司一向致力为客户提供全面证券买卖服务，配合多元化交易渠道及全面交易信息，让客户全方位把握投资良机。</p>
    <div class="img-block"><img src="img/trade-service.jpg"></div>
  </div>
  <div class="col-lg-4">
    <h2>投资策略</h2>
    <p>我们有信心中国经济可在今年以约6.7%的幅度增长。当投资者在今年稍后意识到中国经济依然稳健，中国股票的表现便可望跑赢其他市场。</p>
    <div class="img-block"><img src="img/invest-service.jpg"></div>
 </div>
  <div class="col-lg-4">
    <h2>服務範圍</h2>
    <p>在香港开设投资证券帐户，并提供港股、美股等境外股票买卖服务。为投资者提供咨询、分析、参谋等服务，最大限度降低投资风险。为投资者提供孖展融资服务，最大限度放大投资者的投资规模，实现投资效益最大化。</p>
    <div class="img-block"><img src="img/provided-service.jpg"></div>
  </div>
</div>

@endsection
@extends('frontend.template.layout')

@section('content')
<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <div class="item active">
      <img src="img/banner/aboutus_1_1170x580.jpg" alt="Contact Us">
      <!-- <div class="carousel-caption"></div> -->
    </div>
  </div>

</div>

<!-- Content -->
<div class="row about-us-block">

	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{ route('front.homepage') }}">首页</a></li>
		  <li class="active">关于我们</li>
		</ol>
	</div>		

	<!-- Company Information -->
	<div class="row">	
		<div class="col-md-12 information">
			<div class="col-md-12 page-title">关于我们</div>
			<div class="col-md-12 page-content">
				<h3>北京首通证券香港集团有限公司简介</h3>
				<p>
				北京首通证券香港集团有限公司于2012年12月在香港成立，由中国资源投资集团有限公司董事长邓文云先生出仼首位集团主席。公司注册地及办公地点位于香港岛金融商业区湾仔中环广场4005室，目前持有香港证監会颁发的第一类和第四类管制牌照(中央編号 BFY017)。
				公司主要为香港及大陆同胞等全世界有缘之士提供在香港多元化资产配置和投资的服务，以减少人民币贬值所带来的金融资产減値风险，最大限度享受港股, 美股之价值的投资盛宴。
				
					<p>
						具体服务项目如下：
						<ul>
							<li>（一）在香港开设投资证券帐户，并提供港股、美股等区域股票买卖服务。</li>
							<li>（二）为投资者提供咨询、分析、参谋等服务，最大限度降低投资风险。</li>
							<li>（三）为投资者提供孖展融资服务，最大限度放大投资者的投资规模，实现投资效益最大化。</li>
							<li>（四）为投资者配售新、旧股票。</li>
							<li>（五）为在港上市企业IPO配售和增发股票，为企业发展提供无限机会。</li>
							<li>（六）为上市企业发行各种可换股债券，为企业快速发展插上腾飞的翅膀。</li>
							<li>（七）为投资移民客户提供优质投资服务。</li>
							<li>（八）为投资者提供沪港通投资服务</li>
						</ul>					
					</p>
				</p>	
			</div>
		</div>
	</div>

</div>
@endsection
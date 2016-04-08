@extends('frontend.template.layout')

@section('content')
<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <div class="item active">
      <img src="img/banner/company-structure-banner.jpg" alt="Contact Us">
      <!-- <div class="carousel-caption"></div> -->
    </div>
  </div>

</div>

<!-- Content -->
<div class="row about-us-block">

	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="#">首页</a></li>
		  <li class="active">企业架构</li>
		</ol>
	</div>		

	<!-- Company Information -->
	<div class="row">	
		<div class="col-md-12 information">
			<div class="col-md-12 page-title">企业架构</div>
			<div class="col-md-12 page-content">
				<div class="structure-coming"><button type="button" class="btn btn-primary" style="font-size: 40px">Coming Soon</button></div>
			</div>
		</div>
	</div>

</div>
@endsection
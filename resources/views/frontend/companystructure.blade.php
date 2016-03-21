@extends('frontend.template.layout')

@section('content')
<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <div class="item active">
      <img src="img/banner/aboutus_1_1140x200.jpg" alt="Contact Us">
      <!-- <div class="carousel-caption"></div> -->
    </div>
  </div>

</div>

<!-- Content -->
<div class="row about-us-block">

	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="#">首頁</a></li>
		  <li class="active">公司架構</li>
		</ol>
	</div>		

	<!-- Company Information -->
	<div class="row">	
		<div class="col-md-12 information">
			<div class="col-md-12 page-title">公司架構</div>
			<div class="col-md-12 page-content"><img src="img/company_structure.png" style="width: 100%"></div>
		</div>
	</div>

</div>
@endsection
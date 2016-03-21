@extends('frontend.template.layout')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <div class="item active">
		<img src="img/banner/activity_1_1140x200.jpg" alt="Contact Us">
      <!-- <div class="carousel-caption"></div> -->
    </div>
  </div>

</div>

<!-- Content -->
<div class="row market-news-block">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="#">首頁</a></li>
			<li class="active">市場動態</li>
		</ol>
	</div>

	<!-- Company Information -->
	<div class="row">	
		<div class="col-md-12 information">
			<div class="col-md-12 page-title">市場動態</div>

			{{--Right Board--}}
			<div class="col-md-8 stock-block">

				@include('frontend.block.marketnews')

				@include('frontend.block.mostactive')

			</div>{{--Right Board--}}

			{{--Left Board--}}
			<div class="col-md-4 stock-block">

				@include('frontend.block.stockenquiry')

			</div>{{--Left Board--}}

		</div>
	</div>
</div>

<!-- Market News Modal -->
<div class="modal fade" id="marketNewsModal" tabindex="-1" role="dialog" aria-labelledby="marketNewsLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title" id="marketNewsLabel"></h3>
				<div id="marketNewsDatetime"></div>
			</div>
			<div class="modal-body" id="marketNewsBody"></div>
		</div>
	</div>
</div>
@endsection
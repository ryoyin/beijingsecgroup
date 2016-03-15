@extends('frontend.template.layout')

@section('content')
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
<div class="row about-us-block">
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

				<div class="col-md-7 stock-block">

					<!-- News from Infocast & Exchange -->
					<table class="table table-hover index-table">
			      <thead>
			        <tr>
			          <th colspan="5">即時新聞 - 由港滙資訊提供</th>
			        </tr>
			      </thead>
			      <tbody class="index-tbody">
			        <tr>
			          <th scope="row"></th>
			          <td></td>
			          <td><span class="glyphicon" aria-hidden="true"></span> </td>
			          <td></td>
			          <td></td>
			        </tr>
			      </tbody>
			    </table> <!-- // News from Infocast & Exchange -->


			  	<!-- Tab Panel -->
			  	<div>

					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
					    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
					    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
					    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active" id="home">
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
						  <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
						  <div role="tabpanel" class="tab-pane fade" id="messages">...</div>
						  <div role="tabpanel" class="tab-pane fade" id="settings">...</div>
					  </div>

					</div> <!-- Tab Panel -->

			  </div>
			  <div class="col-md-5"><img src="img/chart.jpg" style="width: 100%"></div>
		</div>
	</div>
</div>
@endsection
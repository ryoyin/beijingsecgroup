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
<div class="row download-block">

	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="#">首頁</a></li>
		  <li class="active">表格下載</li>
		</ol>
	</div>		

	<!-- Company Information -->
	<div class="row">	
		<div class="col-md-12 information">
			<div class="col-md-2 page-content">
				<div class="col-md-12 page-title">表格下載</div>
				<div class="col-md-12">
				<ul>
					<li><a href="#account">開戶文件</a></li>
					<li><a href="#investment">投資基金</a></li>
					<li><a href="#properities">資產管理</a></li>
				</ul>
				</div>
			</div>
			<div class="col-md-10 page-content">
				<h3><a name="account">開戶文件</a></h3>
				<table class="table table-hover download-table">
					<thead>
						<tr>
							<th>表格名稱</th>
							<th>檔案</th>
							<th style="text-align: center;">下載</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">開戶文件</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
						<tr>
							<th scope="row">開戶文件</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
						<tr>
							<th scope="row">開戶文件</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
						<tr>
							<th scope="row">開戶文件</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
						<tr>
							<th scope="row">開戶文件</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
						<tr>
							<th scope="row">開戶文件</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
					</tbody>
				</table>
				
				<h3><a name="investment">投資基金</a></h3>
				<table class="table table-hover download-table">
					<thead>
						<tr>
							<th>表格名稱</th>
							<th>檔案</th>
							<th style="text-align: center;">下載</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">投資基金</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
						<tr>
							<th scope="row">投資基金</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
						<tr>
							<th scope="row">投資基金</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
					</tbody>
				</table>
				
				<h3><a name="properities">資產管理</a></h3>
				<table class="table table-hover download-table">
					<thead>
						<tr>
							<th>表格名稱</th>
							<th>檔案</th>
							<th style="text-align: center;">下載</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">資產管理</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
						<tr>
							<th scope="row">資產管理</th>
							<td><a href="#"><i class="fa fa-file-pdf-o"></i> account_opening_form.pdf</a></td>
							<td style="text-align: center"><i class="fa fa-download"></i></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
@endsection
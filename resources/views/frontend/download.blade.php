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
					<li><a href="#account" style="font-weight: bold;">開戶文件</a></li>
					<li><a href="#agreement" style="font-weight: bold;">協議書及附件</a></li>
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
							<th scope="row">个人或联名帐戸表格</th>
							<td><a href="document/pdf/北京证券集团开戸文件（个人或联名帐戸)表格.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> 北京证券集团开戸文件（个人或联名帐戸)表格.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/北京证券集团开戸文件（个人或联名帐戸)表格.pdf" target="_blank"><i class="fa fa-download"></i></a>	</td>
						</tr>
						<tr>
							<th scope="row">公司帐戸表格</th>
							<td><a href="document/pdf/北京证券集团开戸文件（公司帐戸)表格.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> 北京证券集团开戸文件（公司帐戸)表格.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/北京证券集团开戸文件（公司帐戸)表格.pdf" target="_blank"><i class="fa fa-download"></i></a></td>
						</tr>
					</tbody>
				</table>
				
				<h3><a name="agreement">協議書及附件</a></h3>
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
							<th scope="row">協議書及附件</th>
							<td><a href="document/pdf/北京证券集团協議書及附件.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> 北京证券集团協議書及附件.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/北京证券集团協議書及附件.pdf" target="_blank"><i class="fa fa-download"></i></a></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>

</div>
@endsection
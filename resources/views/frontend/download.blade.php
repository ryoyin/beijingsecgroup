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
					<li><a href="#charge" style="font-weight: bold;">收費表</a></li>
				</ul>
				</div>
			</div>
			<div class="col-md-10 page-content">
				<table class="table table-hover download-table">
					<thead>
						<tr>
							<td colspan="3"><a name="account"><h3>開戶文件</h3></a></td>
						</tr>
						<tr>
							<th>表格名稱</th>
							<th>檔案</th>
							<th style="text-align: center;">下載</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="vertical-align: middle;">客户开户程序</th>
							<td><a href="document/pdf/客户开户程序.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 客户开户程序.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/客户开户程序.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a>	</td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">个人或联名帐戸表格</th>
							<td><a href="document/pdf/北京证券集团开戸文件（个人或联名帐戸)表格.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 北京证券集团开戸文件（个人或联名帐戸)表格.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/北京证券集团开戸文件（个人或联名帐戸)表格.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a>	</td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">公司帐戸表格</th>
							<td><a href="document/pdf/北京证券集团开戸文件（公司帐戸)表格.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 北京证券集团开戸文件（公司帐戸)表格.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/北京证券集团开戸文件（公司帐戸)表格.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">W-8BEN 表格簡要說明</th>
							<td><a href="document/pdf/W-8BEN 表格簡要說明.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> W-8BEN 表格簡要說明.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/W-8BEN 表格簡要說明.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">W8-BEN外國帐户税收遵重法</th>
							<td><a href="document/pdf/W8-BEN外國帐户税收遵重法.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> W8-BEN外國帐户税收遵重法.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/W8-BEN外國帐户税收遵重法.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">客戸存款确认</th>
							<td><a href="document/pdf/客戸存款确认.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 客戸存款确认.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/客戸存款确认.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">客戶提款指示</th>
							<td><a href="document/pdf/客戶提款指示.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 客戶提款指示.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/客戶提款指示.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a></td>
						</tr>
					</tbody>
					<thead>
						<tr>
							<td colspan="3"><a name="agreement"><h3>協議書及附件</h3></a></td>
						</tr>
						<tr>
							<th>表格名稱</th>
							<th>檔案</th>
							<th style="text-align: center;">下載</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="vertical-align: middle;">協議書及附件</th>
							<td><a href="document/pdf/北京证券集团協議書及附件.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 北京证券集团協議書及附件.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/北京证券集团協議書及附件.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">資本投資者入境計劃協議</th>
							<td><a href="document/pdf/資本投資者入境計劃協議.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 資本投資者入境計劃協議.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/資本投資者入境計劃協議.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">資本投資者入境計劃規則</th>
							<td><a href="document/pdf/資本投資者入境計劃規則.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 資本投資者入境計劃規則.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/資本投資者入境計劃規則.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a></td>
						</tr>
					</tbody>
					<thead>
						<tr>
							<td colspan="3"><a name="charge"><h3>收費表</h3></a></td>
						</tr>
						<tr>
							<th>表格名稱</th>
							<th>檔案</th>
							<th style="text-align: center;">下載</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="vertical-align: middle;">2016收費表</th>
							<td><a href="document/pdf/2016收費表.pdf" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 2016收費表.pdf</a></td>
							<td style="text-align: center"><a href="document/pdf/2016收費表.pdf" target="_blank"><button class="btn btn-primary">下載檔案</button></a></td>
						</tr>
					</tbody>
				</table>

				<h4 align="right">以上文件需要使用 Acrobat Reader 軟件來開啟，<a href="http://www.adobe.com/go/getreader">按此下載 <img src="{{ asset('/img/Get_Adobe_Acrobat_Reader_DC_web_button_158x39.fw.png') }}"></a></h4>

		</div>
		</div>
	</div>

</div>
@endsection
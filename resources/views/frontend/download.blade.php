@extends('frontend.template.layout')

@section('content')
<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <div class="item active">
      <img src="img/banner/banner2_1140x200.jpg" alt="Contact Us">
      <!-- <div class="carousel-caption"></div> -->
    </div>
  </div>

</div>

<!-- Content -->
<div class="row download-block">

	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{ route('front.homepage') }}">首页</a></li>
		  <li class="active">{{ trans('web.form_download') }}</li>
		</ol>
	</div>		

	<!-- Company Information -->
	<div class="row">	
		<div class="col-md-12 information">
			<div class="col-md-2 page-content">
				<div class="col-md-12 page-title">{{ trans('web.form_download') }}</div>
				<div class="col-md-12">
				<ul>
					<li><a href="#account" style="font-weight: bold;">开户文件</a></li>
					<li><a href="#agreement" style="font-weight: bold;">协议书及附件</a></li>
					<li><a href="#charge" style="font-weight: bold;">收费表</a></li>
				</ul>
				</div>
			</div>
			<div class="col-md-10 page-content">
				<table class="table table-hover download-table">
					<thead>
						<tr>
							<td colspan="3"><a name="account"><h3>开户文件</h3></a></td>
						</tr>
						<tr>
							<th>表格名称</th>
							<th>档案</th>
							<th style="text-align: center;">档案</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="vertical-align: middle;">客户开户程序</th>
							<td><a href="{{ asset('document/pdf/chi/客户开户程序.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 客户开户程序.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/客户开户程序.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a>	</td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">个人或联名帐戸表格</th>
							<td><a href="{{ asset('document/pdf/chi/北京证券集团开戸文件（个人或联名帐戸)表格.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 北京证券集团开戸文件（个人或联名帐戸)表格.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/北京证券集团开戸文件（个人或联名帐戸)表格.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a>	</td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">公司帐戸表格</th>
							<td><a href="{{ asset('document/pdf/chi/北京证券集团开戸文件（公司帐戸)表格.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 北京证券集团开戸文件（公司帐戸)表格.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/北京证券集团开戸文件（公司帐戸)表格.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">W-8BEN 表格简要说明</th>
							<td><a href="{{ asset('document/pdf/chi/W-8BEN 表格簡要說明.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> W-8BEN  表格简要说明.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/W-8BEN 表格簡要說明.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">W8-BEN外国账户税收遵从法</th>
							<td><a href="{{ asset('document/pdf/chi/W8-BEN外國帐户税收遵重法.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> W8-BEN外国账户税收遵从法.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/W8-BEN外國帐户税收遵重法.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">客戸存款确认</th>
							<td><a href="{{ asset('document/pdf/chi/客戸存款确认.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 客戸存款确认.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/客戸存款确认.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">客户提款指示</th>
							<td><a href="{{ asset('document/pdf/chi/客戶提款指示.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 客户提款指示.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/客戶提款指示.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a></td>
						</tr>
					</tbody>
					<thead>
						<tr>
							<td colspan="3"><a name="agreement"><h3>协议书及附件</h3></a></td>
						</tr>
						<tr>
							<th>表格名称</th>
							<th>档案</th>
							<th style="text-align: center;">档案</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="vertical-align: middle;">北京证券集团协议书及附件</th>
							<td><a href="{{ asset('document/pdf/chi/北京证券集团協議書及附件.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 北京证券集团协议书及附件.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/北京证券集团協議書及附件.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">资本投资者入境计划协议</th>
							<td><a href="{{ asset('document/pdf/chi/資本投資者入境計劃協議.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 资本投资者入境计划协议.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/資本投資者入境計劃協議.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a></td>
						</tr>
						<tr>
							<th scope="row" style="vertical-align: middle;">资本投资者入境计划规则</th>
							<td><a href="{{ asset('document/pdf/chi/資本投資者入境計劃規則.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 资本投资者入境计划规则.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/資本投資者入境計劃規則.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a></td>
						</tr>
					</tbody>
					<thead>
						<tr>
							<td colspan="3"><a name="charge"><h3>收费表</h3></a></td>
						</tr>
						<tr>
							<th>表格名称</th>
							<th>档案</th>
							<th style="text-align: center;">档案</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="vertical-align: middle;">2016收费表</th>
							<td><a href="{{ asset('document/pdf/chi/2016收費表.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 2016收费表.pdf</a></td>
							<td style="text-align: center"><a href="{{ asset('document/pdf/chi/2016收費表.pdf') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a></td>
						</tr>
					</tbody>
				</table>

				<h4 align="right">以上文件需要使用 Acrobat Reader 软件来开启，<a href="http://www.adobe.com/go/getreader">按此下载 <img src="{{ asset('/img/Get_Adobe_Acrobat_Reader_DC_web_button_158x39.fw.png') }}"></a></h4>

		</div>
		</div>
	</div>

</div>
@endsection
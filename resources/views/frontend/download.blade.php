@extends('frontend.template.layout')

@section('content')
<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <div class="item active">
      <img src="img/banner/banner2_1170x200.jpg" alt="Contact Us">
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
			<div class="col-md-2 page-content left">
				<div class="col-md-12 page-title">{{ trans('web.form_download') }}</div>
				<div class="col-md-12">
					<div class="list-group">
						<a href="#account" class="list-group-item active">开户文件</a>
						<a href="#agreement" class="list-group-item">协议书及附件</a>
						<a href="#charge" class="list-group-item">收费表</a>
						<a href="#others" class="list-group-item">其他下载</a>
						<a href="#apk" class="list-group-item">Android APK 下载</a>
					</div>
					<script>
						$('.list-group-item').click(function() {
							$('.list-group-item').removeClass('active');
							$(this).addClass('active');
						});
					</script>
				</div>
			</div>
			<div class="col-md-10 page-content right">
				<table class="table table-hover download-table">
					@foreach($pdf AS $section => $forms)
						<thead>
							<tr>
								<td colspan="3"><a name="{{ $forms['name'] }}"><h3>{{ $section }}</h3></a></td>
							</tr>
							<tr>
								<th>表格名称</th>
								<th>档案</th>
								<th style="text-align: center;">档案</th>
							</tr>
						</thead>
						<tbody>

							@foreach($forms['form'] AS $key => $val)
								<tr>
									<th scope="row" style="vertical-align: middle;">{{ $key }}</th>
									<td><a href="{{ asset('document/pdf/chi/'.$val) }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> {{ $val }}</td>
									<td style="text-align: center"><a href="{{ asset('document/pdf/chi/'.$val) }}" target="_blank"><button class="btn btn-primary">下载档案</button></a>	</td>
								</tr>
							@endforeach

						</tbody>
					@endforeach

						<thead>
						<tr>
							<td colspan="3"><a name="apk"><h3>Android APK</h3></a></td>
						</tr>
						<tr>
							<th>表格名称</th>
							<th>档案</th>
							<th style="text-align: center;">档案</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row" style="vertical-align: middle;">InvesTrade_bjsgRelease-1.3.5-release.2</th>
								<td><a href="{{ asset('document/apk/InvesTrade_bjsgRelease-1.3.5-release.2.apk') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> InvesTrade_bjsgRelease-1.3.5-release.2.apk</td>
								<td style="text-align: center"><a href="{{ asset('document/apk/InvesTrade_bjsgRelease-1.3.5-release.2.apk') }}" target="_blank"><button class="btn btn-primary">下载档案</button></a>	</td>
							</tr>
						</tbody>

				</table>

				<h4 align="right">以上文件需要使用 Acrobat Reader 软件来开启，<a href="http://www.adobe.com/go/getreader">按此下载 <img src="{{ asset('/img/Get_Adobe_Acrobat_Reader_DC_web_button_158x39.fw.png') }}"></a></h4>

		</div>
		</div>
	</div>

</div>
@endsection
@extends('frontend.template.layout')

@section('content')
<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <div class="item active">
      <img src="img/banner/contactus_1_1140x510.jpg" alt="Contact Us">
      <!-- <div class="carousel-caption"></div> -->
    </div>
  </div>

</div>

<!-- Content -->
<div class="row contact-us-block">

	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="#">首页</a></li>
		  <li class="active">联络我们</li>
		</ol>
	</div>		

	<!-- Company Information -->
	<div class="row">	
		<div class="col-md-6 information">
			<div class="col-md-12 page-title">联络我们</div>
			<div class="col-md-12 title"><h2><b>香港办公室</b></h2></div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">办公时间 </div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-briefcase"></i> 星期一至五 上午九时至下午六时</div>
			</div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">电话</div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-phone"></i> (852) 3899 1373</div>
			</div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">传真</div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-fax"></i> (852) 3899 1388</div>
			</div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">电邮</div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-envelope"></i> <a href="mailto:cs@beijingsecgroup.com">cs@beijingsecgroup.com</a></div>
			</div>

			<div class="row">
				<div class="col-md-12 information">
					<div class="col-md-12 page-title">查询</div>
					<form id="enquiry">
						<meta name="csrf-token" content="{{ csrf_token() }}">
						<div class="col-md-12 content" id="sent-result">
							<p class="bg-success" style="display: none;">已成功送出你的查询，我们会尽快联络阁下。</p>
							<p class="bg-danger" style="display: none;">对不起，你都查询未能送出。</p>
						</div>
						<div class="col-md-2 col-xs-2 title">名称</div>
						<div class="col-md-10 col-xs-10 content"><input type="text" name="enquiry_name"></div>
						<div class="col-md-2 col-xs-2 title">电话</div>
						<div class="col-md-10 col-xs-10 content"><input type="text" name="enquiry_tel"></div>
						<div class="col-md-2 col-xs-2 title">电邮</div>
						<div class="col-md-10 col-xs-10 content"><input type="text" name="enquiry_email"></div>
						<div class="col-md-2 col-xs-2 title">內容</div>
						<div class="col-md-10 col-xs-10 content"><textarea name="enquiry_content"></textarea></div>
						<div class="col-md-12" align="right"><button type="submit" class="btn btn-info btn-lg">提交查询</button></div>
					</form>
				</div>
			</div>
		</div>
		
		<div class="col-md-6 information">
			<div class="row">	
				<div class="col-md-12" style="padding-bottom: 10px;">香港湾仔港湾道 18 号中环广场 4005 室</div>
				<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
			
				<div style="width:100%;height:530px;border:#ccc solid 1px;padding: 0px 15px;" id="dituContent"></div>

				<script type="text/javascript" src="js/baiduMap.js"></script>
			</div>
		</div>
	</div>
	
{{--	<div class="row" style="padding-top: 25px;">
		<div class="col-md-6 information">
			<div class="col-md-12 page-title">查询</div>
			<form id="enquiry">
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<div class="col-md-12 content" id="sent-result">
					<p class="bg-success" style="display: none;">已成功送出你的查询，我们会尽快联络阁下。</p>
					<p class="bg-danger" style="display: none;">对不起，你都查询未能送出。</p>
				</div>
				<div class="col-md-2 col-xs-2 title">名称</div>
				<div class="col-md-10 col-xs-10 content"><input type="text" name="enquiry_name"></div>
				<div class="col-md-2 col-xs-2 title">电话</div>
				<div class="col-md-10 col-xs-10 content"><input type="text" name="enquiry_tel"></div>
				<div class="col-md-2 col-xs-2 title">电邮</div>
				<div class="col-md-10 col-xs-10 content"><input type="text" name="enquiry_email"></div>
				<div class="col-md-2 col-xs-2 title">內容</div>
				<div class="col-md-10 col-xs-10 content"><textarea name="enquiry_content"></textarea></div>
				<div class="col-md-12" align="right"><button type="submit" class="btn btn-info btn-lg">提交查询</button></div>
			</form>			
		</div>
		
		<div class="col-md-6 information"></div>
	</div>		--}}

	<script>
	$( "#enquiry" ).submit(function( event ) {

		//pack form data for submit
		var postData = $(this).serializeArray();

		$.ajax({
			headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
	    method: "POST",
	    url: "/mail/send_enquiry",
	    data: postData
	  })
	  .done(function( data ) {
	    if(data == 'sent') {
	      $(".bg-success").show().fadeOut(5000);
	    } else {
	      $(".bg-danger").show().fadeOut(5000);
	    }    
	  });	  
	  
	  //reset input field
	  $("input").each(function() { $(this).val(''); });

	  //reset content field
	  $("textarea").val('');

	  event.preventDefault();

	});
	</script>
	
</div>
@endsection
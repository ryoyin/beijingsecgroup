<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<jsp:include page="template/front_header.jsp" />

<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <div class="item active">
      <img src="img/banner/contactus_1_1140x200.jpg" alt="Contact Us">
      <!-- <div class="carousel-caption"></div> -->
    </div>
  </div>

</div>

<!-- Content -->
<div class="row contact-us-block">

	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="#">首頁</a></li>
		  <li class="active">聯絡我們</li>
		</ol>
	</div>		

	<!-- Company Information -->
	<div class="row">	
		<div class="col-md-5 information">
			<div class="col-md-12 page-title">聯絡我們</div>
			<div class="col-md-12 title"><h2><b>香港辦公室</b></h2></div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">辦公時間 </div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-briefcase"></i> 星期一至五 上午九時至下午六時</div>
			</div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">電話</div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-phone"></i> (852) 3899 1373</div>
			</div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">傳真</div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-fax"></i> (852) 3899 1388</div>
			</div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">電郵</div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-envelope"></i> <a href="mailto:cs@beijingsecgroup.com">cs@beijingsecgroup.com</a></div>
			</div>
		</div>
		
		<div class="col-md-7 information">
			<div class="row">	
				<div class="col-md-12" style="padding-bottom: 10px;">香港灣仔港灣道 18 號中環廣場 4005 室</div>
				<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
			
				<div style="width:100%;height:215px;border:#ccc solid 1px;padding: 0px 15px;" id="dituContent"></div>
				
				<script type="text/javascript" src="js/baiduMap.js"></script>
			</div>
		</div>
	</div>
	
	<div class="row" style="padding-top: 25px;">	
		<div class="col-md-5 information">
			<div class="col-md-12 title"><h2><b>北京咨询中心</b></h2></div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">辦公時間 </div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-briefcase"></i> 星期一至五 上午九時至下午六時</div>
			</div>
			<div class="row">	
				<div class="col-md-3 col-xs-3 title">電話</div>
				<div class="col-md-9 col-xs-9 content"><i class="fa fa-phone"></i> (10) 8498 7540</div>
			</div>
		</div>
		
		<div class="col-md-7 information">
			<div class="row">	
				<div class="col-md-12" style="padding-bottom: 10px;">北京市朝阳区北辰东路8号辰运大厦东区二层</div>
				<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
			
				<div style="width:100%;height:215px;border:#ccc solid 1px;padding: 0px 15px;" id="dituContent"></div>
				
				<script type="text/javascript" src="js/baiduMap.js"></script>
			</div>
		</div>
	</div>
		
	<div class="row" style="padding-top: 25px;">
		<div class="col-md-6 information">
			<div class="col-md-12 page-title">查詢</div>
			<form>
				<div class="col-md-2 col-xs-2 title">名稱</div>
				<div class="col-md-10 col-xs-10 content"><input type="text" name="enquiry_name"></div>
				<div class="col-md-2 col-xs-2 title">電話</div>
				<div class="col-md-10 col-xs-10 content"><input type="text" name="enquiry_tel"></div>
				<div class="col-md-2 col-xs-2 title">電郵</div>
				<div class="col-md-10 col-xs-10 content"><input type="text" name="enquiry_fax"></div>
				<div class="col-md-2 col-xs-2 title">內容</div>
				<div class="col-md-10 col-xs-10 content"><textarea name="enquiry_content"></textarea></div>
				<div class="col-md-12" align="right"><button type="submit" class="btn btn-info btn-lg">提交查詢</button></div>
			</form>			
		</div>
		
		<div class="col-md-6 information"></div>
	</div>			
	
</div>

<jsp:include page="template/front_footer.jsp" />
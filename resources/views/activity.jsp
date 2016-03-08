<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<jsp:include page="template/front_header.jsp" />

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
			  <div class="col-md-5"><img src="img/chart.jpg" style="width: 100%"></div>
		</div>
	</div>
</div>

<jsp:include page="template/front_footer.jsp" />
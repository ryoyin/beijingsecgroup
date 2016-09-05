@extends('frontend.template.layout')

@section('content')
<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner main_banner" role="listbox">
    <div class="item active">
      <img src="img/banner/aboutus_1_1170x580.jpg" alt="Contact Us">
      {{--<div class="carousel-caption" style="font-size: 20px; background-color: #1581a0; padding: 6px 12px">--}}
		  {{--提供多元化的金融服務和產品<br>--}}
		  {{--把握中國經濟的強大增長潛力<br>--}}
		  {{--持續為客戶投資提供穩健回報--}}
	  {{--</div>--}}
    </div>
  </div>

</div>

<!-- Content -->
<div class="row about-us-block">

	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{ route('front.homepage') }}">首页</a></li>
		  <li class="active">{{ trans('web.appointment') }}</li>
		</ol>
	</div>		

	<!-- Company Information -->
	<div class="row contact-us-block appointment-block" style="">
		<div class="col-md-12 information">
			<div class="col-md-12 page-title">{{ trans('web.appointment') }}</div>
			<div class="col-md-12 page-content">
				<form id="appointment">

					<meta name="csrf-token" content="{{ csrf_token() }}">

					<div class="col-md-12 content" id="sent-result">
						<p class="bg-success" style="display: none;">
                            <b>您已成功开户，户口号码是:</b> #<span id="account_number"></span><br><br>
                            感谢您对北京首通证券香港集团有限公司的支持和信任，我们将派专人与您联络。<br><br>
                            <b>国内电话:</b> 400 900 1028<br>
                            <b>聯絡人:</b> 徐成<br><br>
                            <b>香港电话:</b> (852) 3899 1359 /（852）38991357<br>
                            <b>聯絡人:</b> 叶先生、陈小姐<br><br>

                            <b>请您准备好下列资料:</b><br>
                            1.	身份证正本及正副面复印件<br>
                            2.	港澳通行证正本及复印件<br>
                            3.	香港银行账户<br>
                            4.	补签北京首通证券香港集团有限公司《客户開戶协议书及附件》

                        </p>
						<p class="bg-danger" style="display: none;">对不起，你的預約未能送出。你可以致电 (852) 3899 1333</p>
					</div>

                    <div id="appointment-data">

                        <div class="row">
                            <div class="col-md-2 col-xs-2 title">姓名</div>
                            <div class="col-md-5 col-xs-5 content"><input type="text" name="appointment_name"></div>
                            <div class="col-md-2 col-xs-2 title" style="padding-left: 7px;">性別</div>
                            <div class="col-md-3 col-xs-3 content">
                                <select name="appointment_sexual">
                                    <option value="-"> -- </option>
                                    <option value="Male">先生</option>
                                    <option value="Female">女仕</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 col-xs-2 title">电话</div>
                            <div class="col-md-10 col-xs-10 content"><input type="text" name="appointment_tel"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 col-xs-2 title">地址</div>
                            <div class="col-md-10 col-xs-10 content"><input type="text" name="appointment_address"></div>
                        </div>

                        {{--<div class="col-md-2 col-xs-12 title">验证码</div>
                        <div class="col-md-7 col-xs-7 content"><input type="text" name="appointment_code"></div>
                        <div class="col-md-3 col-xs-5 content" style="text-align: center;"><button class="btn btn-warning" type="button" style="height: 30px; padding: 4px 12px;" onclick="getCode();">获取验证码</button></div>--}}

                        <div class="row">
                            <div class="col-md-2 col-xs-2 title">电邮</div>
                            <div class="col-md-10 col-xs-10 content"><input type="text" name="appointment_email"></div>
                        </div>

                        {{--<div class="col-md-2 col-xs-12 title">预约时段</div>--}}
                        {{--<div class="col-md-10 col-xs-12 content">--}}
                            {{--<select name="appointment_datetime">--}}
                                {{--<option value="-"> -- 请选择 -- </option>--}}
                                {{--<option value="morning">上午</option>--}}
                                {{--<option value="afternoon">下午</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-2 col-xs-12 title">留言</div>--}}
                        {{--<div class="col-md-10 col-xs-12 content">--}}
                            {{--<textarea name = "appointment_message"></textarea>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-2 col-xs-12 title">地点</div>
                        <div class="col-md-10 col-xs-12 content">
                            <script src="{{ asset('js/distpicker/distpicker.data.min.js') }}"></script>
                            <script src="{{ asset('js/distpicker/distpicker.min.js') }}"></script>
                            <div data-toggle="distpicker">
                                <select data-province="---- 选择省 ----" name="appointment_province"></select>
                                <select data-city="---- 选择市 ----" name="appointment_city"></select>
                                <select data-district="---- 选择区 ----" name="appointment_district"></select>
                            </div>
                        </div>--}}

                        <div class="col-md-12 col-xs-12" align="right"><button type="submit" class="btn btn-info btn-lg">{{ trans('web.appointment') }}</button></div>
                    </div>
				</form>
			</div>
		</div>
	</div>

</div>

<script>
	$( "#appointment" ).submit(function( event ) {

//        event.preventDefault();

        var $errorMsg = '';

        var $name = $('input[name=appointment_name]').val();
        var $tel = $('input[name=appointment_tel]').val();
        var $email = $('input[name=appointment_email]').val();
//        var $code = $('input[name=appointment_code]').val();

        if($('select[name=appointment_sexual]').val() == '-') {
            $errorMsg += '请选择性别!\n';
        }

        if($name.length == 0) {
            $errorMsg += '请输入名称!\n';
        }

        if($tel.length < 8) {
            $errorMsg += '请输入电话号码!\n';
        }

        if(validateEmail($email) === false && $email.trim() != "") {
            $errorMsg += '请输入正确的电邮地址!\n';
        }

//        if($('select[name=appointment_datetime]').val() == '-') {
//            $errorMsg += '请选择预约时段!\n';
//        }

/*        if($code.length < 4) {
            $errorMsg += '请输入验证码!\n';
        }*/

        if($errorMsg != '') {
            alert($errorMsg);
            return false;
        }

        //pack form data for submit
        var postData = $(this).serializeArray();

        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{ route('email.send_web_appointment') }}",
            data: postData
        })
        .done(function( data ) {
            $('#appointment-data').hide();
            if(data != 'failed') {
                $("#account_number").html(data);
                $(".bg-success").show();
            } else {
                $(".bg-danger").show();
            }

        });

        event.preventDefault();

    });

   /* function getCode() {

    }*/

    function validateEmail(email){
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
//            alert("Not a valid e-mail address");
            return false;
        }
    }
</script>


@endsection
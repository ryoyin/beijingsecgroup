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
						<p class="bg-success" style="display: none;">已成功送出你的查询，我们会尽快联络阁下。</p>
						<p class="bg-danger" style="display: none;">对不起，你都查询未能送出。</p>
					</div>

					<div class="col-md-2 col-xs-12 title">性別</div>
					<div class="col-md-10 col-xs-12 content">
						<select name="appointment_sexual">
							<option value="-"> -- </option>
							<option value="Male">先生</option>
							<option value="Female">女仕</option>
						</select>
					</div>

					<div class="col-md-2 col-xs-12 title">姓名</div>
					<div class="col-md-10 col-xs-12 content"><input type="text" name="appointment_name"></div>

					<div class="col-md-2 col-xs-12 title">电话</div>
					<div class="col-md-10 col-xs-12 content"><input type="text" name="appointment_tel"></div>

					{{--<div class="col-md-2 col-xs-12 title">验证码</div>
					<div class="col-md-7 col-xs-7 content"><input type="text" name="appointment_code"></div>
					<div class="col-md-3 col-xs-5 content" style="text-align: center;"><button class="btn btn-warning" type="button" style="height: 30px; padding: 4px 12px;" onclick="getCode();">获取验证码</button></div>--}}

					<div class="col-md-2 col-xs-12 title">地点</div>
					<div class="col-md-10 col-xs-12 content">
						<script src="{{ asset('js/distpicker/distpicker.data.min.js') }}"></script>
						<script src="{{ asset('js/distpicker/distpicker.min.js') }}"></script>
						<div data-toggle="distpicker">
							<select data-province="---- 选择省 ----" name="appointment_province"></select>
							<select data-city="---- 选择市 ----" name="appointment_city"></select>
							<select data-district="---- 选择区 ----" name="appointment_district"></select>
						</div>
					</div>

					<div class="col-md-12 col-xs-12" align="right"><button type="submit" class="btn btn-info btn-lg">提交查询</button></div>
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
            if(data == 'sent') {
                $(".bg-success").show().fadeOut(5000);
            } else {
                $(".bg-danger").show().fadeOut(5000);
            }
        });

        event.preventDefault();

    });

   /* function getCode() {

    }*/
</script>

@endsection
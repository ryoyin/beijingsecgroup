		<!-- Site footer -->
		<footer class="footer">
			<div class="app-block hidden">
				<div class="app-container">
					<ul>
						<li class="app-item">
							<ul class="ios_icon">
								<li><img src="{{ asset('img/app_store_download_icon.png') }}" style="height: 78px; padding: 7px;"></li>
								<li>{{ trans('web.iphone_trade_download') }}</li>
							</ul>					
						</li>
						<li class="app-item">
							<ul class="android_icon">
								<li><img src="{{ asset('img/google-play-badge.png') }}" style="height: 78px; padding: 7px;"></li>
								<li>{{ trans('web.android_trade_download') }}</li>
							</ul>					
						</li>
						{{--<li class="app-item">--}}
							{{--<ul class="weixin_qr">--}}
								{{--<li><img src="{{ asset('img/weixin_qrcode.jpg') }}" style="height: 78px"></li>--}}
								{{--<li>微信關注</li>--}}
							{{--</ul>--}}
						{{--</li>--}}
					</ul>
				</div>
			</div>
			
			<div class="clearfix"></div>

			<div class="bottom">
				<p><b>&copy; 2016 版权属北京证券集团有限公司所有 </b></p>
							 
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal">免责声明</a></li>
					{{--<li>|</li>--}}
					{{--<li><a href="#">私隐条款</a></p></li>--}}
				</ul>
			</div>
		</footer>
	      
		<!-- Modal -->
        <style>
            /*#agreement_sim { display: none;}*/
            #agreement_trad { display: none;}
            #agreement_eng { display: none;}
        </style>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <script>
                        function change_lang(lang) {
                            $('.agreement_show').hide();
                            $('#agreement_'+lang).show().addClass('agreement_show');
                            $('.accept_agreement').attr('checked', false);
                        }
                    </script>
                    @include('frontend.block.htmloutput.agreement_sim')
                    @include('frontend.block.htmloutput.agreement_trad')
                    @include('frontend.block.htmloutput.agreement_eng')
                </div>
		  </div>
		</div><!-- /modal -->
        <script>
            $('#myModal').modal({
                backdrop: 'static',
                keyboard: false,
                show: false
            })

            if(Cookies.get('accept_agreement') != 1) {
                $('#myModal').modal('toggle');
            }

            function accept_agreement() {
                if($('.accept_agreement').is(":checked")) {
                    $('#myModal').modal('toggle');
                    Cookies.set('accept_agreement', 1, { expires: 30 });
                }
            }
        </script>
        <style>
            .modal-dialog {
                width: 50%; /* respsonsive width */
                /*margin-left:-40%*/
            }
        </style>

	</div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

	<!-- Small modal -->
	<div class="modal fade overlay-loading" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-sm">
			<div class="modal-content"> 载入中... </div>
		</div>
	</div>

</body>
</html>
		<!-- Site footer -->
		<footer class="footer">
			<div class="app-block">
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
						{{--<li class="app-item">
							<ul class="weixin_qr">
								<li><img src="{{ asset('img/weixin_qrcode.jpg') }}" style="height: 78px"></li>
								<li>微信關注</li>
							</ul>					
						</li>--}}
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
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 class="modal-title" id="myModalLabel"><b>免责声明</b></h3>
		      </div>
		      <div class="modal-body">
				本网站内所提供的金融市场数据、消息、研究及其他资料均受到适当的版权法例所保障。此等资料不应在未经北京证券集团有限公司（下称「本公司」）、其资料供应商或其内容版权人之同意前，复制、传送、出售、广播、传闻、出版或作任何其他商业用途。<br><br>
				本网页内所载之资料均由可靠来源获得，惟本公司、其资料供应商或其认可者并不声明、保证或承诺此等资料在任何特定的用途上俱为准确、完整、及时、可靠或适当。本公司　或其认可资料供应商声明并不会承担任何第三者因使用本网页、或依赖其内容或服务而引致的民事侵权行为责任、合约责任或其他任何责任。<br><br>
				本网页的电子交易服务是由Infocast Limited（汇港资讯有限公司）提供。客户应了解、明白及同意自行承担由下述风险所引致或涉及的一切后果：<br><br>
				i. 互联网上的交易可能会因为互联网交通繁忙而出现传送中断、停顿、延误等情况；<br><br>
				ii. 互联网属公共设施，传送数据、资料可能会因各种环境因素等影响而出现错误；<br><br>
				iii. 投资者有可能因网上交易系统（包括于电脑或其他装置上的）出现故障、感染病毒或通讯线路损坏等原因造成网 上交易无效或错误；<br><br>
				v. 投资者丢失或泄露网上交易系统（包括于电脑或其他装置上的）登入密码，或其用以网上交易的电脑或其他装置被“黑客”入侵，投资者的身份可能会被冒认作投资交易，而此等交易会导致投资者蒙受损失或损害。<br><br>
				本公司、其资料供应商或其认可者并不会在任何情况下赔偿因使用本网页之内容或服务而引致的任何损失。<br><br>
				本公司、其资料供应商或其认可者有权随时终止或更改本网页之内容或服务而毋须事先通知阁下。<br><br>
				本公司不会承担因使用或依赖本网页全部或部份的内容或服务而引致的任何损失或任何法律责任。<br><br>
				  任何一种投资都存在风险。金融产品的价格可能会出现起跌，在某些情况下甚至会变得毫无价值，致使蒙受损失。在作出投资决定前，投资者应仔细考虑投资产品/服务是否适合自身财务状况、投资预期、风险偏好以及其他有关情况，亦应了解投资相关产品/服务的潜在风险。
				  建议您仔细阅读开户表格中的《风险披露声明》<br><br>

				  北京证券集团有限公司保留一切权利。
		      </div>
		    </div>
		  </div>
		</div>

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
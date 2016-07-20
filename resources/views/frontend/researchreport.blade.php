@extends('frontend.template.layout')

@section('content')

<style>
.marketnews-title span {
    color: deepskyblue;
}
</style>

<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner main_banner" role="listbox">
        <div class="item active">
            <img src="{{ asset('img/banner/news_1_1170x350.jpg') }}" alt="Contact Us">
            <!-- <div class="carousel-caption"></div> -->
        </div>
    </div>

</div>

<!-- Content -->
<div class="row download-block">

    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('front.homepage') }}">首页</a></li>
            <li class="active">研究报告</li>
        </ol>
    </div>

    <!-- Company Information -->
    <div class="row">
        <div class="col-md-12 information">
            <div class="col-md-12 page-content research-report">
                <div class="col-md-12 page-title">研究报告</div>
                <div class="col-md-7">
                    <table class="table">
                        <tbody id="news-content">

                        <tr>
                            <td>
                                <div class="title" id="research-10">中兴通讯（763-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-20</li>
                                </ul>
                                <div class="content">
                                    中兴通讯为中国高科技通信设备主导供货商之一，通过提供客户化的产品及解决方案，目前主要服务于中国及其他发展迅速的新兴市场。
                                    集团与中国电信、中国网通、中国联通和中国移动等中国主导的电信运营商建立了长期稳定的合作关系。
                                    另集团向全球60多个国家和地区的150多家客户销售产品，包括印度、印度尼西亚、巴基斯坦、泰国、俄罗斯、罗马尼亚、尼日利亚和埃及等。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-10" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 中兴通讯（763-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-20</li>
                                                </ul>

                                                <p>
                                                    中兴通讯为中国高科技通信设备主导供货商之一，通过提供客户化的产品及解决方案，
                                                    目前主要服务于中国及其他发展迅速的新兴市场。集团与中国电信、中国网通、中国联通和中国移动等中国主导的电信运营商建立了长期稳定的合作关系。
                                                    另集团向全球60多个国家和地区的150多家客户销售产品，包括印度、印度尼西亚、巴基斯坦、泰国、俄罗斯、罗马尼亚、尼日利亚和埃及等。
                                                </p>

                                                <p>
                                                    据报导中兴通讯，宣布推出新型智能手机ZMAX Pro。
                                                    据介绍，ZMAX Pro将于8月1日以99美元的超低折扣价，正式连手美国移动运营商Metropcs推出新型智能手机，
                                                    成为第一款获得美国运营商支持的、配有指纹传感器的价格在100美元以内的手机。预期在新消息刺激下，该股股价有望攀升。
                                                </p>

                                                <p>
                                                    <b>策略：</b>建议于现价约10.4元附近吸纳，上望11.5元，跌穿9.5元止蚀。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/0720_763中兴通讯推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="title" id="research-9">瑞声科技（2018-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-20</li>
                                </ul>
                                <div class="content">
                                    瑞声科技为全球领先的微型声学器件制造商之一，产品应用于移动手机、掌上计算机、游戏机控制游戏杆、笔记本计算机及其他消费性电子装置，
                                    如电子阅读器等。根据瑞星科技2015年年报所示，期内总收入按年上升32.2%至约117.389亿元人民币；
                                    净利按年增加 34.1%达31.69亿元人民币，反映集团历史盈利能力不俗。而内地智能手机不断升级换代，对声学设备要求提高；
                                    且市场憧憬iPhone7有可能于本年秋季退出，预期将持续为集团贡献盈利，料股价可望上升。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-9" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 瑞声科技（2018-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-20</li>
                                                </ul>

                                                <p>
                                                    瑞声科技为全球领先的微型声学器件制造商之一，产品应用于移动手机、掌上计算机、游戏机控制游戏杆、笔记本计算机及其他消费性电子装置，
                                                    如电子阅读器等。根据瑞星科技2015年年报所示，期内总收入按年上升32.2%至约117.389亿元人民币；
                                                    净利按年增加 34.1%达31.69亿元人民币，反映集团历史盈利能力不俗。而内地智能手机不断升级换代，对声学设备要求提高；
                                                    且市场憧憬iPhone7有可能于本年秋季退出，预期将持续为集团贡献盈利，料股价可望上升。
                                                </p>

                                                <p>
                                                    此外，经过去十年的全力研究，瑞声科技已可提供有关无线射频结构件、触控、声学及光学，多元化且独特的整合方案。
                                                    年内集团获取284项专利，截至2015年底，集团共有2,206项专利及专利申请。
                                                    本行预期，瑞声未来盈利，可受惠于集团技术的不断创新，及声学产品防水及立体声效果的升级，触控的新设计及射频方案。
                                                </p>

                                                <p>
                                                    <b>策略：</b>建议回调至63元附近吸纳，上望73元，跌穿60止蚀。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/0720_2018瑞声科技推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="title" id="research-8">广汽集团（2238-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-19</li>
                                </ul>
                                <div class="content">
                                    汽车行业一方面面对中国经济持续稳定增长，城乡居民收入水平不断提高，国家持续扩大内需，
                                    石油价格低位运行、汽车后市场快速发展等有利因素，另一方面也面临中心城市限购，
                                    交通拥堵，停车难、停车贵、能源与环保压力增加以及消费行为和出行方式改变等因素的挑战，
                                    加之汽车保有量和年销量基数不断扩大，预计全年汽车产销增速为 5% 左右。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-8" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 广汽集团（2238-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-19</li>
                                                </ul>

                                                <p>
                                                    2016年，世界经济在深度调整中曲折复苏，经济形势依旧复杂严峻，作为「十三五」的开局之年，中国经济处在转型再平衡的关键时期，
                                                    经济长期向好的基本面没有改变，预计全年GDP增速将在 6.5%-7.0%。汽车行业一方面面对中国经济持续稳定增长，城乡居民收入水平不断提高，
                                                    国家持续扩大内需，石油价格低位运行、汽车后市场快速发展等有利因素，
                                                    另一方面也面临中心城市限购，交通拥堵，停车难、停车贵、能源与环保压力增加以及消费行为和出行方式改变等因素的挑战，
                                                    加之汽车保有量和年销量基数不断扩大，预计全年汽车产销增速为 5% 左右。
                                                </p>

                                                <p>
                                                    根据广汽集团最新发布的产销报告显示，6月产量共133,695部汽车，按年增加29.59%；
                                                    而销量同样不俗，共卖出136,776部汽车，按年攀升28.74%，反映该集团核心盈利可期，将刺激股价。
                                                </p>

                                                <p>
                                                    <b>策略：</b>该股现处升轨，建议于10.2元附近买入，上望12元，跌穿9.2止蚀。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/0719_2238广汽集团推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="title" id="research-7">中石化冠德（934-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-19</li>
                                </ul>
                                <div class="content">
                                    中石化冠德乃为中石化石油进口物流旗舰，内地将放宽进口石油配额，预期该集团将受惠。
                                    此外，根据集团年报所示，截至2015年止，集团纯利增长1%至10.27亿元，每股盈利41.3仙；
                                    反映该股盈利能力一贯不俗，未来股价升幅可期。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-7" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 中石化冠德（934-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-19</li>
                                                </ul>

                                                <p>
                                                    在「供给侧」改革下，国家发改委动作不断。
                                                    该局计划监控燃气企业之成本，或是在「十三五」规划内进一步推出价格及回报管制的重要一步，
                                                    目前燃气企业投资资本回报率为7.4，较其他内地公用股之5.8%为高，该行业股份投资价值料可可高一线。
                                                </p>

                                                <p>
                                                    中石化冠德乃为中石化石油进口物流旗舰，内地将放宽进口石油配额，预期该集团将受惠。
                                                    此外，根据集团年报所示，截至2015年止，集团纯利增长1%至10.27亿元，每股盈利41.3仙；
                                                    反映该股盈利能力一贯不俗，未来股价升幅可期。
                                                </p>

                                                <p>
                                                    <b>策略：</b>建议现价吸纳，上望5.25元，跌穿4.16止蚀。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/0719_934中石化冠德推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="title" id="research-1">平安保险（2318-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-18</li>
                                </ul>
                                <div class="content">
                                    平保聚焦「大金融资产」和「大医疗健康」两大产业，「综合金融+互联网」和「互联网+综合金融」两大模式并重发展，核心金融业务快速健康发展的同时，
                                    持续深化互联网金融战略体系。平保通过「综合金融+互联网」和「互联网+综合金融」的一体化架构，依托本土化优势，践行国际化标准的公司治理，
                                    以及统一的品牌、多渠道分销网络，本公司为超过两亿互联网用户和一亿客户提供保险、银行、资产管理和互联网金融产品及服务。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-1" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 平安保险（2318-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-18</li>
                                                </ul>
                                                <p>
                                                    平保聚焦「大金融资产」和「大医疗健康」两大产业，「综合金融+互联网」和「互联网+综合金融」两大模式并重发展，核心金融业务快速健康发展的同时，
                                                    持续深化互联网金融战略体系。平保通过「综合金融+互联网」和「互联网+综合金融」的一体化架构，依托本土化优势，践行国际化标准的公司治理，
                                                    以及统一的品牌、多渠道分销网络，本公司为超过两亿互联网用户和一亿客户提供保险、银行、资产管理和互联网金融产品及服务。
                                                </p>

                                                <p>
                                                    该集团近日公布业绩，指出今年首六个月其子公司平安财产保险、
                                                    平安人寿保险及平赡养老保险保费收入分别为837.85亿元人民币(下同)、1,633.48亿元及92.38亿元，
                                                    按年分别升2.88%、32.74%及24.84%。盈利有保证，预期未来股价可获支持。
                                                </p>

                                                <p>
                                                    <b>策略：</b>该股现处上升通道，建议现价吸纳，上望45元，跌穿34元止蚀。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/2318平安保险推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="title" id="research-2">腾讯（700-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-18</li>
                                </ul>
                                <div class="content">
                                    互联网+，是创新2.0下中国互联网发展新形态、新业态，是知识社会创新2.0推动下的互联网形态演进，
                                    在2015年被国务院总理李克强率先提出。在这个概念被提出之后，相关个股被市场热炒，当中腾讯控股前景更被看高一线。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-2" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 腾讯（700-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-18</li>
                                                </ul>

                                                <p>
                                                    互联网+，是创新2.0下中国互联网发展新形态、新业态，是知识社会创新2.0推动下的互联网形态演进，
                                                    在2015年被国务院总理李克强率先提出。在这个概念被提出之后，相关个股被市场热炒，当中腾讯控股前景更被看高一线。
                                                </p>

                                                <p>
                                                    腾讯近日与中国音乐集团(CMC)共同宣布，已对数字音乐业务合并达成共识，腾讯把旗下的QQ音乐业务与CMC进行合并，
                                                    通过资产置换股权成为新的音乐集团之大股东，并会全力支持其发展业务，为上市打下基石。CMC联席行政总裁谢振宇、谢国民将出任新音乐集团的联席总裁，腾讯集团副总裁彭迦信出任新音乐集团的行政总裁。
                                                </p>

                                                <p>
                                                    合并后，QQ音乐、酷狗、酷我等产品和品牌将保持独立发展，用户原来所享受服务不变，并可获得更多元化的选择。
                                                    新音乐集团将探索更多创新的产品和商业模式，以生态共荣推动中国数字音乐领域的正版化进程，助力音乐创作活力，促进行业发展。
                                                </p>

                                                <p>
                                                    <b>策略：</b>该股股价已贴近保力加通道顶部，未来有下调空间，建议回调至约180元以下吸纳，上望200元。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/700腾讯推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="title" id="research-3">德昌电机（179-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-15</li>
                                </ul>
                                <div class="content">
                                    德昌电机集团是全球最大的驱动系统及驱动部件供货商之一，其驱动系统及部件用于汽车、家居用具、办公室设备、工业产品、消费产品及医疗仪器。
                                    集团产品系列包括驱动子系统、马达、螺线管、微开关、软性印刷电路板、基建自动化及机械控制系统等。
                                    集团业务遍布20个国家，创新产品设计中心设于香港、中国、瑞士、德国、意大利、以色列、日本及美国。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-3" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 德昌电机（179-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-15</li>
                                                </ul>

                                                <p>
                                                    德昌电机集团是全球最大的驱动系统及驱动部件供货商之一，其驱动系统及部件用于汽车、家居用具、办公室设备、工业产品、消费产品及医疗仪器。
                                                    集团产品系列包括驱动子系统、马达、螺线管、微开关、软性印刷电路板、基建自动化及机械控制系统等。
                                                    集团业务遍布20个国家，创新产品设计中心设于香港、中国、瑞士、德国、意大利、以色列、日本及美国。
                                                </p>

                                                <p>
                                                    该集团近日公布截至2016年6月底止季度报告，指该集团之营业额为6.86亿美元，按年上升30%。
                                                    而未计入货币效应及收购，营业额上升4%至5.47亿美元。收购世特科国际及AML Systems为该集团营业额增加共1.44亿美元。
                                                    世特科本季度营业额为1.26亿美元，而自2016年5月18日收购AML后，其营业额为1,800万美元。
                                                </p>

                                                <p>
                                                    <b>策略：</b>该股昨日现大阳烛，预期短期走势仍利好，建议现价吸纳，跌穿16.5止蚀，上望20元。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/179德昌电机推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="title" id="research-4">信义玻璃（868-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-15</li>
                                </ul>
                                <div class="content">
                                    信义玻璃早前发布盈利预告，表示截至2016年6月底止6个月的纯利预期，按年大幅增加30%至45%。
                                    而该集团的盈利能力大幅提升，主要由于浮法玻璃业务的销售成本减少；
                                    浮法玻璃业务销量的高增长；及信义光能的盈利贡献增加。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-4" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 信义玻璃（868-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-15</li>
                                                </ul>

                                                <p>
                                                    信义玻璃早前发布盈利预告，表示截至2016年6月底止6个月的纯利预期，按年大幅增加30%至45%。
                                                    而该集团的盈利能力大幅提升，主要由于浮法玻璃业务的销售成本减少；浮法玻璃业务销量的高增长；
                                                    及信义光能的盈利贡献增加。
                                                </p>

                                                <p>
                                                    浮法玻璃主要应用在高档建筑、高档玻璃加工和太阳能光电幕墙领域以及高档玻璃家具、装饰用玻璃、仿水晶制品、灯具玻璃等，是地产建筑及新屋入伙的主要建筑材料之一。
                                                    随着内地政府不断放宽贷款利率、房屋「限购令」等，年初至今内地房地产项目销售强劲，意味下半年浮法玻璃踏入销售旺季，预期可为信义玻璃贡献盈利，将支撑股价上涨。
                                                </p>

                                                <p>
                                                    <b>策略：</b>该股本周升穿由6月中至7月初形成的下降轨道，预期股价短线仍将向好，建议现价吸纳，上望6元，跌穿5.4元止蚀。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/868信义玻璃推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="title" id="research-5">晨鸣纸业（1812-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-14</li>
                                </ul>
                                <div class="content">
                                    晨鸣纸业近日发表盈喜公告，指出因公司前期通过产能优化升级，市场竞争力增强；
                                    强化内部管理，生产成本同比下降，产品毛利率同比增加；并加大市场开拓，产品销量同比增加；
                                    及公司对外开展融资租赁业务增加，盈利能力同比提升；
                                    预期归属于上市公司股东的净利润将按年增长230-260%，达9-9.8亿人民币(下同)，基本每股收益约0.41-0.45元；去年同期的盈利为2.76亿元。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-5" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 晨鸣纸业（1812-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-14</li>
                                                </ul>

                                                <p>
                                                    过去的一年，内地造纸行业淘汰落后产能和日趋严格的环保政策迫使部分中小企业退出市场，
                                                    从而在一定程度上缓解了新增产能对行业供给造成的压力，有利于企业的自主提价行为。
                                                    加上原材料价格在低位振荡，缓解了企业的经营成本压力。落后产能的淘汰将为造纸行业的发展扫清障碍，
                                                    而先进产能的补充和替代将给造纸行业带来新鲜的血液和动力，这有利于提升行业集中度，形成良好的行业循环。
                                                </p>

                                                <p>
                                                    晨鸣纸业近日发表盈喜公告，指出因公司前期通过产能优化升级，市场竞争力增强；
                                                    强化内部管理，生产成本同比下降，产品毛利率同比增加；并加大市场开拓，产品销量同比增加；
                                                    及公司对外开展融资租赁业务增加，盈利能力同比提升；预期归属于上市公司股东的净利润将按年增长230-260%，
                                                    达9-9.8亿人民币(下同)，基本每股收益约0.41-0.45元；去年同期的盈利为2.76亿元。
                                                </p>

                                                <p>
                                                    <b>策略：</b>该股昨日现十字星，以走势看较似黄昏之星，建议待股价回调至5.87元附近吸纳，上望6.84元，跌穿5.3元止蚀。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/1812晨鸣纸业推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="title" id="research-6">吉利汽车（175-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-14</li>
                                </ul>
                                <div class="content">
                                    吉利汽车近日发表公布，指出于2016年5月之总销量为45,850部，按年增长约19%及按月增长约3%；
                                    期内出口量为1,630部，按年减少约61%；中国市场之总销量为44,220部，按年增长约29%。
                                    此外，本年首5个月之总销量为233,763部，较去年同期增长约7%，并达至本年全年销量目标600,000部之39%。
                                </div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-6" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - 吉利汽车（175-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> 2016-07-14</li>
                                                </ul>

                                                <p>
                                                    早前，汽车行业在《十三五纲要》中多次被提及，当中原因是汽车行业增长有助促进消费、
                                                    稳定增长以及走出去国际市场三大重要作用，因此对于汽车行业产生正面影响，汽车股股价亦因此节节走高。
                                                </p>

                                                <p>
                                                    吉利汽车近日发表公布，指出于2016年5月之总销量为45,850部，按年增长约19%及按月增长约3%；
                                                    期内出口量为1,630部，按年减少约61%；中国市场之总销量为44,220部，按年增长约29%。
                                                    此外，本年首5个月之总销量为233,763部，较去年同期增长约7%，并达至本年全年销量目标600,000部之39%。
                                                </p>

                                                <p>
                                                    <b>策略：</b>该股已升穿保力加通道顶，股价短期有回调压力，建议股价回至约4.27元附近吸纳，上望4.69元，跌穿4元止蚀。
                                                </p>

                                                <p>
                                                    本人为证监会持牌人士，注册编号BHM829。本人并无持有以上股份。
                                                    北京证券集团分析师 黄俊
                                                    联系电话：3899 1357
                                                </p>

                                                <p>
                                                    <a href="{{ asset('document/research/stock/175吉利汽车推介.pdf') }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="research-disclaimer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        <b>免责声明</b>
                                    </h4>
                                </div>
                                <div class="modal-body">
                                     <p>
                                        本报告内的数据及意见，北京证券集团不会就其公正性、准确性、完整性及正确性作出任何申述或保证。
                                        北京证券集团一概不就因任何使用本文或其内容而产生的任何损失承担任何责任。投资涉及风险。
                                        投资者在作出任何投资决策前，应详细阅读相关的投资产品文件，包括但不限于风险因素。
                                        任何投资决策应当根据投资者特定需求而寻求适当且专业的建议。
                                        此报告不应被视为亦不构成对任何人的要约或公开发售﹑也不构成对任何人发出认购任何基金股份或买卖证劵开户的邀请。
                                        本报告或其任何部份均不得直接或间接分发或传送予该等司法管制区域或当地居民，违者将构成触犯有关法律及条例的罪行。
                                        本报告之拥有人应了解并遵守相关之限制。本报告只供私下传阅之用，
                                        在未得北京证券集团有限公司(“北京证券集团”)及其联属公司书面同意之前，不得抄袭、影印、复制或再分发。
                                    </p>

                                    <p>
                                        本报告由北京证券集团在中华人民共和国香港特别行政区 (“香港”) 分发，
                                        北京证券集团为根据香港法例第571章证券及期货条例在香港证券及期货事务监察委员会 (“证监会”) 注册为持牌法团，中央编号为BFY017。
                                    </p>

                                    <p>
                                        本报告所载资料摘录自相信属可靠之来源，惟北京证券集团概不就其真确性或准确性作出任何明示或暗示之陈述或保证。
                                        印制本报告旨在协助收取本报告之人士，惟彼等作出判断时不应依赖此作为一项具权威性之报告或以此为依据。
                                        本报告不得诠释要约、邀请及招揽购买或出售于本报告所述公司之任何证券。
                                        本报告所载之建议，并无考虑任何特定收件人之特定投资目标、财务状况及特别需要。
                                        所有意见及估算反映我们在本报告日之判断，故可随时更改，无须另行通知。
                                    </p>

                                    <p>
                                        北京证券集团(包括其附属公司及／或联属公司) 可出任本报告所述任何发行商之证券发售之牵头或副经办人，
                                        可不时为任何发行商提供金融服务或其他顾问服务或从任何发行商招揽金融服务或其他业务。
                                    </p>

                                    <p>
                                        在过往一年，北京证券集团 (包括其附属公司及／或联属公司) 可能担任本报告所述任何发行商之金融工具之市场庄家或以委托人形式进行买卖，并可能作为该发行商之包销商、配售代理、顾问或放款人。
                                    </p>

                                    <p>
                                        北京证券集团 (包括其附属公司、联属公司、股东、高级职员、董事及任雇员) 可就任何发行商之证券、商品或衍生工具 (包括期权) 或其中之任何其他金融工具设立好仓或淡仓及进行买卖。
                                    </p>

                                    <p>
                                        北京证券集团 (包括其附属公司及／或联属公司) 之雇员可出任任何该等机构或发行商之董事或作为该等机构或发行商之董事会代表。
                                    </p>

                                    <p>
                                        金融投资具一定风险，价格可升可跌，投资者需知悉并了解本公司所提供各项金融理财服务之不同投资风与限制。本刊物内容谨供读者参考，并不促使读者作出任何投资决定。北京证券集团有限公司及数据提供者并不保证其内容的准确性及完整性。若阁下因为本刊物内容而作出任何投资决定而导致任何损失，北京证券集团有限公司及数据提供者并不负任何法律责任。
                                    </p>

                                    <p>尚有其他数据可供索阅。</p>
                                    <p>版权所有，不得翻印。</p>

                                    </p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3" style="padding: 0 10px;">
                    <div class="sub-menu">
                        <div class="title">个别股票分析</div>
                        <ul>
                            <li>
                                <a href="#research-1" data-toggle="modal" data-target="#researchModal-10">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-20 中兴通讯（763-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-1" data-toggle="modal" data-target="#researchModal-9">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-20 瑞声科技（2018-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-1" data-toggle="modal" data-target="#researchModal-8">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-19 广汽集团（2238-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-1" data-toggle="modal" data-target="#researchModal-7">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-19 中石化冠德（934-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-1" data-toggle="modal" data-target="#researchModal-1">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-18 平安保险（2318-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-2" data-toggle="modal" data-target="#researchModal-2">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-18 腾讯（700-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-3" data-toggle="modal" data-target="#researchModal-3">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-15 德昌电机（179-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-4" data-toggle="modal" data-target="#researchModal-4">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-15 信义玻璃（868-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-5" data-toggle="modal" data-target="#researchModal-5">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-14 晨鸣纸业（1812-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-6" data-toggle="modal" data-target="#researchModal-6">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 2016-07-14 吉利汽车（175-HK）
                                </a>
                            </li>
                        </ul>
                        <div style="height: 50px"></div>
                        <div class="title">档案库</div>
                        <ul>
                            <li><span style="font-size: 16px; font-weight: bold;">2016</span>
                                <ul class="month">
                                    <li><a href="research">7 月</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

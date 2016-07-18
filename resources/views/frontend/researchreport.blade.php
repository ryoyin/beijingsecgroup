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
                                <div class="title" id="research-1">平安保险（2318-HK）</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-18</li>
                                </ul>
                                <div class="content">
                                    平保聚焦「大金融资产」和「大医疗健康」两大产业，「综合金融+互联网」和「互联网+综合金融」两大模式并重发展，核心金融业务快速健康发展的同时，
                                    持续深化互联网金融战略体系。平保通过「综合金融+互联网」和「互联网+综合金融」的一体化架构，依托本土化优势，践行国际化标准的公司治理，
                                    以及统一的品牌、多渠道分销网络，本公司为超过两亿互联网用户和一亿客户提供保险、银行、资产管理和互联网金融产品及服务。
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
                                                    <b>个股追踪 - 平安保险（2318-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-18</li>
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
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-18</li>
                                </ul>
                                <div class="content">
                                    互联网+，是创新2.0下中国互联网发展新形态、新业态，是知识社会创新2.0推动下的互联网形态演进，
                                    在2015年被国务院总理李克强率先提出。在这个概念被提出之后，相关个股被市场热炒，当中腾讯控股前景更被看高一线。
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
                                                    <b>个股追踪 - 腾讯（700-HK）</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> 黄俊</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-18</li>
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
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-15</li>
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
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-15</li>
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
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-15</li>
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
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-15</li>
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
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-14</li>
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
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-14</li>
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
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-14</li>
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
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>發佈日期:</span> 2016-07-14</li>
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
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3" style="padding: 0 10px;">
                    <div class="sub-menu">
                        <div class="title">个别股票分析</div>
                        <ul>
                            <li>
                                <a href="#research-1" data-toggle="modal" data-target="#researchModal-1">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 平安保险（2318-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-2" data-toggle="modal" data-target="#researchModal-2">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 腾讯（700-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-3" data-toggle="modal" data-target="#researchModal-3">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 德昌电机（179-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-4" data-toggle="modal" data-target="#researchModal-4">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 信义玻璃（868-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-5" data-toggle="modal" data-target="#researchModal-5">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 晨鸣纸业（1812-HK）
                                </a>
                            </li>
                            <li>
                                <a href="#research-6" data-toggle="modal" data-target="#researchModal-6">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> 吉利汽车（175-HK）
                                </a>
                            </li>
                        </ul>
                        <div style="height: 50px"></div>
                        <div class="title">档案库</div>
                        <ul>
                            <li><span style="font-size: 16px; font-weight: bold;">2016</span>
                                <ul class="month">
                                    <li>7 月</li>
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

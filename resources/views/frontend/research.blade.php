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

                        <?php $researches_count = 0; ?>
                        @foreach($researches AS $research )
                            <?php $researches_count ++; ?>
                            <tr>
                            <td>
                                <div class="title" id="research-{{$research['id']}}">{{$research['title']}}</div>
                                <ul class="info">
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> {{$research['author']}}</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> {{$research['publish_date']}}</li>
                                </ul>
                                <div class="content">{{$research['short_desc']}}</div>

                                <!-- Button trigger modal -->
                                <div><span class="more" data-toggle="modal" data-target="#researchModal-{{$research['id']}}" style="cursor: pointer;">详情</span></div>

                                <!-- Modal -->
                                <div class="modal fade" id="researchModal-{{$research['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <b>个股追踪 - {{$research['title']}}</b>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="info dialog-info">
                                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> <span>分析师:</span> {{$research['author']}}</li>
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span>发布日期:</span> {{$research['publish_date']}}</li>
                                                </ul>

                                                {!! $research['description'] !!}

                                                <p>
                                                    <a href="{{ asset($research['file_path']) }}" target="_blank"><img src="{{asset('img/Adobe_PDF_file_icon_32x32.png')}}"> 下载PDF版</a>
                                                </p>

                                                <div style="text-align: right;"><span class="more research-disclaimer" data-toggle="modal" data-target="#research-disclaimer" style="cursor: pointer;">免责声明</span></div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    if(count($researches) != $researches_count) echo '<hr>';
                                ?>

                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div style="text-align: right;">{{$researches->render()}}</div>

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
                            @foreach($researches AS $research )
                            <li>
                                <a href="#research-{{$research['id']}}" data-toggle="modal" data-target="#researchModal-{{$research['id']}}">
                                    <i class="fa fa-arrow-right" aria-hidden="true" style="padding-right: 10px;"></i> {{$research['publish_date']}} {{$research['title']}}
                                </a>
                            </li>
                            @endforeach

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

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
            <li class="active">集团新闻</li>
        </ol>
    </div>

    <!-- Company Information -->
    <div class="row">
        <div class="col-md-12 information">
            <div class="col-md-12 page-content">
                <div class="col-md-12 page-title">集团新闻</div>
                <div class="col-md-12" style="padding-bottom: 30px;">
                    <div style="font-size: 16px; padding-bottom: 10px;">
                        <span style="font-weight: bold; padding-right: 10px;">2016-07-07 12:31</span>
                        <a href="http://www.fintv.hk/Zhtw/116/4261/330312" target="_blank">北京证券邓文云：「在别人恐惧时贪婪」- 详细报导 [现代电视　FinTV]</a>
                    </div>
                    <div>
                        <a href="http://www.fintv.hk/Zhtw/116/4261/330312" target="_blank"><img src="{{asset("img/companynews/20160707-01.png")}}"></a>
                    </div>
                </div>
                <div class="col-md-12" style="padding-bottom: 30px;">
                    <div class="col-md-12" style="font-size: 16px; padding-bottom: 10px;">
                        <span style="font-weight: bold; padding-right: 10px;">2016-07-07 12:31</span>
                        <a href="http://www.fintv.hk/Zhtw/116/4261/330313" target="_blank">北京证券邓文云：最大优势「知道哪里有鱼」- 详细报导 [现代电视　FinTV]</a>
                    </div>
                    <div class="col-*-12">
                        <a href="http://www.fintv.hk/Zhtw/116/4261/330313" target="_blank"><img src="{{asset("img/companynews/20160707-02.png")}}"></a>
                    </div>
                </div>
                <div class="col-md-12" style="padding-bottom: 30px;">
                    <div style="font-size: 16px; padding-bottom: 10px;">
                        <span style="font-weight: bold; padding-right: 10px;">2016-07-06 11:06</span>
                        <a href="http://www2.finet.hk/Newscenter/news_detail/577c74a2e4b040afaaea17fd" target="_blank">资深港漂在香港奋斗出了一间证券公司- 详细报导 [财华社　FinNet]</a>
                    </div>
                    <div>
                        <a href="http://www2.finet.hk/Newscenter/news_detail/577c74a2e4b040afaaea17fd" target="_blank"><img src="{{asset("img/companynews/34138243-f6ec-4d7b-8083-5df00e85412c.jpg")}}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

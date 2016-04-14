@extends('frontend.template.layout')

@section('content')

   <meta name="csrf-token" content="{{ csrf_token() }}">

<script>
function getNews(group) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method: "POST",
        url: "{{ route('ajax.stock.marketnews') }}",
        data: {group: group, type: 'main', page: 0, show: 10}
    })
    .done(function (data) {
        $('#news-content').html(data);
    });
}

function slideNews(infocastid) {
    $('.marketnews-title[newsid='+infocastid+']').slideToggle();
    $('.marketnews-content[newsid='+infocastid+']').slideToggle();
}
</script>

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
            <img src="{{ asset('img/banner/news_1_1140x350.jpg') }}" alt="Contact Us">
            <!-- <div class="carousel-caption"></div> -->
        </div>
    </div>

</div>

<!-- Content -->
<div class="row download-block">

    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('front.homepage') }}">首页</a></li>
            <li class="active">{{ trans('web.form_download') }}</li>
        </ol>
    </div>

    <!-- Company Information -->
    <div class="row">
        <div class="col-md-12 information">
            <div class="col-md-2 page-content">
                <div class="col-md-12 page-title">新闻资讯</div>
                <div class="col-md-12">
                    <ul class="market-news-menu">
                        <li><a href="#newsInfo" style="font-weight: bold;" onclick="getNews('A')" class="active">新闻资讯</a></li>
                        <li><a href="#investInfo" style="font-weight: bold;" onclick="getNews('B')">投资锦囊</a></li>
                        <li><a href="#companyInfo" style="font-weight: bold;" onclick="getNews('C')">公司资料</a></li>
                        <li><a href="#marketInfo" style="font-weight: bold;" onclick="getNews('D')">市场资讯</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 page-content">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>日期</th>
                        <th>内容</th>
                    </tr>
                    </thead>
                    <tbody id="news-content">{!! $newsInfo !!} </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script>
    $('.market-news-menu a').click(function() {
        $('.active').removeClass('active');
        $(this).addClass('active');
//        alert('test');
    });
</script>
@endsection

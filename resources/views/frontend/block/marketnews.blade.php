<div class="row">

    <div class="col-md-12 rm-margin">
        <div class="col-md-6">
            <!-- News from Infocast & Exchange -->
            <ul id="news-block-header">
                <li><h4>新闻资讯</h4></li>
                {{--<li><a href="#">更多新聞</a></li>--}}
            </ul>

            <div class="clearfix"></div>

            <div class="news-block">
                <table class="table table-hover market-news">
                    <tbody class="news-realtime">{!! $newsInfo !!}</tbody>
                </table>
            </div><!-- // News from Infocast & Exchange -->
        </div>

        <div class="col-md-6">
            <!-- News from Infocast & Exchange -->
            <ul id="news-block-header">
                <li><h4>投资锦囊</h4></li>
                {{--<li><a href="#">更多新聞</a></li>--}}
            </ul>

            <div class="clearfix"></div>

            <div class="news-block">
                <table class="table table-hover market-news">
                    <tbody class="news-realtime">{!! $investInfo !!}</tbody>
                </table>
            </div><!-- // News from Infocast & Exchange -->
        </div>

        <div class="col-md-12 text-right" style="font-size: 12px;">资料由港汇资讯提供 最少延迟15分钟</div>
    </div>

</div>

<script>
/*$( document ).ready(function() {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method: "POST",
        url: "/ajax/stock/marketnews"
    })
    .done(function (data) {
        $(".news-realtime").append(data).show();
        $(".market-news .loading").hide();
    });
});*/

function popNews(i) {

    var targetObj = $('.marketnews-content[newsid='+i+']');
    var headline = targetObj.children('.headline').html();
    var dateTime = targetObj.children('.dateTime').html();
    var contentHTML = targetObj.children('.contentHTML').html();

    $('#marketNewsLabel').html(headline);
    $('#marketNewsDatetime').html(dateTime);
    $("#marketNewsBody").html(contentHTML);

    $("#marketNewsModal").modal();
}
</script>

<!-- Market News Modal -->
<div class="modal fade" id="marketNewsModal" tabindex="-1" role="dialog" aria-labelledby="marketNewsLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="marketNewsLabel"></h3>
                <div id="marketNewsDatetime"></div>
            </div>
            <div class="modal-body" id="marketNewsBody"></div>
        </div>
    </div>
</div>
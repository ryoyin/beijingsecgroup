<script>
$( document ).ready(function() {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method: "POST",
        url: "/ajax/stock/marketnews"
    })
    .done(function (data) {
        $(".news-realtime").append(data).show();
        $(".market-news .loading").hide();
    });
});

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

<!-- News from Infocast & Exchange -->
<ul id="news-block-header">
    <li><h4>即時新聞 - 由港滙資訊提供</h4></li>
    <li><a href="#">更多新聞</a></li>
</ul>

<div class="clearfix"></div>

<div class="news-block">
    <table class="table table-hover market-news">
        <tbody class="loading">
        <tr>
            <td>正在載入資料...</td>
        </tr>
        </tbody>
        <tbody class="news-realtime"></tbody>
    </table>
</div><!-- // News from Infocast & Exchange -->
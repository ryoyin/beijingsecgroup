<script>
$( document ).ready(function() {
    mostActive('rise');

    $(".mostActivePanel").click(function() {
        var type = $(this).attr('type');
        mostActive(type);
    });
});

function mostActive(type) {
    $("#stock-"+type+" .loading").show();
    $("#stock-"+type+" .most-active").html('').hide();

    $("#stock-"+type+" .most-active .mostActive-realtime-thead").attr('');

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method: "POST",
        url: "/ajax/stock/mostactive",
        data: {returnJson: false, rankby: type}
    })
    .done(function (data) {
        $("#stock-"+type+" .most-active").append(data).show();
        $("#stock-"+type+" .loading").hide();
    });
}
</script>

<!-- Most Active from Infocast & Exchange -->
<ul id="mostActive-block-header">
    <li><h4>10大最活躍股票</h4></li>
    {{--<li><a href="#">更多新聞</a></li>--}}
</ul>

<div class="clearfix"></div>

<!-- Tab Panel -->
<div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified marketnews-stock-nav" role="tablist">
        <li role="presentation" class="active"><a href="#stock-rise" type="rise" aria-controls="stock-rise" role="tab" data-toggle="tab" class="mostActivePanel">最高升幅</a></li>
        <li role="presentation"><a href="#stock-fall" type="fall" aria-controls="stock-fall" role="tab" data-toggle="tab" class="mostActivePanel">最高跌幅</a></li>
        <li role="presentation"><a href="#stock-turnover" type="turnover" aria-controls="stock-turnover" role="tab" data-toggle="tab" class="mostActivePanel">成交額</a></li>
        <li role="presentation"><a href="#stock-volume" type="volume" aria-controls="stock-volume" role="tab" data-toggle="tab" class="mostActivePanel">成交量</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        {{-- Most Rise --}}
        <div role="tabpanel" class="tab-pane fade in active" id="stock-rise">
            <div class="mostActive-block">
                <table class="table table-hover most-active">
                </table>
                <table class="table table-hover loading">
                    <tbody>
                    <tr>
                        <td colspan="6">正在載入資料...</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div> {{-- // Most Rise --}}

        {{-- Most Fall --}}
        <div role="tabpanel" class="tab-pane fade" id="stock-fall">
            <div class="mostActive-block">
                <table class="table table-hover most-active">
                </table>
                <table class="table table-hover loading">
                    <tbody>
                    <tr>
                        <td colspan="6">正在載入資料...</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>{{-- // Most Fall --}}

        {{-- Most Turnover --}}
        <div role="tabpanel" class="tab-pane fade" id="stock-turnover">
            <div class="mostActive-block">
                <table class="table table-hover most-active">
                </table>
                <table class="table table-hover loading">
                    <tbody>
                    <tr>
                        <td colspan="6">正在載入資料...</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>{{-- // Most Turnover --}}

        {{--Most Volume--}}
        <div role="tabpanel" class="tab-pane fade" id="stock-volume">
            <div class="mostActive-block">
                <table class="table table-hover most-active">
                </table>
                <table class="table table-hover loading">
                    <tbody>
                    <tr>
                        <td colspan="6">正在載入資料...</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>{{-- // Most Volume--}}

    </div>

</div> <!-- Tab Panel -->

<!-- // Most Active from Infocast & Exchange -->
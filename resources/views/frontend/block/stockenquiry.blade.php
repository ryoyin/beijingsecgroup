<script>
$( document ).ready(function() {
    $("#stock-enquiry-block #stock-enquiry #code").keyup(function (e) {
        if (e.keyCode == 13) {
            var $inputObject = $(this);

            var $code = $inputObject.val();
            $code = $code.trim();

            if($code == '') {

                alert('請輸入股票號碼!');
                $inputObject.val('').focus();

                return false;
            }

            if(!$.isNumeric($code)) {

                alert('輸入不正確!');
                $inputObject.val('').focus();

                return false;
            }

            stockEnquiry($code);

        }
    });

});

function stockEnquiry($code) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method: "POST",
        url: "/ajax/stock/stockenquiry",
        data: {code: $code}
    }).done(function (data) {
        if(data == 'failed') {
            alert('輸入不正確!');
            $("#stock-enquiry-block #stock-enquiry #code").val('').focus();

            return false;
        }

        $('#stock-result-block').html(data);
    });
}
</script>

<div id="stock-enquiry-block">

    {{--Stock Enquiry Block--}}
    <div id="stock-enquiry">
        <h4>股價查詢</h4>
        <input id="code" type="text" placeholder="請輸入股票號碼">
    </div>

    {{--Stock Result Block--}}
    {{--{
    "code": "00005",
    "turnOver": 734024180,
    "yearHigh": 78250,
    "high": 50350,
    "bidSprd": 50,
    "low": 49900,
    "currency": "HKD",
    "turnover": 734024180,
    "yearLow": 47650,
    "lotSize": 400,
    "divPS": 395.281,
    "pvClose": 50450,
    "updateTime": 1458288082000,
    "askSprd": 50,
    "volume": 14658126,
    "timeStamp": 1458288065000,
    "success": 1,
    "name": {
    "zh_CN": "\u6c47\u4e30\u63a7\u80a1\u6709\u9650\u516c\u53f8",
    "zh_TW": "\u532f\u8c50\u63a7\u80a1\u6709\u9650\u516c\u53f8",
    "en_US": "HSBC HOLDINGS PLC"
    },
    "ask": 49950,
    "shortName": {
    "zh_CN": "\u6c47\u4e30\u63a7\u80a1",
    "zh_TW": "\u532f\u8c50\u63a7\u80a1",
    "en_US": "HSBC HOLDINGS"
    },
    "bid": 49850,
    "issueShares": 19744824264,
    "open": 50200,
    "earnPS": 502.77,
    "lastPrice": 50000
    }--}}
    <div id="stock-result-block">
        <div class="row">
            <div class="col-md-12 heading">00005 - 滙豐控股</div>
        </div>
        <div class="row">
            <div class="col-md-6"><span class="last-price">50.000</span><br><span class="diff" style="color: red;">-0.200(-0.892%)</span></div>
            <div class="col-md-3 open">開市<br>50.200</div>
            <div class="col-md-3 open">前收市<br>50.450</div>
        </div>

        <div class="row">
            <div class="col-md-3 small">最高<br><span>50.350</span></div>
            <div class="col-md-3 small">最低<br><span>49.900</span></div>
            <div class="col-md-3 small">年最高<br><span>78.250</span></div>
            <div class="col-md-3 small">年最低<br><span>47.650</span></div>
        </div>

        <div class="row">
            <div class="col-md-3 small">買入<br><span>49.850</span></div>
            <div class="col-md-3 small">賣出<br><span>49.950</span></div>
            <div class="col-md-3 small">成交額<br><span>734024180</span></div>
            <div class="col-md-3 small">成交量<br><span>14658126</span></div>
        </div>

        <div class="row">
            <div class="col-md-3 small">開市價 <span>50.200</span></div>
            <div class="col-md-3 small">開市價 <span>50.200</span></div>
            <div class="col-md-3 small">開市價 <span>50.200</span></div>
            <div class="col-md-3 small">開市價 <span>50.200</span></div>
        </div>

        <div class="row">
            <div class="col-md-3 small">開市價 <span>50.200</span></div>
            <div class="col-md-3 small">開市價 <span>50.200</span></div>
            <div class="col-md-3 small">開市價 <span>50.200</span></div>
            <div class="col-md-3 small">開市價 <span>50.200</span></div>
        </div>

        <div class="row">
            <div class="col-md-12 update-time">最後更新時間: 2016-03-19 11:30</div>
        </div>

    </div>

</div>
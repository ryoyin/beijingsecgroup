<div class="row" style="font-size:30px;">
    <div class="col-md-12"><span class="api-stockname">{{ $code }}</span></div>
    <div class="col-md-12"><span class="api-stockname">{{ $stockName }}</span></div>
</div>

<div class="row">
    <div class="col-md-5"><span class="last-price">{{ $lastPrice }}</span>
        <span class="diff api_diff" style="color: red;">{{ $different }}</span>
    </div>
    <div class="col-md-3 open">开市<br><span class="api_open">{{ $open }}</span></div>
    <div class="col-md-4 open">前收市<br><span class="api_pvClose">{{ $pvClose }}</span></div>
</div>

<div class="row">
    <div class="col-md-3 small">最高<br><span class="api_high">{{ $high }}</span></div>
    <div class="col-md-3 small">最低<br><span class="api_low">{{ $low }}</span></div>
    <div class="col-md-3 small">年最高<br><span class="api_yearHigh">{{ $yearHigh }}</span></div>
    <div class="col-md-3 small">年最低<br><span class="api_yearLow">{{ $yearLow }}</span></div>
</div>

<div class="row">
    <div class="col-md-3 small">买入<br><span class="api_bid">{{ $bid }}</span></div>
    <div class="col-md-3 small">卖出<br><span class="api_ask">{{ $ask }}</span></div>
    <div class="col-md-3 small">成交額<br><span class="api_turnover">{{ $turnover }}</span></div>
    <div class="col-md-3 small">成交量<br><span class="api_volume">{{ $volume }}</span></div>
</div>

<div class="row">
    <div class="col-md-3 small">货币<br><span class="api_currency">{{ $currency }}</span></div>
    <div class="col-md-3 small">交易单位<br><span class="api_lotSize">{{ $lotSize }}</span></div>
    <div class="col-md-3 small">买卖差价<br><span class="api_bidSprd">{{ $bidSprd }}</span> / <span class="api_askSprd">{{ $askSprd }}</span></div>
    <div class="col-md-3 small">发行股本<br><span class="api_issueShares">{{ $issueShares }}</span></div>
</div>

<div class="row">
    <div class="col-md-12 update-time">最少延迟15分钟</div>
</div>
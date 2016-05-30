<table class="table table-hover">
<thead>
    <tr>
        <th colspan="4">
            <span class="api-stockname">{{ $code }}</span><br>
            <span class="api-stockname">{{ $stockName }}</span>
        </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td colspan="2">
            <span class="last-price">{{ $lastPrice }}</span><br>
            <span class="diff api_diff" style="color: red;">{{ $different }}</span>
        </td>
        <td>开市<br><span class="api_open">{{ $open }}</span></td>
        <td>前收市<br><span class="api_pvClose">{{ $pvClose }}</span></td>
    </tr>
    <tr>
        <td>
            <b>最高</b><br><span class="api_high">{{ $high }}</span>
        </td>
        <td>
            <b>最低</b><br><span class="api_low">{{ $low }}</span>
        </td>
        <td>
            <b>年最高</b><br><span class="api_yearHigh">{{ $yearHigh }}</span>
        </td>
        <td>
            <b>年最低</b><br><span class="api_yearLow">{{ $yearLow }}</span>
        </td>
    </tr>
    <tr>
        <td>
            <b>买入</b><br><span class="api_bid">{{ $bid }}</span>
        </td>
        <td>
            <b>卖出</b><br><span class="api_ask">{{ $ask }}</span>
        </td>
        <td>
            <b>货币</b><br><span class="api_currency">{{ $currency }}</span>
        </td>
        <td>
            <b>交易单位</b><br><span class="api_lotSize">{{ $lotSize }}</span>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <b>成交額</b><br><span class="api_turnover">{{ $turnover }}</span>
        </td>
        <td colspan="2">
            <b>成交量</b><br><span class="api_volume">{{ $volume }}</span>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <b>买卖差价</b><br><span class="api_bidSprd">{{ $bidSprd }}</span> / <span class="api_askSprd">{{ $askSprd }}</span>
        </td>
        <td colspan="2">
            <b>发行股本</b><br><span class="api_issueShares">{{ $issueShares }}</span>
        </td>
    </tr>
    <tr>
        <td colspan="4" style="font-size:12px">资料由汇港资讯提供 最少延迟15分钟<br>最后更新时间　{{ $updateTime }}</td>
    </tr>
</tbody>
</table>
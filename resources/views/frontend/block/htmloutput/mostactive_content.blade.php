<thead class='mostActive-realtime-thead'>
<tr>
    <th>号码</th>
    <th>名称</th>
    <th>现价</th>
    <th>{{ $headCol4 }}</th>
    <th>{{ $headCol5 }}</th>
    <th>成交金额</th>
</tr>
</thead>
<tbody class='mostActive-realtime'>

@foreach ($result['entryList'] AS $stock)

    <?php

        $open = $stock['open'];
        $price = $stock['price'];
        $pvClose = $stock['pvClose'];
        $diff = ($price - $pvClose);

        $openOutput = number_format($open / 1000, 3);

        $priceOutput = number_format($price / 1000, 3);

        $diffOutput = $mathSymbol.number_format($diff / 1000, 3);

        $diffPercentage = $diff / $stock['pvClose'] * 100;
        $diffPercentageOutput = $mathSymbol.number_format($diffPercentage, 2).'%';

    ?>


    <tr>
        <td>{{ $stock['code'] }}</td>
        <td>{{ $stock['name']['zh_TW'] }}</td>
        <td style='font-weight: bold;'>{{ $priceOutput }}</td>
        <td style='color: {{ $color }};'>{{ $diffOutput }}</td>
        <td style='color: {{ $color }};'>{{ $diffPercentageOutput }}</td>
        <td>{{ $stock['turnover'] }}</td>
    </tr>

@endforeach

<tr><td colspan='6' align='right'>资料由汇港资讯提供 最少延迟15分钟 最后更新时间 {{ $dateTimeString }}</td></tr>

</tbody>
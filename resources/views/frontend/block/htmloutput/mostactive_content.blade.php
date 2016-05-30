<thead class='mostActive-realtime-thead'>
<tr>
    <th>号码</th>
    <th>名称</th>
    <th>现价</th>
    <th>{{ $headCol4 }}</th>
    <th>{{ $headCol5 }}</th>
    <th>成交量</th>
</tr>
</thead>
<tbody class='mostActive-realtime'>

@foreach ($result['entryList'] AS $stock)

    <?php
        $open = $stock['open'];
        $openOutput = number_format($open / 1000, 3);

        $price = $stock['price'];
        $priceOutput = number_format($price / 1000, 3);

        $rise = ($price - $open);
        $riseOutput = $mathSymbol.number_format($rise / 1000, 3);

        $risePercentage = $rise / $stock['open'] * 100;
        $risePercentageOutput = $mathSymbol.number_format($risePercentage, 2).'%';
    ?>


    <tr>
        <td>{{ $stock['code'] }}</td>
        <td>{{ $stock['name']['zh_TW'] }}</td>
        <td style='font-weight: bold;'>{{ $priceOutput }}</td>
        <td style='color: {{ $color }};'>{{ $riseOutput }}</td>
        <td style='color: {{ $color }};'>{{ $risePercentageOutput }}</td>
        <td>{{ $stock['trades'] }}</td>
    </tr>

@endforeach

<tr><td colspan='6' align='right'>资料由汇港资讯提供 最少延迟15分钟 最后更新时间 {{ $dateTimeString }}</td></tr>

</tbody>
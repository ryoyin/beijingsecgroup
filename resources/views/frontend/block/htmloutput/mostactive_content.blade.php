<thead class='mostActive-realtime-thead'>
<tr>
    <th>号码</th>
    <th>名称</th>
    <th>现价</th>
    <th>{{ $headCol4 }}</th>
    <th>{{ $headCol5 }}</th>
    <th>{{ $headCol6 }}</th>
</tr>
</thead>
<tbody class='mostActive-realtime'>

@foreach ($result['entryList'] AS $stock)

    <?php

        $open = $stock['open'];
        $price = $stock['price'];
        $pvClose = $stock['pvClose'];

        if($result['rankBy'] == 'volume') {
            $volume = $stock['volume'];
            $col6 = number_format(($volume / 1000000), 3).'M';
        } else {
            $turnover = $stock['turnover'];
            $col6 = number_format(($turnover / 1000000), 3).'M';
        }

        $openOutput = number_format($open / 1000, 3);

        $priceOutput = number_format($price / 1000, 3);

        $sign = '';

        if($pvClose > 0) {

            $diff = ($price - $pvClose);

            if($diff > 0) {
                $color = 'green';
                $sign = '<i class="fa fa-arrow-up" aria-hidden="true"></i>';
            }

            if($diff < 0) {
                $color = 'red';
                $sign = '<i class="fa fa-arrow-down" aria-hidden="true"></i>';
            }

            $diffOutput = abs(number_format($diff / 1000, 3));

//            echo 'diff: '.$diff;
//            echo 'pvClose: '.$pvClose;

            $diffPercentage = ($diff / $pvClose * 100);

//            echo $diffPercentage;
            $diffPercentageOutput = number_format(abs($diffPercentage), 2).'%';

        } else {

            $diffOutput = '-';
            $diffPercentageOutput = '-';

        }

    ?>

    <tr>
        <td>{{ $stock['code'] }}</td>
        <td>{{ $stock['name']['zh_TW'] }}</td>
        <td style='font-weight: bold;'>{{ $priceOutput }}</td>
        <td style='color: {{ $color }};'>{{ $diffOutput }} {!! $sign !!}</td>
        <td style='color: {{ $color }};'>{{ $diffPercentageOutput }} {!! $sign !!}</td>
        <td>{{ $col6 }}</td>
    </tr>

@endforeach

<tr><td colspan='6' align='right'>资料由汇港资讯提供 最少延迟15分钟 最后更新时间 {{ $dateTimeString }}</td></tr>

</tbody>
@foreach ($marketnews AS $news)
    <?php
    $onclickHTML = "";
    $moreHTML = "";
    ?>
    @if ($news['content'] != "")
        <?php
        $onclickHTML = "onclick='slideNews(".$news['infocastid'].");'";
        $moreHTML = " <span>- 详情</span>";
        ?>
    @endif

    <tr {!! $onclickHTML !!} style="cursor: pointer;">
        <td style="width: 170px"><b>{{ $news['times'] }}</b></td>
        <td>
            <div class="marketnews-title" newsid='{{  $news['infocastid'] }}'>{{ $news['headline'] }} {!! $moreHTML !!}</div>
            <div class='marketnews-content' newsid='{{  $news['infocastid'] }}' style='display: none;'>
                <div class='headline'>{{$news['headline'] }}</div>
                <div class='dateTime'>{{$news['dateTime'] }}</div>
                <div class='contentHTML'>{!! $news['content'] !!}</div>
            </div>
        </td>
    </tr>
@endforeach
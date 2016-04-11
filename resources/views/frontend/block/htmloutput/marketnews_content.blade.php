@foreach ($marketnews AS $news)
    <?php
        $onclickHTML = "";
        $moreHTML = "";
    ?>
    @if ($news['content'] != "")
        <?php
            $onclickHTML = "onclick='popNews(".$news['infocastid'].");'";
            $moreHTML = " <span>- 更多</span>";
        ?>
    @endif

    <tr {!! $onclickHTML !!}>
        <td>
            <b>{{ $news['times'] }}</b> <br>
            {{ $news['headline'] }} {!! $moreHTML !!}
            <div class='marketnews-content' newsid='{{  $news['infocastid'] }}' style='display: none;'>
                <div class='headline'>{{$news['headline'] }}</div>
                <div class='dateTime'>{{$news['dateTime'] }}</div>
                <div class='contentHTML'>{!! $news['content'] !!}</div>
            </div>
        </td>
    </tr>
@endforeach
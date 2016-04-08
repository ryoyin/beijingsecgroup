<script>
$( document ).ready(function() {
    $("#stock-enquiry-block #stock-enquiry #code").keyup(function (e) {
        if (e.keyCode == 13) {
            $('.overlay-loading').modal();
            var $inputObject = $(this);

            var $code = $inputObject.val();
            $code = $code.trim();

            if($code == '') {

                alert('请输入股票号码!');
                $inputObject.val('').focus();

                return false;
            }

            if(!$.isNumeric($code)) {

                alert('输入不正确!');
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
            alert('输入不正确!');
            $("#stock-enquiry-block #stock-enquiry #code").val('').focus();

            return false;
        }

        $("#stock-enquiry-block #stock-enquiry #code").val('').focusout();

        $('.overlay-loading').modal('hide');

        $('#stock-result-block').slideUp(function() {
            $('#stock-result-block').html(data).slideDown();
        });

//        $('#stockQuoteModal').modal();

    });
}
</script>

<div id="stock-enquiry-block">

    {{--Stock Enquiry Block--}}
    <div id="stock-enquiry">
        <h4>股价查询</h4>
        <input id="code" type="text" placeholder="请输入股票号码">
        <div class="col-md-12" id="stock-result-block"></div>
    </div>

</div>

<!-- Modal -->
{{--<div id="stock-enquiry-modal"></div>--}}


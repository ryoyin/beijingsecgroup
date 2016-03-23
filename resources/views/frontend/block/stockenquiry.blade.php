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

        $("#stock-enquiry-block #stock-enquiry #code").val('').focusout();
        $('#stock-result-block').html(data).css('display','none');

        var $adBlock = $('.ad-app-block');
        if ($adBlock.length) {
            $('.app-image').slideUp(function() {
                $('#stock-result-block').slideDown();
            });
        } else {
            $('#stock-result-block').slideDown();
        }
//        $('#stockQuoteModal').modal();
    });
}
</script>

<div id="stock-enquiry-block">

    {{--Stock Enquiry Block--}}
    <div id="stock-enquiry">
        <h4>股價查詢</h4>
        <input id="code" type="text" placeholder="請輸入股票號碼">
        <div class="col-md-12" id="stock-result-block"></div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="stockQuoteModal" tabindex="-1" role="dialog" aria-labelledby="stockQuoteModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="stockQuoteModalLabel"><b>免责声明</b></h3>
            </div>
            <div class="modal-body" id="stock-result-block"></div>
        </div>
    </div>
</div>
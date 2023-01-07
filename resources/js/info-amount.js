$(function(){

    $('#cart-button').on('click', function(){

        let amount = $('#purchase-amount').val();

        $('#purchase_amount').val(parseInt(amount));

    });

});
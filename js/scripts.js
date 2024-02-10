$(document).ready(function(){
    $('.dlt-btn').on('click',function(){
        if(confirm('Are you sure want to delete this?')){
            let id = $(this).data('id');
            $('#set_id').val(id);
            $('#deleteForm').submit();
        }else{
            return false;
        }
    });

    //cart-dlt-btn
    $('.cart-dlt-btn').on('click',function(){
        if(confirm('Are you sure want to delete this?')){
            let id = $(this).data('id');
            let pid = $(this).data('pid');
            let stock = $(this).data('stock');

            $('#set_id').val(id);
            $('#set_pid').val(pid);
            $('#set_stock').val(stock);
            $('#deleteForm').submit();
        }else{
            return false;
        }
    });

    $('.print-btn').on('click',function(){
        window.print();
    });

    $('#payBox').on('keypress',function(e){
        if(e.which == 13) {
            let total = $('#totalBox').val();
            let pay = $('#payBox').val();
            let ret = pay - total;
            $('#returnBox').val(ret);
        }
    })
      
})
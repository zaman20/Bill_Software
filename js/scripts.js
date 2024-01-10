$(document).ready(function(){
    $('.dlt-btn').on('click',function(){
        if(confirm('Are you sure want to delete this?')){
            let id = $(this).data('id');
            $('#set_id').val(id);
            $('#deleteForm').submit();
        }else{
            return false;
        }
    })
})
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
    let count =0;
    let subtotal=0;
    $('.add-btn').on('click',function(){
        let name = $("input[name=name]").val();
        let rate = $("input[name=rate]").val();
        let qty = $("input[name=qty]").val();
        let total = rate * qty;
        subtotal=total+subtotal;
        count++;
        $('.queue-list table').append('<tr>' +
        '<td>'+ count +'</td>'+
        '<td>'+ name +'</td>'+
        '<td>'+ rate +'</td>'+
        '<td>'+ qty +'</td>'+
        '<td>'+ total +'</td>'+
        '<td ><a href="" class="remove-item">Remove</a></td>'+
        + '</tr>');
        $('#totalBox').val(subtotal);
    });

    $('.remove-item').on('click','tr', function(e){

      remove(e);
    });
      
     
      
      $('ol').sortable();  
      
})
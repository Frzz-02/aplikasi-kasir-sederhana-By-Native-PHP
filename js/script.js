$(function(){

    // $('#cari').hide();

    $('#search').on('keyup', function() {
   
   
        // $('#load').show();    
        $.get('../ajax/ajaxB.php?search=' + $('#search').val(), function(data) {
            $('#item-list').html(data);
            // $('#load').hide();
        });
    });

});
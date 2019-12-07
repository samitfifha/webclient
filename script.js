$(document).ready(function(){

    // Delete 
    $('.delete').click(function(){                /*del_id*/
        var el = this;
        var id = this.id;
        var splitid = id.split("_");

        // Delete id
        var deleteid = splitid[1];
        
        // AJAX Request
        $.ajax({
            url: 'remove.php',
            type: 'POST',
            data: { id:deleteid },
            success: function(response){

                if(response == 1){
                    // Remove row from HTML Table
                    $(el).closest('tr').css('background','tomato');
                    $(el).closest('tr').fadeOut(800,function(){
                        $(this).remove();
                    });
                }else{
                    alert('Invalid ID.');
                }
            }
        });
    });
    

    
});
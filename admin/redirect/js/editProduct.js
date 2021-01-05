$(document).ready(function(){  
      $('body').on('click','.editProduct',function(){  
        var proID           = $(this).attr("id");
        var startID         = $("#startID").val();
        var length          = $("#length").val();
        var manufacturer    = $("#manufacturer").val();
        var productName     = $("#productName").val();
        var Price           = $("#Price").val();
        var endirim         = $("#endirim").val();
        var about           = $("#about").val();
        $('#proID').val(proID);
        $('#startN').val(startID);
        $('#pageN').val(length);
        $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
             
        $.ajax({  
             url:"editProduct.php",  
             method:"POST",  
             data:$('#insert_form').serialize(),  
             beforeSend:function(){  
                  $('#insert').val("Yenilənilir...");  
             },  
             success:function(data){  
                  $('#insert_form')[0].reset();  
                  $('#add_data_Modal').modal('hide');
                  $('#products').DataTable().ajax.reload( null, false );
             }  
        });
        });
      }); 
 });
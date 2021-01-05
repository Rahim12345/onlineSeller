$(document).ready(function(){  
      $('body').on('click','.view_data',function(){  
        var proID = $(this).attr("id");
        var startID = $("#startID").val();
        var length = $("#length").val();
        $.ajax({  
           url:"select.php",  
           method:"POST",  
           data:{proID:proID},  
           beforeSend:function(){  
                $('#insert').val("Yerləşdirilir...");  
           },  
           success:function(data){  
                $('#edit-form').html(data);
                $('#add_data_Modal').modal("show");
           }  
        });  
      }); 
 });
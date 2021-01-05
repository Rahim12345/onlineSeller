$(document).ready(function(){  
      $('body').on('click','.message',function(){  
        var messageID = $(this).attr("message-id");
        $.ajax({  
           url:"showMessage.php",  
           method:"POST",  
           data:{messageID:messageID},
           success:function(data){  
            var getarray = jQuery.parseJSON(data);
            var modal               = getarray.modal;
            var notification   = getarray.notification;
                $('#messageContent').html(modal);
                $('.mx-1').html(notification);
           } 
        });  
      }); 
 });
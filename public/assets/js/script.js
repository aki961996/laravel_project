
  
$(function () {
     $('[data-toggle="tooltip"]').tooltip();
       
     $('#ajax-form').submit(function (e) {
          e.preventDefault();
       
          var url = $(this).attr("action");
          let formData = new FormData(this);
          console.log(formData);
  
          $.ajax({
               type: 'POST',
               url: url,
               data: formData,
               contentType: false,
               processData: false,
         
                   success: (response) => {
                    alert('Form submitted successfully');
                        location.reload();
                    window.location.href = 'borrowers'; 
                },
    
                   
             
               error: function (response) {
                    // $('#ajax-form').find(".print-error-msg").find("ul").html('');
                    // $('#ajax-form').find(".print-error-msg").css('display','block');
                    // $.each( response.responseJSON.errors, function( key, value ) {
                    //     $('#ajax-form').find(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    // });
               }
          });
      
     });
    

          
});


 
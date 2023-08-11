
  
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
         
               // success: (response) => {
                        
               //      if (response.status === true) {
                             
               //       alert(response.success);
               //        location.reload();
               //      window.location.href = 'borrowers'; 
               //  } else {
               //      // Handle other success scenarios
               //  }
               //      // alert('Form submitted successfully');
               //      //     location.reload();
               //      // window.location.href = 'borrowers'; 
               // },
               
                success: function (response) {
        if (response.status === 'true') {
            alert(response.success);
             location.reload();
              window.location.href = 'borrowers'; 
        } else {
            console.log('An error occurred.');
        }
    },
    
                   
             
               error: function (response) {
                   if (response.status === 422) {
                    var errors = response.responseJSON.errors;

                    // Clear previous error messages
                    $('.print-error-msg').empty();

                    $.each(errors, function (key, value) {
                         var inputElement = $('[name="' + key + '"]');
                      
                         var errorContainer = inputElement.siblings('.print-error-msg');
                     
                         var errorMessages = value.join('<br>');
                         
                        errorContainer.html(errorMessages).css('display', 'block');
                    });
                } else {
                    console.log('An error occurred.');
                }
                }
          });
      
     });
    

          
});


 
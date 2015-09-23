$(function(){
	$('#submitbutton').click(function() {  
    	// validation et process ici  
		$('#mailform').validate({
			rules: {
				// les règles pour les champs (email/phone etc...)
			},
			
			// JQuery's awesome submit handler.
			submitHandler : function() {
			
				// Create variables from the form
				var to = $('input#to').val();
				var fullname = $('input#fullname').val(); 
				var emailaddress = $('input#emailaddress').val();  
				var message = $('textarea#message').val();
			
				// Create variables that will be sent in a URL string to mail.php
				var dataString = 'to=' + to + '&fullname='+ fullname + '&emailaddress=' + emailaddress + '&message=' + message;
				
				// The AJAX
				$.ajax({  
				  type: 'POST',
				  url: '/path/to/mail.php',
				  data: dataString,
				  success(function(data) {
					// This is a callback that runs if the submission was a success.
					
					// Clear the form
					$(':input','#mailform')
					 .not(':button, :submit, :reset, :hidden')
					 .val('')
					 .removeAttr('checked')
					 .removeAttr('selected');
					return false;
				  }),
					error(function(){
						alert('Whoops! This didn\'t work. Please contact us.')
					});
				});

				
				return false;
			};
		});
	});
});
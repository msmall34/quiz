<footer>
            
</footer>
    
   <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>

		<script>
			$(document).ready(function() {

				$("#signin").validate({

					rules : {
						name : {
							required : true,
							minlength : 3,
							remote : {
								url : "check_name.php",
								type : "post",
								data : {
									username : function() {
										return $("#name").val();
									}
								}
							}
						},
						category:{
						    required : true
						}
					},
					messages : {
						name : {
							required : "Veuillez entrer votre nom ",
							remote : "Ce nom est déjà pris, veuillez en choisir un autre"
						},
						category:{
                            required : "Choisissez une catégorie pour commencer le quiz"
                        }
					},



					submitHandler : function() {
					    
						if (form.valid()) {
							return true;
						} else {
							return false;
						}

					},
					
					errorPlacement : function(error, element) {
						$(element).closest('.form-group').find('.help-block').html(error.html());
					},
					highlight : function(element) {
						$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
					},
					
				});

				$('.cont').addClass('hide');
				count=$('.questions').length;
				$('#question'+1).removeClass('hide');

				$(document).on('click','.next',function(){
					element=$(this).attr('id');
					last = parseInt(element.substr(element.length - 1));
					nex=last+1;
					$('#question'+last).addClass('hide');

					$('#question'+nex).removeClass('hide');
				});

				$(document).on('click','.previous',function(){
					element=$(this).attr('id');
					last = parseInt(element.substr(element.length - 1));
					pre=last-1;
					$('#question'+last).addClass('hide');

					$('#question'+pre).removeClass('hide');
				});

				

			});

		</script>

    	
</body>
</html>

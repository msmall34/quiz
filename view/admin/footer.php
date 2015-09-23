	<?php //endif; ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
	<script>
	        tinymce.init({
	        	selector:'textarea',
	        	entity_encoding : "raw",
	        	force_br_newlines : true,
    			force_p_newlines : false,
    			forced_root_block : ''
	        });
	</script>
	<script>
	  $(function () {
	    $('#myTab a:first').tab('show');
	  })
	  $('#myTab a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		})
	</script>
	<script>
	function getSelectedImg(){
		var src = $('div.active > p > img').attr('src');
		src = src.replace("../","");
		$('#image').val(src);
		return false;
	}

	$(window).load(function(){
		$('div.image').click(function() {
			$('div.image.active').removeClass('active');
			$(this).addClass('active');
			getSelectedImg();
		})
	})
</script>

  </body>
</html>
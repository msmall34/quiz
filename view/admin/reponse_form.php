<div class="container">
	
	<form action="<?php if (isset($_GET['id']) && !empty($_GET['id']) ) : ?>update_reponse.php?id=<?php echo $id; else : ?>add_reponse.php<?php endif; ?>" method="POST" enctype="">
		

		<h1>Réponse 1</h1>

		<p><textarea rows="4" cols="10" name="answer1" ><?php if (isset($_POST['answer1']) && !empty($_POST['answer1'])) : echo $_POST['answer1']  ; elseif (isset($post['answer1'])) : echo $post['answer1']; endif; ?></textarea></p>
		
		<h1>Réponse 2</h1>

		<p><textarea rows="4" cols="10" name="answer2" ><?php if (isset($_POST['answer2']) && !empty($_POST['answer2'])) : echo $_POST['answer2']  ; elseif (isset($post['answer2'])) : echo $post['answer2']; endif; ?></textarea></p>

		<h1>Réponse 3</h1>

		<p><textarea rows="4" cols="10" name="answer3" ><?php if (isset($_POST['answer3']) && !empty($_POST['answer3'])) : echo $_POST['answer3']  ; elseif (isset($post['answer3'])) : echo $post['answer3']; endif; ?></textarea></p>

		<h1>Réponse 4</h1>

		<p><textarea rows="4" cols="10" name="answer4" ><?php if (isset($_POST['answer4']) && !empty($_POST['answer4'])) : echo $_POST['answer4']  ; elseif (isset($post['answer4'])) : echo $post['answer4']; endif; ?></textarea></p>

		<h1>Bonne réponse</h1>

		<p><textarea rows="4" cols="10" name="answer" ><?php if (isset($_POST['answer']) && !empty($_POST['answer'])) : echo $_POST['answer']  ; elseif (isset($post['answer'])) : echo $post['answer']; endif; ?></textarea></p>

		<input type="submit" class="btn btn-info">
		
	</form>

	<?php if ($success) : ?><p class="alert alert-success"><?php echo $success; ?></p><?php endif; ?>
	
</div>




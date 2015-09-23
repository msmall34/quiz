<div class="container">
	
	<form action="<?php if (isset($_GET['id']) && !empty($_GET['id']) ) : ?>update_question.php?id=<?php echo $id; else : ?>add_question.php<?php endif; ?>" method="POST" enctype="">
		

		<h1>Question</h1>

		<p><textarea rows="4" cols="10" name="question_name" ><?php if (isset($_POST['question_name']) && !empty($_POST['question_name'])) : echo $_POST['question_name']  ; elseif (isset($post['question_name'])) : echo $post['question_name']; endif; ?></textarea></p>
		
		<h1>Id/Catégories</h1>
		
		<p><input type="text" name="category_id" class="input-xxlarge" value="<?php if (isset($_POST['category_id']) && !empty($_POST['category_id'])) : echo $_POST['category_id']  ; elseif (isset($post['category_id'])) : echo $post['category_id']; endif; ?>"></p>

		<input type="submit" class="btn btn-info">
		
	</form>

	<?php if ($success) : ?><p class="alert alert-success"><?php echo $success; ?></p><?php endif; ?>
	
</div>




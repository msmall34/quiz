<div class="container">
	
	<form action="<?php if (isset($_GET['id']) && !empty($_GET['id']) ) : ?>update_category.php?id=<?php echo $id; else : ?>add_category.php<?php endif; ?>" method="POST" enctype="">
		

		<h1>Catégories</h1>
		
		<p><input type="text" name="category_name" class="input-xxlarge" value="<?php if (isset($_POST['category_name']) && !empty($_POST['category_name'])) : echo $_POST['category_name']  ; elseif (isset($post['category_name'])) : echo $post['category_name']; endif; ?>"></p>


		<input type="submit" class="btn btn-info">
		
	</form>

	<?php if ($success) : ?><p class="alert alert-success"><?php echo $success; ?></p><?php endif; ?>
	
</div>




<div class="container">
	<?php if($_SESSION['group'] == 'admin') : ?>
		<?php if ($count['0']['COUNT(*)'] > 0) : ?>
			<p class="alert alert-info">
			<a href="admin.php"><i class="fa fa-info-circle"></i> <?php echo $count['0']['COUNT(*)']; ?> utilisateur(s) en attente de validation !</a>
			</p>
		<?php endif; ?>
	<?php endif; ?>
	<div class="row center accueil">
		
		<div class="col-xs-12 col-md-4 text-center">
			<div class="rounded"><a href="questions.php"><i class="fa fa-question-circle"></i></a></div>
			<p><a href="questions.php">Questions</a></p>
		</div>
		<div class="col-xs-12 col-md-4 text-center">
			<div class="rounded"><a href="reponses.php"><i class="fa fa-check-square-o"></i></a></div>
			<p><a href="reponses.php">Réponses</a></p>
		</div>
		<div class="col-xs-12 col-md-4 text-center">
			<div class="rounded"><a href="categories.php"><i class="fa fa-list-ol"></i></a></div>
			<p><a href="categories.php">Catégories</a></p>
		</div>

	</div>

</div>
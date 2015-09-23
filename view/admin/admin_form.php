<div class="container">
	<h1>Créez votre compte</h1>
	<!--<p class="alert alert-info"><i class="fa fa-info-circle"></i> Votre accès ne sera libéré qu'après la confirmation de votre e-mail et la validation d'un administrateur !</p>-->
	<p class="alert alert-info"><i class="fa fa-info-circle"></i> Votre accès sera actif qu'après la validation de l'administrateur !</p>
	<form action="add_admin.php" method="POST">
		<p><label for="pseudo">Pseudo</label><input type="text" name="pseudo" value="<?php if ( isset($pseudo) ) echo $pseudo ;?>"></p>
		<?php if (isset($error['pseudo'])) : ?><p class="alert alert-danger"><?php echo $error['pseudo']; ?></p><?php endif; ?>
		<p><label for="email">Email</label><input type="text" name="email" value="<?php if ( isset($email) ) echo $email ;?>"></p>
		<?php if (isset($error['email']))  : ?><p class="alert alert-danger"><?php echo $error['email']; ?></p><?php endif; ?>
		<p><label for="pass">Mot de passe</label><input type="password" name="pass"></p>
		<p><label for="verification">Confirmation du mot de passe</label><input type="password" name="verification"></p>
		<?php if (isset($error['pass'])) : ?><p class="alert alert-danger"><?php echo $error['pass']; ?></p><?php endif; ?>
		<p><input type="submit" class="btn btn-info"></p>
	</form>
	<?php if ( isset($success) ) : ?><p class="alert alert-success"><?php echo $success; ?></p><?php endif; ?>
</div>
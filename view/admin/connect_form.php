<div class="container">
	<?php if (isset($error['connexion'])) : ?><p class="alert alert-danger"><?php echo $error['connexion']; ?></p><?php endif; ?>
	<form action="connect.php" method="POST">
		<p><label for="email">Email</label><input type="text" name="email" value="<?php if ( isset($email) ) echo $email ;?>"></p>
		<p><label for="pass">Mot de passe</label><input type="password" name="pass"></p>
		<p><input type="submit" class="btn btn-primary"></p>
	</form>
	<?php if ( isset($success) ) : ?><p class="alert alert-success"><?php echo $success; ?></p><?php endif; ?>
	<p>Vous n'avez pas de compte ? <a href="add_admin.php">Créez un compte</a></p>
</div>
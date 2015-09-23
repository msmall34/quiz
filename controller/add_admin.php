<?php
	require('../model/Database.class.php');
	require('../model/Admin.class.php');
	require('../classes/Form.class.php');
	require('../classes/Mail.class.php');

	if ( isset($_POST) && !empty($_POST) )
	{
		$admin = new Admin();

		$form = new Form();

		$pseudo = $_POST['pseudo'];

		$form->setPseudo($pseudo);

		$email = $_POST['email'];

		$form->setEmail($email);

		$pass = $_POST['pass'];

		$verification = $_POST['verification'];

		$form->setPass($pass,$verification);

		// si il n'y a pas d'erreur on crée l'utilisateur
		if ( !isset($error) )
		{
			$mail = new Mail();

			$sender = 'muriel.small@viseo.com';

			$to = $form->getEmail();

			$subject = 'confirmez votre adresse mail';

			$mail_controle = $mail->random(10);

			$admin->createAdmin($form->getPseudo(), $form->getPass(), $form->getEmail(), $mail_controle);

			$test = $mail->sendMailUserConfirmation($sender,$to,$subject,$mail_controle);

			$success = "Un e-mail vous a été envoyé. Merci de cliquer sur le lien pour confirmer votre inscription.";
		}
			
	}

	include_once('../view/admin/header.php');
	include_once('../view/admin/admin_form.php');
	include_once('../view/admin/footer.php');
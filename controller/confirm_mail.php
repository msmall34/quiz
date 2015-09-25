<?php
require('../model/Database.class.php');
require('../model/Admin.class.php');

if (isset($_GET) && !empty($_GET))
{
	$admin = new Admin();

	$email = $_GET['user'];

	$mail_controle =  $_GET['mail_controle'];

	$result = $admin->verifyControle($email);

	$controle = $result['0']['mail_controle'];

	if ($controle == $mail_controle)
	{
		$admin->validMail($email);

		$success = 'Votre mail a été confirmé, votre compte sera accessible après la validation de l\'administrateur !';
	}
}

	include_once('../view/admin/header.php');
	include_once('../view/admin/mail_confirmation.php');
	include_once('../view/admin/footer.php');
<?php
require('../model/Database.class.php');
require('../model/Admin.class.php');

if ( isset($_POST) && !empty($_POST) )
{
	$admin = new Admin();

	$email = $_POST['email'];

	$pass = $_POST['pass'];

	$pass = sha1($pass);

	$result = $admin->connect($email,$pass);

	if (!$result)
	{
		$error['connexion'] = 'adresse mail ou mot de passe incorrects';
	}
	else
	{
		session_start();
		$_SESSION['id'] = $result['id'];
		$_SESSION['pseudo'] = $result['pseudo'];
		$_SESSION['group'] = $result['group'];
		header('Location:http://www.msmall.fr/quiz/controller/index.php');
	}


}

include_once('../view/admin/header.php');
include_once('../view/admin/connect_form.php');
include_once('../view/admin/footer.php');
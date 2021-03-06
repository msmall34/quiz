<?php
session_start();
ini_set('display_errors', 1);

if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Reponses.class.php');

	if ( isset($_GET['id']) && !empty($_GET['id']) )
	{
		$id = $_GET['id'];

		$reponseEdit = new Reponses();

		$post = $reponseEdit->find($id);
	}

	if ( isset($_POST) && !empty($_POST) )
	{
		$post = new Reponses();

		$id = $_GET['id'];

		$reponse1 = addslashes($_POST['answer1']);
		$reponse2 = addslashes($_POST['answer2']);
		$reponse3 = addslashes($_POST['answer3']);
		$reponse4 = addslashes($_POST['answer4']);
		$reponse = addslashes($_POST['answer']);

		$post->updateReponse($id, $reponse1, $reponse2, $reponse3, $reponse4, $reponse );

		$success = 'Vos réponses ont bien été modifiées !';
	}
	include_once('../view/admin/header.php');
	include_once('../view/admin/reponse_form.php');
	include_once('../view/admin/footer.php');
	}
else
{
	header('Location:connect.php');
}
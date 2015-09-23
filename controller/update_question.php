<?php
session_start();
ini_set('display_errors', 1);

if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Questions.class.php');

	if ( isset($_GET['id']) && !empty($_GET['id']) )
	{
		$id = $_GET['id'];

		$questionEdit = new Questions();

		$post = $questionEdit->find($id);
	}

	if ( isset($_POST) && !empty($_POST) )
	{
		$post = new Questions();

		$id = $_GET['id'];

		$question_name = addslashes($_POST['question_name']);

		$category = $_POST['category_id'];

		$post->updateQuestion($id, $question_name, $category);

		$success = 'Votre question a été modifiée !';
	}
	include_once('../view/admin/header.php');
	include_once('../view/admin/question_form.php');
	include_once('../view/admin/footer.php');
	}
else
{
	header('Location:connect.php');
}
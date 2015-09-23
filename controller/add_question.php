<?php
session_start();
ini_set('display_errors', 1);
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Questions.class.php');

	if ( isset($_POST) && !empty($_POST) )
	{
		
		$post = new Questions();
		
		$question_name = addslashes($_POST['question_name']);

		$category = $_POST['category_id'];

		$post->createQuestion($id, $question_name, $category);

		$success = 'Votre question a été crée !';
	}
	include_once('../view/admin/header.php');
	include_once('../view/admin/question_form.php');
	include_once('../view/admin/footer.php');

}
else
{
	header('Location:connect.php');
}
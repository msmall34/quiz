<?php
session_start();
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Questions.class.php');

	if ( isset($_GET['id']) && !empty($_GET['id']) )
	{
		
		$id = $_GET['id'];

		$delete = new Questions();

		$post = $delete->deleteQuestion($id);
	}
	header('Location:questions.php');
}
else
{
	header('Location:connect.php');
}
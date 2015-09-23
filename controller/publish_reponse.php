<?php
session_start();
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Reponses.class.php');

	if ( isset($_GET['id']) && !empty($_GET['id']) )
	{

		$id = $_GET['id'];

		$publish = new Reponses();

		$post= $publish->publishReponse($id);
	}
	header('Location:reponses.php');
}
else
{
	header('Location:connect.php');
}
<?php
session_start();
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Category.class.php');

	if ( isset($_GET['id']) && !empty($_GET['id']) )
	{

		$id = $_GET['id'];

		$publish = new Category();

		$post= $publish->publishCategory($id);
	}
	header('Location:categories.php');
}
else
{
	header('Location:connect.php');
}
<?php
session_start();
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Admin.class.php');

	if ( isset($_GET['id']) && !empty($_GET['id']) )
	{
		$admin = new Admin();

		$id = $_GET['id'];

		$admin->authorizeAdmin($id);
	}
	header('Location:admin.php');
}
else
{
	header('Location:connect.php');
}
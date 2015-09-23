<?php
session_start();
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Admin.class.php');
	
	$admin = new Admin();

	$count = $admin->countAdmin('0');

	include_once('../view/admin/header.php');
	include_once('../view/admin/index.php');
	include_once('../view/admin/footer.php');
}
else
{
	header('Location:connect.php');
}
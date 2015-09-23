<?php
session_start();
if (isset($_SESSION['id']) && $_SESSION['group'] == 'admin')
{
	require('../model/Database.class.php');
	require('../model/Admin.class.php');

	$admin = new Admin();

	$actifs = $admin->queryAdmins(1);

	$inactifs = $admin->queryAdmins(0);

	include_once('../view/admin/header.php');
	include_once('../view/admin/admin_index.php');
	include_once('../view/admin/footer.php');
}
else
{
	header('Location:index.php');
}
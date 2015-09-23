<?php
session_start();
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Category.class.php');

	if ( isset($_POST) && !empty($_POST) )
	{
		
		$post = new Category();
		
		$category_name = addslashes($_POST['category_name']);

		$post->createCategory($category_name);

		$success = 'Votre catégorie a été crée !';
	}
	include_once('../view/admin/header.php');
	include_once('../view/admin/category_form.php');
	include_once('../view/admin/footer.php');

}
else
{
	header('Location:connect.php');
}
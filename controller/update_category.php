<?php
session_start();
ini_set('display_errors', 1);

if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Category.class.php');

	if ( isset($_GET['id']) && !empty($_GET['id']) )
	{
		$id = $_GET['id'];

		$categoryEdit = new Category();

		$post = $categoryEdit->find($id);
	}

	if ( isset($_POST) && !empty($_POST) )
	{
		$post = new Category();

		$id = $_GET['id'];

		$category_name = addslashes($_POST['category_name']);

		$post->updateCategory($id, $category_name);

		$success = 'Votre catégorie a été modifiée !';
	}
	include_once('../view/admin/header.php');
	include_once('../view/admin/category_form.php');
	include_once('../view/admin/footer.php');
	}
else
{
	header('Location:connect.php');
}
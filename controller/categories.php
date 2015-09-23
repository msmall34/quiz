<?php
session_start();
date_default_timezone_set('UTC');
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Category.class.php');

	$categories = new Category();

	$posts = $categories->queryCategory('1');

	$deletedPosts = $categories->queryCategory('0');

	foreach($posts as $key => $single_category) 
	{
		$post[$key]['id'] = $posts[$key]['id'];
		$post[$key]['category_name'] = $posts[$key]['category_name'];
	}

	foreach($deletedPosts as $key=> $deletedSingle_category) 
	{
		$deletedPost[$key]['id'] = $deletedPosts[$key]['id'];
		$deletedPost[$key]['category_name'] = $deletedPosts[$key]['category_name'];
	}

	// affichage de la view
	include_once ('../view/admin/header.php');
	include_once ('../view/admin/category_choice.php');
	include_once ('../view/admin/footer.php');
}
else
{
	header('Location:connect.php');
}
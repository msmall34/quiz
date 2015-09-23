<?php
session_start();
date_default_timezone_set('UTC');
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Questions.class.php');

	$questions = new Questions();

	$posts = $questions->queryQuestion('1');

	$deletedPosts = $questions->queryQuestion('0');

	foreach($posts as $key => $single_question) 
	{
		$post[$key]['id'] = $posts[$key]['id'];
		$post[$key]['question_name'] = $posts[$key]['question_name'];
		$post[$key]['category_id'] = $posts[$key]['category_id'];
	}

	foreach($deletedPosts as $key=> $deletedSingle_question) 
	{
		$deletedPost[$key]['id'] = $deletedPosts[$key]['id'];
		$deletedPost[$key]['question_name'] = $deletedPosts[$key]['question_name'];
		$deletedPost[$key]['category_id'] = $deletedPosts[$key]['category_id'];
	}

	// affichage de la view
	include_once ('../view/admin/header.php');
	include_once ('../view/admin/question_choice.php');
	include_once ('../view/admin/footer.php');
}
else
{
	header('Location:connect.php');
}
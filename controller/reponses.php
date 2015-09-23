<?php
session_start();
date_default_timezone_set('UTC');
if (isset($_SESSION['id']))
{
	require('../model/Database.class.php');
	require('../model/Reponses.class.php');

	$reponses = new Reponses();

	$posts = $reponses->queryReponse('1');

	$deletedPosts = $reponses->queryReponse('0');

	foreach($posts as $key => $single_reponse) 
	{
		$post[$key]['id'] = $posts[$key]['id'];
		$post[$key]['answer1'] = $posts[$key]['answer1'];
		$post[$key]['answer2'] = $posts[$key]['answer2'];
		$post[$key]['answer3'] = $posts[$key]['answer3'];
		$post[$key]['answer4'] = $posts[$key]['answer4'];
		$post[$key]['answer'] = $posts[$key]['answer'];
	}

	foreach($deletedPosts as $key=> $deletedSingle_reponse) 
	{
		$deletedPost[$key]['id'] = $deletedPosts[$key]['id'];
		$deletedPost[$key]['answer1'] = $deletedPosts[$key]['answer1'];
		$deletedPost[$key]['answer2'] = $deletedPosts[$key]['answer2'];
		$deletedPost[$key]['answer3'] = $deletedPosts[$key]['answer3'];
		$deletedPost[$key]['answer4'] = $deletedPosts[$key]['answer4'];
		$deletedPost[$key]['answer'] = $deletedPosts[$key]['answer'];
	}

	// affichage de la view
	include_once ('../view/admin/header.php');
	include_once ('../view/admin/reponse_choice.php');
	include_once ('../view/admin/footer.php');
}
else
{
	header('Location:connect.php');
}
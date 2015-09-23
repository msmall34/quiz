<?php

class Category
{

	public function createCategory($category_name)
	{
		$sql = "INSERT INTO quizVtrois_categories (category_name, status) VALUES('$category_name', '1') ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function updateCategory($id, $category_name)
	{
		$sql = "UPDATE quizVtrois_categories SET category_name = '$category_name' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function deleteCategory($id)
	{
		$sql = "UPDATE quizVtrois_categories SET status = '0' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function publishCategory($id)
	{
		$sql = "UPDATE quizVtrois_categories SET status = '1' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function archiveCategory($id)
	{
		$sql = "UPDATE quizVtrois_categories SET status = '2' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function find($postId)
	{
		$sql = "SELECT * FROM quizVtrois_categories WHERE id = '$postId' ";

		$database = new Database();

		$post = $database->queryOne($sql);

		return $post;
	}

	public function queryCategory($status)
	{
		$sql = "SELECT * FROM quizVtrois_categories WHERE status = ? ORDER BY id ASC";

		$database = new Database();

		$criteria = array($status);

		$posts = $database->query($sql, $criteria);

		return $posts;
	}
}
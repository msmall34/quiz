<?php

class Questions
{
	public function createQuestion($id, $question_name, $category)
	{
		$sql = "INSERT INTO quizVtrois_questions (question_name, category_id, status) VALUES ('$question_name','$category', '1')";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function updateQuestion($id, $question_name, $category)
	{
		$sql = "UPDATE quizVtrois_questions SET question_name = '$question_name', category_id = '$category' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}



	public function deleteQuestion($id)
	{
		$sql = "UPDATE quizVtrois_questions SET status = '0' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function publishQuestion($id)
	{
		$sql = "UPDATE quizVtrois_questions SET status = '1' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}


	public function find($postId)
	{
		$sql = "SELECT * FROM quizVtrois_questions WHERE id = '$postId' ";

		$database = new Database();

		$post = $database->queryOne($sql);

		return $post; 
	}

	public function queryQuestion($status)
	{
		$sql = "SELECT * FROM quizVtrois_questions WHERE status = ? ORDER BY category_id ASC";

		$database = new Database();

		$criteria = array($status);

		$posts = $database->query($sql,$criteria);

		return $posts;
	}


	//  public function queryQuestions()
	// {
	// 	$sql = "SELECT COUNT(*) FROM quizVtrois_questions  WHERE category_id='$category' ORDER BY RAND()";

	// 	 $database = new Database();

	// 	 $database->executeSql($sql);

 //         $rows = $database->fetchColumn(); 
	// }


	 public function queryQuestions()
	{
		
		$sql = "SELECT * FROM quizVtrois_questions
		INNER JOIN quizVtrois_reponses
		ON quizVtrois_questions.id=quizVtrois_reponses.id 
		WHERE category_id='$category' 
		ORDER BY RAND()";

		 $database = new Database();

		 $database->executeSql($sql);

	}

	
}
<?php

class Reponses
{

	 public function createReponse($reponse1, $reponse2, $reponse3, $reponse4, $reponse)
    {
        $sql = "INSERT INTO quizVtrois_reponses (answer1, answer2, answer3, answer4, answer, status ) VALUES ('$reponse1', '$reponse2', '$reponse3', '$reponse4', '$reponse', '1') ";

        $database = new Database();

        $database->executeSql($sql);

        

    }


   public function updateReponse($id, $reponse1, $reponse2, $reponse3, $reponse4, $reponse)
	{
		$sql = "UPDATE quizVtrois_reponses SET answer1 = '$reponse1', answer2 = '$reponse2', answer3 = '$reponse3', answer4 = '$reponse4', answer = '$reponse' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}



	public function deleteReponse($id)
	{
		$sql = "UPDATE quizVtrois_reponses SET status = '0' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function publishReponse($id)
	{
		$sql = "UPDATE quizVtrois_reponses SET status = '1' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}


	public function find($postId)
	{
		$sql = "SELECT * FROM quizVtrois_reponses WHERE id = '$postId' ";

		$database = new Database();

		$post = $database->queryOne($sql);

		return $post; 
	}

	public function queryReponse($status)
	{
		$sql = "SELECT * FROM quizVtrois_reponses WHERE status = ? ORDER BY id ASC";

		$database = new Database();

		$criteria = array($status);

		$posts = $database->query($sql,$criteria);

		return $posts;
	}


	 public function queryReponses()
	{
		$sql = "SELECT COUNT(*) FROM quizVtrois_reponses  WHERE category_id='$category' ORDER BY RAND()";

		 $database = new Database();

		 $database->executeSql($sql);

         $rows = $database->fetchColumn(); 
	}

	
}
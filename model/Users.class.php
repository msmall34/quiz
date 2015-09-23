<?php

class Users
{

	public function createUser($id, $name, $score, $category)
    {
        $sql = "INSERT INTO quizVtrois_users (id, user_name, score, category_id) VALUES ('NULL','$name',0,'$category')";

        $database = new Database();

        $database->executeSql($sql);
    }


    

    
}
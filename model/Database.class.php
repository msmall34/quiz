<?php

class Database
{
	private $pdo;

	public function __construct()
	{
		try {
		    $this->pdo = new PDO('mysql:host=;dbname=', '', '');
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	}
	// requête insertion et update bdd
	public function executeSql($sql)
	{
		$stmt = $this->pdo->prepare($sql);

		$stmt->execute();

	}
	// requête lire plusieurs lignes
	public function query($sql, array $criteria)
	{
		$query = $this->pdo->prepare($sql);

		$query->execute($criteria);

		return $query->fetchAll(PDO :: FETCH_ASSOC);
	}
	// requête lire seulement une ligne
	public function queryOne($sql)
	{
		$query = $this->pdo->prepare($sql);

		$query->execute();

		return $query->fetch(PDO :: FETCH_ASSOC);
	}

	public function queryAllQuestions()
	{
		$sql = "SELECT * FROM quiz_questions ";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	public function queryAllReponses()
	{
		$sql = "SELECT * FROM quiz_reponses ";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	public function queryAllValidation()
	{
		$sql = "SELECT * FROM quiz_validation ";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	

}
<?php

class Admin
{
	public function createAdmin($pseudo, $pass, $email, $mail_controle)
	{
		$sql = "INSERT INTO quizVtrois_admin (`pseudo`, `pass`, `email`, `date_inscription`, `group`, `mail_controle`) VALUES ( '$pseudo', '$pass', '$email', NOW(), 'user', '$mail_controle') ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function queryAdmins($status)
	{
		$sql = "SELECT * FROM quizVtrois_admin WHERE status = ? AND mail_confirmation = '1' ";

		$database = new Database();

		$criteria = array($status);

		$result = $database->query($sql,$criteria);

		return $result;
	}

	public function authorizeAdmin($id)
	{
		$sql = "UPDATE quizVtrois_admin SET status = '1' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function deauthorizeAdmin($id)
	{
		$sql = "UPDATE quizVtrois_admin SET status = '0' WHERE id = '$id' ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function verifyPseudo($pseudo)
	{
		$sql = " SELECT pseudo FROM quizVtrois_admin WHERE pseudo = ? ";

		$criteria = array($pseudo);

		$database = new Database();

		$result = $database->query($sql,$criteria);

		return $result;
	}

	public function verifyEmail($email)
	{
		$sql = " SELECT email FROM quizVtrois_admin WHERE email = ? ";

		$criteria = array($email);

		$database = new Database();

		$result = $database->query($sql,$criteria);

		return $result;
	}

	public function verifyControle($email)
	{
		$sql = "SELECT mail_controle FROM quizVtrois_admin WHERE email = ? ";

		$criteria = array($email);

		$database = new Database();

		$result = $database->query($sql,$criteria);

		return $result;
	}

	public function validMail($email)
	{
		$sql = "UPDATE quizVtrois_admin SET mail_confirmation = '1' WHERE email = '$email' ";

		$database = new Database();

		$database->executeSql($sql);
	}

	public function connect($email, $pass)
	{
		$sql = " SELECT *  FROM quizVtrois_admin WHERE email = '$email' AND pass = '$pass' AND status = '1' ";

		$database = new Database();

		$result = $database->queryOne($sql);

		return $result;
	}

	public function countAdmin($status)
	{
		$sql = "SELECT COUNT(*) FROM quizVtrois_admin WHERE status = ? ";

		$criteria = array($status);

		$database = new Database();

		$result = $database->query($sql,$criteria);

		return $result;
	}
}
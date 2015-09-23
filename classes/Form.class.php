<?php

class Form
{
	private $pseudo;

	private $email;

	private $pass;



	public function setPseudo($pseudo)
	{
		$admin = new Admin();

		$pseudoVerified = $admin->verifyPseudo($pseudo);


		if ( $pseudo == "" )
		{
			global $error;

			$error['pseudo'] = "Veuillez renseigner un pseudo !";
		}
		elseif( isset($pseudoVerified) && !empty($pseudoVerified) )
		{
			global $error;

			$error['pseudo'] = "Un autre utilisateur utilise déjà ce pseudo !";
		}
		else
		{
			$this->pseudo = $pseudo;
		}
	}

	public function getPseudo()
	{
		return $this->pseudo;
	}




	// email interne pour outil de gestion
	public function setEmail($email)
	{
		$admin = new Admin();

		$emailVerified = $admin->verifyEmail($email);

		$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

		// $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@(viseo\.fr|viseo\.com)/";

		if ( $email == "" )
		{
			global $error;

			$error['email'] = "Veuillez renseigner un email !";
		}
		elseif (preg_match($regex, $email) == 0 )
		{
			global $error;

			$error['email'] = "Adresse mail non valide";
		}
		elseif ( isset($emailVerified) && !empty($emailVerified) )
		{
			global $error;

			$error['email'] = "Un autre utilisateur utilise déjà cet adresse mail !";
		}
		else
		{
			$this->email = $email;
		}
	}

	public function getEmail()
	{
		return $this->Email;
	}

	

	public function setPass($pass,$verification)
	{
		if ( $pass == "" )
		{
			global $error;

			$error['pass'] = "Veuillez renseigner un mot de passe";
		}
		elseif ( $pass != $verification )
		{
			global $error;

			$error['pass'] = "Mot de passe différent de la confirmation";
		}
		else
		{
			$this->pass = sha1($pass);
		}
	}

	public function getPass()
	{
		return $this->pass;
	}

	

	

	
	public function mailConfirm($mail1,$mail2)
	{
		if ( $mail1 != $mail2 )
		{
			global $error;	

			$error['mailconfirm'] = "Mail de confirmation est différent de votre e-mail";
		}
	}

}

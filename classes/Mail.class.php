<?php
class Mail
{	
	private $sender;
	private $to;
	private $subject;
	private $email;

	//SETTERS

	public function setSender($sender)
	{
		$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

		if (preg_match($regex, $sender) == 0)
		{
			$error['email'] = 'mail non valide';
		}
		else
		{
			$this->sender = $sender;
		}
	}

	public function setTo($to)
	{
		$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

		if (preg_match($regex, $to) == 0)
		{
			$error['email'] = 'mail non valide';
		}
		else
		{
			$this->to = $to;
		}
	}

	public function setSubject($subject)
	{
		$this->subject = $subject;
	}

	public function setEmail($mail_controle,$to)
	{
		$this->email = "Bonjour,\r\n
		Votre inscription a bien été enregistrée !\r\n
		Veillez confirmer votre e-mail en clicant sur l'adresse suivant :\r\n
		http://www.msmall.fr/quiz/controller/confirm_mail.php?user=".$to."&mail_controle=".$mail_controle."\r\n
		Si le lien ne marche pas, copiez l'adresse et l'ouvrez dans votre navigateur (chrome, firefox, safari, etc) !";
	}

	//GETTERS

	public function getSender()
	{
		return $this->sender;
	}

	public function getTo()
	{
		return $this->to;
	}

	public function getSubject()
	{
		return $this->subject;
	}

	public function getEmail()
	{
		return $this->email;
	}

	//METHODS

	public function random($car)
	{
		$string = '';

		$chaine = 'abcdefghijklmnopqstuvxxyzABCDEFGHIJKLMNOPQRSTUV01234567890';

		srand((double)microtime()*1000000);

		for($i = 1; $i < $car; $i++)
		{
			$string .= $chaine[rand()%strlen($chaine)];
		}

		return $string;
	}


	public function sendMailUserConfirmation($sender,$to,$subject,$email)
	{
		$this->setSender($sender);

		$this->setTo($to);

		$this->setSubject($subject);

		$this->setEmail($email,$to);

		$headers   = array();
		$headers[] = "From: ".$sender;
		$headers[] = "Reply-To: ".$sender;

		mail($this->to, $this->subject, $this->email, implode("\r\n", $headers));
	}
}
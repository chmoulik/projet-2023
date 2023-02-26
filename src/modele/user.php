<?php


class Users extends Db
{
	private $id;
	private $first_name;
	private $last_name;
	private $email;
	private $password;


	public  function __construct($data) // Constructor Users::__construct() cannot be static. pk?
	{
		$this->setName($data["first_name"]);
		$this->setName($data["last_names"]);
		$this->setEmail($data["email"]);
		$this->setPassword($data["password"]);
	}



	public function insert() // to add a new user.
	{
		$requete = "INSERT INTO 'Users' ( `first_name`, `last_names`, `email`, `password`) VALUES (?, ?, ?, ?)";
		$requetePreparee = (self::getDb())->prepare($requete);
		$reponse = $requetePreparee->execute([
			$this->first_name,
			$this->last_name,
			$this->email,
			$this->password,
		]);
		if (!$reponse) {
			$_SESSION["message"] .= "Erreur lors de l'ajout en bdd";
		}
	}

	// INSERT INTO Users (first_name, last_name, email, password) VALUES ('simon', 'aziza', 'paris', azerty)

	/**
	 * Get the value of id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of the last name
	 */
	public function getName()
	{
		return $this->last_name;
	}


	/**
	 * Set the value of the last name
	 *
	 * @return  self
	 */
	public function setName($last_name) // $last_name ligne 72 lier à $last_name ligne 74.
	{
		$this->last_name = $last_name;

		return $this;
	}


	/**
	 * Get the value of the email
	 */
	public function getEmail()
	{
		return $this->email;
	}


	/**
	 * Set the value of email
	 *
	 * @return  self
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of password
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Set the value of password
	 *
	 * @return  self
	 */
	public function setPassword($password)
	{
		$this->password = $password;

		return $this;
	}
}

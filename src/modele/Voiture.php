<?php


class Voiture extends Db
{
	private $id;
	private $marque;
	private $couleur;
	private $kilometrage;
	private $modele;


    public static function __construct($data)
    {
        $this->setMarque($data["marque"]);
        $this->setCouleur($data["couleur"]);
        $this->setKilometrage($data["kilometrage"]);
        $this->setModele($data["modele"]);
    }

    public function insert()
    {
        $requete = "INSERT INTO blabla ? ? ? ?";
        $requetePreparee = (self::getDb())->prepare($requete);
        $reponse = $requetePreparee->execute([
            $this->marque, 
            $this->couleur, 
            $this->kilometrage, 
            $this->modele, 
        ]);
        if (!$reponse)
        {
            $_SESSION["message"] .= "Erreur lors de l'ajout en bdd";
        }


    }


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
	 * Get the value of marque
	 */ 
	public function getMarque()
	{
		return $this->marque;
	}

	/**
	 * Set the value of marque
	 *
	 * @return  self
	 */ 
	public function setMarque($marque)
	{
		$this->marque = $marque;

		return $this;
	}

	/**
	 * Get the value of couleur
	 */ 
	public function getCouleur()
	{
		return $this->couleur;
	}

	/**
	 * Set the value of couleur
	 *
	 * @return  self
	 */ 
	public function setCouleur($couleur)
	{
		$this->couleur = $couleur;

		return $this;
	}

	/**
	 * Get the value of kilometrage
	 */ 
	public function getKilometrage()
	{
		return $this->kilometrage;
	}

	/**
	 * Set the value of kilometrage
	 *
	 * @return  self
	 */ 
	public function setKilometrage($kilometrage)
	{
		$this->kilometrage = $kilometrage;

		return $this;
	}

	/**
	 * Get the value of modele
	 */ 
	public function getModele()
	{
		return $this->modele;
	}

	/**
	 * Set the value of modele
	 *
	 * @return  self
	 */ 
	public function setModele($modele)
	{
		$this->modele = $modele;

		return $this;
	}
}
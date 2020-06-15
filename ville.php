<?php

/**
 * 
 */
class Ville
{
	private $nom;
	private $departement;

	public function __construct()
	{
		$this->nom = 'Paris';
		$this->departement = 75;
	}

	public function getNom()
	{
		return $this->nom;
	}

	public function setNom($nom)
	{
		return $this->nom = $nom;
	}

	public function getDepartement()
	{
		return $this->departement;
	}

	public function setDepartement($departement)
	{
		return $this->departement = $departement;
	}

	public function affichage()
	{
		return "la ville " . $this->getNom() ." est dans le département " . $this->getDepartement();
	}
}

$ville = new Ville();
$ville2 = new Ville();

$ville2->setNom("Trappes");
$ville2->setDepartement(78);
echo $ville->affichage();
echo "<br> ".$ville2->affichage();





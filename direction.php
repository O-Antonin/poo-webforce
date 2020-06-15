<?php

namespace Ecole\Direction;

class Personne
{
	
	private $nom;	
	private $prenom;
	private $etablissement;

	public function donneMoiLeNom($nom)
	{
		return $this->nom = $nom;
	}

	/*
	*
	* Les accesseurs
	* permet d'afficher la variable
	*/
	public function getNom()
	{
		return $this->nom;
	}

	/*
	* Methode, toujours en public
	* Les mutateurs
	* permet de modifier la variable
	*/
	public function setNom($nom)
	{
		return $this->nom = $nom;
	}

	/*
	*
	* Les accesseurs
	* permet d'afficher la variable
	*/
	public function getPrenom()
	{
		return $this->prenom;
	}

	/*
	* Methode, toujours en public
	* Les mutateurs
	* permet de modifier la variable
	*/
	public function setPrenom($prenom)
	{
		return $this->prenom = $prenom;
	}

	const MAJEUR = 18;

	public function bientotlapause()
	{
		echo "c'est la pause ???";
	}

	public function courir($prenom)
	{
		echo $prenom ." court vite que Bolt";
	}
}

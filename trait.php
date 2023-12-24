<?php

trait Adresse{
	private string $adresse;	
	
	public function getAdresse(){
		return $this->adresse;
	}
	
	public function setAdresse(string $adresse){
		$this->adresse = $adresse;
	}
}

class Employe{
	use Adresse;
	
	//Logique métier Employe
	//...
}

class Magasin{
	use Adresse;
	
	//Logique métier Magasin
	//...
}


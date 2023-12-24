<?php

// Difference entre une Interface et une Classe

// Une classe
namespace animal;
class Animal{
	protected string $nom;
	
	public function getNom(){
		return $this->nom;
	}
	
	public function setNom(string $nom = null){
		$this->nom = $nom;
	}
	public function dort(){
		echo('zzz');
	}
}

// Une interface 

interface AnimalInterface{
    public function getNom();
	public function setNom(string $nom = null);
	public function dort();
}
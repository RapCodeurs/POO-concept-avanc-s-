<?php

namespace animal;
include_once 'abstractWork.php';

abstract class Animal{
	protected string $nom;
	
	public function getNom(){
		return $this->nom;
	}
	
	public function setNom(string $nom = null){
		$this->nom = $nom;
	}
	public function dort(){
		echo("zzz");
	}
	
	public abstract function cri();
	
}
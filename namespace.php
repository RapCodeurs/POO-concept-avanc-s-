<?php

// Le namespace

namespace animal;

class Animal{
    public string $nom;

    public function setNom(string $nom = null){
        return $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function dort(){
       echo"ZZZZ";
    }
}

namespace chien;
namespace chat;
namespace main;


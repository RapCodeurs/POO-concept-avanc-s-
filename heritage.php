<?php

// Le namespace

namespace animal;
include_once 'indexChien.php';
// include_once 'indexChat.php';


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


// namespace chien;
// class Chien extends \animal\Animal{
//     public function aboie(){
//         echo "Wouf";
//     }
// }


// namespace chat;
// class Chat extends \animal\Animal{
//     public function miaule(){
//         echo "Miaou";
//     }
// }

namespace main;


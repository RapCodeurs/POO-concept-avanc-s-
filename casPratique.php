<?php

/*
1
Pour ce cas pratique, nous allons définir deux classes, 
une classe Homme, et une classe Femme. Ces deux classes vont hériter de la classe Personne. 
Ces classes devront posséder les attributs Prenom et Age.
De plus, ces deux classes devront implémenter la méthode “sePresenter” qui donnera ces résultats :
    Je suis un Homme de $age ans et je m’appelle $prenom
    Je suis une Femme age de $age et je m’appelle $prenom

Question
Dans un premier temps, définissez la classe Personne.
*/

class Personne{
    private string $age;
    private string $prenom;

    public function getAge(){
        return $this->age;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setAge(int $age){
        $this->prenom = $age;
    }

    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }

    public function __construct(string $prenom, int $age){
        $this->setAge($age);
        $this->setPrenom($prenom);
    }
}


/*
2
Définissez les classes Homme et Femme, en suivant les consignes précédentes, 
modifiez l’âge, le prénom et utilisez la méthode SePresenter. 
Assurez-vous d'utiliser les concepts d'héritage et d’interface.
*/

interface PresentationInterface{
	public function sePresenter();
}

class Homme extends Personne implements PresentationInterface{
	
	public function sePresenter(){
		echo("Je suis un Homme de ".$this->getAge()." ans et je m’appelle ".$this->getPrenom());
	}
}

class Femme extends Personne implements PresentationInterface{
	
	public function sePresenter(){
		echo("Je suis une Femme age de ".$this->getAge()." et je m’appelle ".$this->getPrenom());
	}
}

$monsieur = new Homme("john","28");
$monsieur->sePresenter();

$femme = new Femme("Marie","27");
$femme->sePresenter();


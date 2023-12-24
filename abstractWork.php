<?php

namespace chien;
include 'abstract.php';

class Chien extends \animal\Animal{
	public function cri(){
		echo("Wouf");
	}
}
namespace chat;
class Chat extends \animal\Animal{
	public function cri(){
		echo("Miaou");
	}
}


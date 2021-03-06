<?php

require_once 'controleurAuthentification.php';
require_once 'controleurJeu.php';


class Routeur {

	private $ctrlAuthentification;
	private $pseudo='';



	public function __construct() {
		$this->ctrlAuthentification= new ControleurAuthentification();
		$this->ctrlJeu= new ControleurJeu();

	}

  // Traite une requête entrante
	public function routerRequete() {

		if (isset($_POST['pseudo'])){
			$pseudo=$_POST['pseudo'];
		}
		else{
			$pseudo='';
		}
		$this->pseudo=$this->user=$this->ctrlAuthentification->accueil($pseudo);
		if ($this->pseudo!=''){
			$this->ctrlJeu->accueil();
		}
		
	}


}




?>
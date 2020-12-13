<?php
require_once PATH_VUE."/vue.php";
require PATH_MODELE."/UserDao.php";


class ControleurAuthentification{

	private $vue;
	private $userdao;


	function __construct(){
		$this->vue=new Vue();
		$this->userdao=new UserDao();
	}

	function accueil($pseudo){
			
		if ($pseudo!=''){
			if ($this->userdao->exists($pseudo)){
				return $pseudo;
			}
			else
			{
				$this->vue->demandePseudo();
				return '';
			}
		}
		else{
			$this->vue->demandePseudo();
			return '';
		}

	}




}
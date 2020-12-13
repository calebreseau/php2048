<?php
require_once PATH_VUE."/vue.php";
require_once "TileSet.php";

class ControleurJeu{

	private $vue;


	function __construct(){
		$this->vue=new Vue();
	}

	function accueil(){
        $gettiles=split($_GET['tiles'],',');
        $tileset=new TileSet($gettiles);
        switch ($_GET['move']){
            case 'up':
                $offset=-3;
            case 'down':
                $offset=3;
            case 'left':
                $offset=-1
                foreach ($tiles as $tile){
                    if (isset($tiles-3))
                }
        }
	}




}
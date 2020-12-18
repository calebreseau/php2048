<?php
require_once PATH_VUE."/vue.php";
require_once "TileSet.php";

class ControleurJeu{

	private $vue;


	function __construct(){
		$this->vue=new Vue();
	}

	function accueil(){
        if (isset($_GET['tiles'])){
            $gettiles=explode($_GET['tiles'],',');
        }
        else{
            $gettiles='2,0,0,0,0,0,0,0,0';
        }
        $tileset=new TileSet($gettiles);
        echo($_POST['move']);
        if (isset($_POST['move'])){
            $tileset->move(strtolower($_POST['move']));
        }
        $this->vue->afficherTiles($tileset->tiles);
	}




}
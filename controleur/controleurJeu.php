<?php
require_once PATH_VUE."/vue.php";
require_once "TileSet.php";


class ControleurJeu{

	private $vue;


	function __construct(){
		$this->vue=new Vue();
	}

	function accueil(){
        if (!isset($_GET['tiles'])){
            $_GET['tiles']='0,0,0,2,0,128,0,2,0,0,16,0,0,256,0,4';
        }
    
        echo('<br><br>');
        $tiles=$_GET['tiles'];
        $tileset=new TileSet($tiles);
        if (isset($_POST['move'])){
            $tileset->move(constant($_POST['move']));
        }
        $this->vue->afficherTiles($tileset->tiles);
	}




}
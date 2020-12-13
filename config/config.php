<?php

// les chemins vers les différents répertoires liés au modèle MVC

// chemin complet sur le serveur de la racine du site, il est supposé que config.php est dans un sous-repertoire de la racine du site 
define("HOME_SITE",__DIR__.DIRECTORY_SEPARATOR."..");

// définition des chemins vers les divers répertoires liés au modèle MVC
define("PATH_VUE",HOME_SITE.DIRECTORY_SEPARATOR."vue");
define("PATH_CONTROLEUR",HOME_SITE.DIRECTORY_SEPARATOR."controleur");
define("PATH_MODELE",HOME_SITE.DIRECTORY_SEPARATOR."modele");
define("PATH_METIER",HOME_SITE.DIRECTORY_SEPARATOR."metier");
define("PATH_DATA",HOME_SITE.DIRECTORY_SEPARATOR."data");

// données pour la connexion au sgbd

define("HOST","localhost");
define("BD","db2048.db");
define("LOGIN","");
define("PASSWORD","");



?>
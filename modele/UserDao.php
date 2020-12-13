<?php
require PATH_METIER.DIRECTORY_SEPARATOR."User.php";
require "SqliteConnexion.php";

class UserDao{

	// ajouter le(s) attribut(s)
	private $connexion;

	
	/** le constructeur de la classe
	*/
	public function __construct(){
		$this->connexion=SqliteConnexion::getInstance()->getConnexion();
	}
	
/**
méthode qui retourne un tableau de User avec le pseudo renseigné
@return tabeau de User avec le pseudo renseigné
@throws TableAccesException si la requête SQL pose problème
*/
	public function findAllByPseudo(): array{
		try{  
			$statement=$this->connexion->query("SELECT pseudo from joueurs;");
			$users=$statement->fetchAll(PDO::FETCH_CLASS,'User');		
			return($users);
		}
		catch(PDOException $e){
			throw new SQLException("problème requête SQL sur la table joueurs");

			
		}  
	}

/**
méthode qui détermine si un utilisateur avec un certain pseudo est dans la table pseudonyme
@param $pseudo un pseudo
@return true si le pseudo passé en pramètre correspond à un utilisateur dans la table utilisateur, false sinon
@throws TableAccesException si la requête SQL pose problème
*/
	public function exists(String $pseudo): bool{
		//try{  
			$statement = $this->connexion->prepare('select pseudo from joueurs where exists (select pseudo from joueurs where pseudo=?);');
			$statement->bindParam(1, $pseudoParam);
			$pseudoParam=$pseudo;
			$statement->execute();
			$result=$statement->fetch(PDO::FETCH_ASSOC);
			if ($result["pseudo"]!=Null){
				return true;
			}
			else{
				return false;
			}
		//}
		//catch(PDOException $e){
		//	throw new SQLException("problème requête SQL sur la table utilisateurs");
		//	
		//}
	}
}
?>
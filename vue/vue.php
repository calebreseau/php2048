<?php 
class Vue{

	function demandePseudo(){
		?>
		<!DOCTYPE html>
		<html>
		<head> 
			<title>TD6: login form </title>
		</head>
		<body>
			<br>
			<br>
			<form action="index.php" method="post">
				<label for="pseudo">Entrer votre pseudo: </label>
				<input type="text" name="pseudo" id="pseudo" required>
				<br>
				<br>
				<input type="submit" name="soumettre" value="envoyer"/>
			</form>
			<br>
			<br>
		</body>
		</html>
		<?php
	}

	//TODO: add method
	function afficherSalon(array $chatitems){
		?>
		<!DOCTYPE html>
		<html>
		<head> 
			<title>TD6: Salon textuel </title>
		</head>
		<body>
			<br>
			<br>
			<div style="border: solid;">
				<?php
					foreach (array_reverse($chatitems) as $_chatitem){
						echo($_chatitem.'<br/>');
					}
			?>
			</div>
			<form action="index.php" method="post">
				<label for="msg">Entrez votre message: </label>
				<input type="text" name="msg" id="msg" required>
				<input type="hidden" name="pseudo" value="<?php
					echo($_POST['pseudo']);
				?>">
				<br>
				<br>
				<input type="submit" name="soumettre" value="envoyer"/>
			</form>
			<br>
			<br>
		</body>
		</html>
		<?php
	}
}
?>
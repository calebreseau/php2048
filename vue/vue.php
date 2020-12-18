<?php 
class Vue{

	function demandePseudo(){
		?>
		<!DOCTYPE html>
		<html>
		<head> 
			<title>TD6: login form </title>
			<link rel='stylesheet' href='vue/style.css'>
		</head>
		<body>
			<br>
			<br>
			<div id="login" class='cont' >
				<form action="index.php" method="post">
					<label id="labelpseudo" for="pseudo">Entrez votre pseudo</label>
					<input type="text" name="pseudo" id="pseudo" required>
					<br>
					<input id="submit" type="submit" name="soumettre" value="envoyer"/>
				</form>
			</div>
			<br>
			<br>
		</body>
		</html>
		<?php
	}

	//TODO: add method

	function getcolor($value){
		if ($value+$value*8>255){
			return 'rgb(255,0,0);';
		} else {
			return 'rgb(255,'.strval(255-($value+$value*8)).','.strval(255-($value+$value*8)).');';
		}
	}
	function afficherTiles($tiles){
		?>
		<!DOCTYPE html>
		<html>
		<head> 
			<title>2048</title>
			<link rel='stylesheet' href='vue/style.css'>
		</head>
		<body>
			<br>
			<br>
			<div id="tileset" class='cont' style="border: solid;">
				<div>
				<?php
					echo('<div>');
					foreach ($tiles as $i=>$tile){
						echo('<div style="background:'.$this->getcolor($tile).'">'.$tile.'</div>');
						if ($i%4==3) echo('</div><div>');
					}
					echo('<br><br>');
				?>
				</div>
			</div>
			<form action="index.php" method="post">
				<input type="hidden" name="pseudo" value="<?php
					echo($_POST['pseudo']);
				?>">
				<br>
				<br>
				<input type="submit" name="move" value="UP"/>
				<input type="submit" name="move" value="DOWN"/>
				<input type="submit" name="move" value="LEFT"/>
				<input type="submit" name="move" value="RIGHT"/>
			</form>
			<br>
			<br>
		</body>
		</html>
		<?php
	}
}
?>
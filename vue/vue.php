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
	function afficherTiles($tiles){
		?>
		<!DOCTYPE html>
		<html>
		<head> 
			<title>2048</title>
			<style>/*
				#tileset{
					display: flex;
					flex-direction: row;
					flex-wrap: wrap;
				}

				*/	
			</style>
		</head>
		<body>
			<br>
			<br>
			<div id="tileset" style="border: solid;">
				<?php
					foreach($tiles as $xindex=>$row){
						echo('<br>');
						foreach($row as $yindex=>$tile){
							echo('<span id="'.strval(3*($xindex-1)+$yindex).'" class="'.$tile.' row'.strval($xindex).'">'.$tile.'</span>');
						}
					}
			?>
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
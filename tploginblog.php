<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="stylelogin.css">
	<script src="script.js"></script>
</head>

<body>

<?php
date_default_timezone_set('Europe/Paris');
	$jour = date('d');
	$mois = date('m');
	$annee = date('Y');
	$heure = date('H');
	$minute = date('i');

$fileopen=fopen('$fileopen','a+');

if(isset($_POST['titre'])!='' && isset($_POST['message'])!=''){
		
		fputs($fileopen, '<div><center><strong>'.htmlspecialchars($_POST['titre']).'</br></strong>');
		fputs($fileopen, $jour .'/'. $mois .'/'. $annee .'&nbsp&nbsp&nbsp'. $heure . 'h' . $minute."<br/>");
		fputs($fileopen, '</br>'.htmlspecialchars($_POST['message']).'</br></br></center></div></br>');
		
	}else{
		
		echo '<center>il faut renseigner un pseudo, un titre et un message!</center>';
		
	}
	
		fseek($fileopen, 0);
		$ligne = fgets($fileopen);
		echo $ligne;
		
		fclose($fileopen);
		
	unset($_POST['titre']);
	unset($_POST['message']);

?>

<form action="#" method="POST">
<div class="id" >
<h1><center>Blog</center></h1>
<p>
	<label for="titre"><center>Titre : </label><input type="text" name="titre" /></center>
	<br/>
	<br/>
	<label for="message"><center>Message : </label><input type="textarea" size="50" style="height:100px;" name="message" /></center>
	<br/>
	<br/>
	<center><input type="submit" value="Poster" /></center>
</p>
</div>
</form>
<form action="tplogout.php" method="POST">
<center><input type="submit" value="logout" /></center>
</form>
</body>
</html>
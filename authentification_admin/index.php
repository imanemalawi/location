<?php
	include '../includes/connection.php';


		if (isset($_GET['ERROR'])&&$_GET['ERROR']=="DATA") {
			$err="<div style='padding: 10px; text-align: center; margin: 0 10%; border-bottom: 2px solid red; margin-bottom: 15px; font-size: 16px; color: red; font-weight: bold;'>Adresse électronique ou mot de passe non incorrects <i class='fa fa-exclamation-circle'> </i></div>";
		}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CSS3 Lightbox - A CSS-only lightbox" />
    <meta name="keywords" content="css3, lightbox, overlay, effect, images, thumbnails" />
    <meta name="author" content="Codrops" />
	<title>Accueil</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="../Contenu/css/style.css" />
	<link rel="stylesheet" type="text/css" href="../Contenu/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../Contenu/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="../Contenu/css/font-awesome-4.7.0/css/font-awesome.min.css" />

</head>
<body>

	<?php require '../includes/header.php'; ?>

	<br /><br />

	<?php echo(isset($err) ? $err : ''); ?>

	<div>
		<div class="sessionForm rmUnderline">
			<center>
				<h3 style="color: red;">
					<i class="fa fa-lock"> </i>
					<b>Authentification</b>
				</h3>
				<div style="height: 20px;"></div>
			</center>
				<form action="controleur.php" method="post" >
					<label for="Identifiant">Identifiant</label>
					<input class="form-control" type="text" name="pseudo" placeholder="Saisir le nom d'utilisateur ici ..."><br />
					<label for="Identifiant">Mot de passe</label>
					<input class="form-control" type="password" name="pass" placeholder="Saisir le mot de passe ici ..."><br />
					<button type="submit" class="btn btn-primary pull-right">
						<span class="glyphicon glyphicon-log-in"></span> <b>Valider</b>
					</button><br/><br/><br/>

				</form>
			</div>
	</div>





	<script type="text/javascript" src="../Contenu/js/jquery compressed-3.2.1.min.js"></script>
	<script type="text/javascript" src="../Contenu/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../Contenu/js/script.js"></script>
	<script type="text/javascript" src="../Contenu/js/scriptAjaxReg.js"></script>


</body>
</html>

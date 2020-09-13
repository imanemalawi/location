<?php
	include '../includes/connection.php';
	if (!isset($_SESSION['pseudo'])) {
		header('Location: ../');
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
	<link rel="stylesheet" type="text/css" href="../Contenu/css/font-awesome-4.7.0/Contenu/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../Contenu/css/demo.css" />

</head>
<style type="text/css">
	body{overflow-y: hidden;}
</style>
<body id="page">

	<?php
		require 'vue/vueIndex.php';
	?>



	<script type="text/javascript" src="../Contenu/js/jquery compressed-3.2.1.min.js"></script>
	<script type="text/javascript" src="../Contenu/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../Contenu/js/script.js"></script>
	<script type="text/javascript" src="../Contenu/js/scriptAjaxReg.js"></script>


</body>
</html>

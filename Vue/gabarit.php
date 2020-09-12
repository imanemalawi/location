<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CSS3 Lightbox - A CSS-only lightbox" />
	<title>Accueil</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="Contenu/css/style.css" />
	<link rel="stylesheet" type="text/css" href="Contenu/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="Contenu/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="Contenu/css/font-awesome-4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="Contenu/css/demo.css" />

</head>
    <body id="page">
      <div class="container rmUnderline header">
	<div class="row">
		<div class="col-xs-12 reservationForm">
			<table width="100%">
				<tr>
					<td width="10%" class="home">
						<div>
							<a href="/site-location-vehicule/">
								<i class="fa fa-home fa-2x"> </i>
							</a>
						</div>
					</td>
					<td class="celSearch">
						<form id="search" method="post" action="/site-location-vehicule/resultats_recherche/">
							<div class="input-group">
								<input type="text" name="motCle" id="motCle" class="form-control" placeholder="Rechercher (marque, modèle, serie ou matricule)" />
								<span class="input-group-btn">
									<button type="submit" class="btn btn-danger" style="width: 60px;">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
							</div>
						</form>
					</td>
					<td class="contact_a_propos0">

					</td>
					<td align="right" class="contact_a_propos">
						<a href="#">
							<i class="fa fa-phone"> </i> Contacts
						</a> |
						<a href="#">
							<i class="fa fa-info-circle"> </i> A propos
						</a> |
						<a href="#">
							<i class="fa fa-bookmark"> </i> Mentions légales
						</a> |
						<a href="/site-location-vehicule/authentification_admin/">
							<i class="fa fa-user"> </i><i class="fa fa-cogs"> </i> Administration
						</a>
					</td>
					<td width="2.5%"></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="middleBar rmUnderline">

	<ul>
		<li>
			<i class="fa fa-car fa-2x"> </i>
			CarsLocation
		</li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#" class="help">
				<i class="fa fa-question fa-2x"> </i>
				Obtenir de l'aide
			</a>
		</li>
		<li class="pull-right">
			<span class="menuToggle">
				<span></span>
			</span>
		</li>
	</ul>

</div>
<div class="menuMinWidth rmUnderline">
	<a href="#">
		<div>
			<i class="fa fa-home"> </i>
			Home
		</div>
	</a>
	<a href="#">
		<div>
			<i class="fa fa-phone"> </i>
			Contacts
		</div>
	</a>
	<a href="#">
		<div>
			<i class="fa fa-info-circle"> </i>
			A propos
		</div>
	</a>
	<a href="#">
		<div>
			<i class="fa fa-bookmark"> </i>
			Mentions légales
		</div>
	</a>
	<a href="#">
		<div>
			<i class="fa fa-question"> </i>
			Obtenir de l'aide
		</div>
	</a>
	<a href="/site-location-vehicule/authentification_admin/">
		<div>
			<i class="fa fa-user"> </i><i class="fa fa-cogs"> </i> Administration
		</div>
	</a>
</div>
        <div class="">
          <?= $contenu ?>
        </div>

        <center>
	<table>
		<tr>
			<td align="right" class="contact_a_propos">
						<a href="#">
							<i class="fa fa-phone"> </i> Contacts
						</a> |
						<a href="#">
							<i class="fa fa-info-circle"> </i> A propos
						</a> |
						<a href="#">
							<i class="fa fa-bookmark"> </i> Mentions légales
						</a> |
						<a href="/site-location-vehicule/authentification_admin/">
							<i class="fa fa-user"> </i><i class="fa fa-cogs"> </i> Administration
						</a>
					</td>
		</tr>
	</table>
</center>



<script type="text/javascript" src="Contenu/js/jquery compressed-3.2.1.min.js"></script>
<script type="text/javascript" src="Contenu/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Contenu/js/script.js"></script>
    </body>
</html>

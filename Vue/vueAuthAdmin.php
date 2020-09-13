<?php $this->titre = "Authentification Admins"; ?>
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
					</button><br /><br /><br />

				</form>
			</div>
	</div>

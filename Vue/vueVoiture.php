<?php $titre = "Location Voitures - "; ?>




<div class="afficher">
  <div>
  				<?php echo "<img class='img-rounded' width='100%' src='Contenu/images_voitures/".$voiture['image']."' />"; ?>

  				<div><br />
  					<table class="table table-bordered table-hover">
  						<tr>
  							<td colspan="2">
  								<center><h2><i class="fa fa-wrench"> </i> Caratéristiques </h2></center>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Marque</b>
  							</td>
  							<td>
  								<?php echo($voiture['marque']); ?>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Modele</b>
  							</td>
  							<td>
  								<?php echo($voiture['modele']); ?>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Fabricant</b>
  							</td>
  							<td>
  								<?php echo($voiture['fabricant']); ?>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Source d'énergie</b>
  							</td>
  							<td>
  								<?php echo($voiture['couleur']); ?>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Contenance</b>
  							</td>
  							<td>
  								<?php echo($voiture['contenance']); ?>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Nombre de chaises</b>
  							</td>
  							<td>
  								<?php echo($voiture['chaises']); ?>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Vitesses Maximale</b>
  							</td>
  							<td>
  								<?php echo($voiture['vitesse_max']); ?>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Transmission</b>
  							</td>
  							<td>
  								<?php echo($voiture['transmission']); ?>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Accélération</b>
  							</td>
  							<td>
  								<?php echo($voiture['acceleration']); ?>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<b>Puisaance moteur</b>
  							</td>
  							<td>
  								<?php echo($voiture['puissance_moteur']); ?>
  							</td>
  						</tr>
  					</table>
  				</div>
  			</div>
</div>

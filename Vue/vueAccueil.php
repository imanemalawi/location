<?php $this->titre = "Mon Blog"; ?>
<div class="container" id="bodyTop">
	<div class="row">
		<div class="col-xs-12">

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-lg-7">

					<div class="smallWindowsRight reservationForm">
						<div class="title">
							<center>
								<i class="fa fa-dollar"> </i>
								<b>Les tops avec les meilleurs des prix !</b>
							</center>
						</div>

						<div class="contents rmUnderline">

								<b>Allez ! Réservez-vous les véhicules de classe cinq étoiles</b>&nbsp;&nbsp;
								<span style="color: #d9d714;">
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
									<i class="fa fa-star"> </i>
								</span>
								<div style="height: 10px;"></div>
								<a href="#" class="btn btn-success btn-sm">
									<i class="fa fa-share"> </i>
									<b>OK, j'y vais !</b>
								</a>
								<a href="#" class="btn btn-default btn-sm">
									<i class="glyphicon glyphicon-hand-right"> </i>
									<b>Je veux visiter</b>
								</a>
								<div style="height: 10px;"></div>
								Suivez - nous sur nos pages officielles :
								<div style="height: 10px;"></div>
								<a href="#" style="color: #1b86c4;">
									<i class="fa fa-facebook-square fa-2x"> </i>
								</a>&nbsp;
								<a href="#" style="color: #c4371b;">
									<i class="fa fa-google fa-2x"> </i>
								</a>&nbsp;
								<a href="#" style="color: #5d67b4;">
									<i class="fa fa-yahoo fa-2x"> </i>
								</a>&nbsp;
								<a href="#" style="color: #1f7493;">
									<i class="fa fa-linkedin fa-2x"> </i>
								</a>&nbsp;
								<a href="#" style="color: #df780a;">
									<i class="fa fa-instagram fa-2x"> </i>
								</a>

								<span class="pull-right">
									<a href="#" style="color: #df780a;"><i class="fa fa-envelope fa-2x"> </i></a>
								</span>


						</div>

					</div>


				</div>

				<div class="col-xs-12 col-sm-6 col-lg-5">
					<div class="panel panel-danger reservationForm">
						<div class="panel-heading">
							<center>

								<b>Réservation</b>
							</center>
						</div>
						<div class="panel-body">

								<label>Date début</label> : La date du début de location<br />
								<input type="number" id="jourD" name="jourDebut" max="31" min="1" placeholder="1" />
								<input type="number" id="moisD" name="moisDebut" max="12" min="1" placeholder="1" />
								<input type="number" id="anneeD" name="anneeDebut" max="2019" min="2018" placeholder="2018" />
								<div style="height: 10px;"></div>
								<label>Date fin</label> : La date de fin de location<br />
								<input type="number" id="jourA" name="jourFin" max="31" min="1" placeholder="1" />
								<input type="number" id="moisA" name="moisFin" max="12" min="1" placeholder="1" />
								<input type="number" id="anneeA" name="anneeFin" max="2019" min="2018" placeholder="2018" /><br />
								<div style="height: 10px;"></div>
								<button class="btn btn-danger btn-sm" id="submit_date_reservation">
									<i class="fa fa-calendar"> </i>
									<b>Soumettre la date</b>
									<i class="fa fa-chevron-right"> </i>
								</button>


						</div>
					</div>
				</div>

			</div>

      <div class="row">
				<div class="col-xs-12"><br />
					<div class="principalBanner">
						<?php foreach($voitures as $voiture) { ?>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<div class="img-V">
									<img class="img-rounded" src="Contenu/images_voitures/<?php echo($voiture['image']); ?>" width="100%" />
								</div>
								<br />
								<div class="voitureDesc">
									<center><b><?php echo($voiture['marque']." ".$voiture['modele']); ?></b></center>
									Nombre de chaises : <?php echo($voiture['chaises']); ?> chaises<br />
									Source d'énergie : <?php echo($voiture['couleur']); ?>
									<div style="height: 10px;"></div>
									<center>
										<a href="?action=voiture&id=<?php echo($voiture['id']); ?>" class="btn btn-info btn-sm">
											<i class="glyphicon glyphicon-eye-open"> </i>
											<b>Afficher</b>
										</a>
										<a href="mailto:chanaa.projects@gmail.com" class="btn btn-warning btn-sm">
											<i class="fa fa-share"> </i>
											<b>Réserver</b>
										</a>
									</center>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="col-xs-12">


			</div>

		</div>
	</div>
</div>

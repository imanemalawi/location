<div class="wheel-start3">
    <img src="images/bg7.jpg" alt="" class="wheel-img">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 padd-lr0">
                <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                    <h3>Reservation</h3>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Reservation</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /////////////////////////////////// -->
<div class="step-wrap">
    <!-- ////////////////////////////////////////// -->
    <div class="container padd-lr0">
        <div class="row">
            <div class="col-xs-12 padd-lr0">
                <ul class="steps">
                  <li class="title-wrap ">
                      <div class="title">
                          <span>1.</span>Réserver une voiture
                      </div>
                  </li>
                  <li class="title-wrap">
                      <div class="title">
                          <span>2.</span>Choix de Voiture
                      </div>
                  </li>

                  <li class="title-wrap active">
                      <div class="title">
                          <span>3.</span>Informations
                      </div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////// -->
</div>
<!-- ////////////////////////////////////////// -->
<div class="product-wrap">
    <!-- ////////////////////////////////////////// -->
    <div class="container padd-lr0 xs-padd">
        <div class="row">
          <form class="" action="/LocationVoitures/confirmer.php" method="post">
            <div class="col-xs-12 pad-r col-md-6">
                <div class="headlines1">
                    Informations Personnelles
                </div>
                <div class="form-2 marg-lg-b25">
                    <input type="hidden" name="action" value="confirmer_reservation">
                    <input type="text" name="nom" class="f-input" placeholder="Nom *">
                    <input type="text" name="prenom" class="f-input f-right" placeholder="Prenom*">
                    <input type="text" name="tel" class="f-input" placeholder="Tel *">
                    <input type="text" name="email" class="f-input f-right" placeholder="Email *">
                    <input type="hidden" name="ville_debut" value="<?php echo $_GET['ville_depart']; ?>">
                    <input type="hidden" name="ville_fin" value="<?php echo $_GET['ville_fin']; ?>">
                    <input type="hidden" name="date_debut" value="<?php echo $_GET['date_debut']; ?>">
                    <input type="hidden" name="date_fin" value="<?php echo $_GET['date_fin']; ?>">

                </div>

                <div class="headlines1">
                    Ta commande :
                </div>
                <ul class="order clearfix marg-lg-b40 marg-xs-b10">
                    <li class="item clearfix">
                        <div class="title"><?php echo $voiture['marque']; ?> <span>(<?php echo $voiture['price']; ?> x 2 Days)</span></div>
                        <span>$108.00</span>
                    </li>
                    <button type="submit" name="button">Confirmer Votre Commande</button>
                </ul>

            </div>
            <div class="col-xs-12 pad-l col-md-6">
                <div class="r-return-block type-2">
                    <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <h5 class="title">Date et lieu de depart</h5>
                    <div class="date"><?php echo $_GET['date_debut'] ;?></div>
                    <div class="address"><?php echo $_GET['ville_depart'] ; ?></div>
                </div>
                <div class="r-return-block type-2">
                    <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <h5 class="title">Date et lieu de fin</h5>
                    <div class="date"><?php echo $_GET['date_fin']  ;?></div>
                    <div class="address"><?php echo $_GET['ville_fin'] ;?></div>
                </div>
                <div class="r-return-block type-2 style-2">
                    <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <div class="img-wrap">
                        <img src="images/z-img-1.png" alt="img" class="img-responsive">
                    </div>
                </div>
                <div class="r-return-block type-2 style-3">
                    <div class="text-wrap">
                        <div class="t-title"><?php echo $voiture['marque']; ?> <?php echo $voiture['serie']; ?></div>
                        <div class="t-subtitle">Luxury Sports Car</div>
                        <ul class="metadata">
                            <li>2 <?php echo $voiture['chaises']; ?></li>
                            <li><?php echo $voiture['vitesse_max']; ?></li>
                            <li><?php echo $voiture['transmission']; ?></li>
                        </ul>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>
    <!-- ////////////////////////////////////////// -->
</div>

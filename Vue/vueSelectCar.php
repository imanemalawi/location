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
                    <li class="title-wrap active">
                        <div class="title">
                            <span>2.</span>Choix de Voiture
                        </div>
                    </li>

                    <li class="title-wrap ">
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
<div class="prosuct-wrap">
    <!-- ////////////////////////////////////////// -->
    <div class="container marg-lg-b60 marg-xs-b40">
        <div class="row">
            <div class="col-xs-12 col-sm-6 padd-lr0 xs-padd">
                <div class="r-return-block ">
                    <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <h5 class="title">Pick-up</h5>
                    <div class="date"><?php echo $_GET['date_debut'] ;?></div>
                    <div class="address"><?php echo $_GET['ville_depart'] ;?></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 padd-lr0 xs-padd">
                <div class="r-return-block ">
                    <button class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <h5 class="title">Return</h5>
                    <div class="date"><?php echo $_GET['date_fin']; ?></div>
                    <div class="address"><?php echo $_GET['ville_fin'] ;?></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////// -->

    <?php foreach($voitures as $voiture):  ?>
    <div class="container padd-lr0 xs-padd">
        <div class="product-list clearfix">
            <div class="row">

                <div class="col-xs-12 padd-lr0 xs-padd">
                  <form class="" action="/LocationVoitures" method="get">


                    <div class="product-table">
                        <div class="img-wrap product-cell">
                            <img src="assets/images/<?php echo $voiture['id'] ?>.png" alt="img" class="img-responsive">
                        </div>
                        <div class="text-wrap product-cell">
                            <div class="title"><?php echo $voiture['marque'] ;?></div>
                            <div class="subtitle"><?php echo $voiture['serie'] ;?></div>
                        </div>
                        <div class="price-wrap product-cell">
                            <span>$<?php echo $voiture['price'] ;?></span><sup>00</sup>/Day
                        </div>
                        <div class="btn-wrap product-cell">
                          <input type="hidden" name="ville_depart" value="<?php echo $_GET['ville_depart'] ;  ?>">
                          <input type="hidden" name="ville_fin" value="<?php echo $_GET['ville_fin'] ;  ?>">
                          <input type="hidden" name="date_debut" value="<?php echo $_GET['date_debut'] ;  ?>">
                          <input type="hidden" name="date_fin" value="<?php echo $_GET['date_fin'] ;  ?>">
                          <input type="hidden" name="age" value="<?php echo $_GET['age'] ;  ?>">
                          <input type="hidden" name="action" value="reservation_infos">
                            <button name="voiture_id" value="<?php echo $voiture['id'] ;?>" type="submit" class="">Select</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
  <?php endforeach ; ?>


</div>

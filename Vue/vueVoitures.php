<div class="wheel-start3">
    <img src="images/bg7.jpg" alt="" class="wheel-img">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 padd-lr0">
                <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                    <h3>Liste des voitures</h3>
                    <ol class="breadcrumb">
                        <li><a href="#">Acceuil</a></li>
                        <li class="active">Liste</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////// -->
<div class="prosuct-wrap">
    <div class="container padd-lr0 xs-padd">
        <div class="row">
            <div class="col-sm-8">
                <header class="wheel-header marg-lg-t25 marg-lg-b65">
                    <h3>Chercher Votre Voiture</span></h3>
                </header>
            </div>

        </div>
        
    </div>
    <div class="container padd-lr0 xs-padd">
        <div class="product-list product-list2 wheel-bgt clearfix">
            <div class="row">
              <?php foreach($voitures as $voiture): ?>
                <div class="col-xs-12">
                    <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                        <div class="product-table2">
                            <div class="img-wrap img-wrap2 product-cell">
                                <img src="assets/images/<?php echo $voiture['id']; ;?>.png" alt="img" class="img-responsive">
                            </div>
                        </div>
                        <div class="product-table3  ">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title"><?php echo $voiture['marque']; ?></div>
                                <div class="price-wrap product-cell">
                                    <span>$<?php echo $voiture['prix']; ?></span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <img src="images/<?php echo $voiture['id']; ;?>.png" alt="img" class="img-responsive">
                            </div>
                            <div class="text-wrap  text-wrap3 product-cell">
                                <ul class="metadata metadata2">
                                    <li><?php echo $voiture['chaises'] ; ?> Chaises</li>
                                    <li><?php echo $voiture['vitesse_max'] ; ?> Vitesse maximale</li>
                                    <li><?php echo $voiture['transmission'] ;?> Transmission</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach; ?>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 padd-lr0 text-center">
                <div class="wheel-page-pagination marg-lg-t60 marg-lg-b25  ">
                    <a class="prev page-numbers fa fa-arrow-left" href="#"></a>
                    <a class="page-numbers" href="#">1</a>
                </div>
            </div>
        </div>
    </div>
</div>

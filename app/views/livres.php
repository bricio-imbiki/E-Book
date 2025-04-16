<?php require 'template/template.php'; ?>

<?php $lesLivres = (new table())->getAll("livre"); ?>
<?php bHeader(); ?>
    <div style="background-image:url(&quot;<?php echo path('img/livres-bg.jpg') ?>&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
            <div class="d-flex align-items-center order-12" style="height:200px;">
                <div class="container">
                    <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">Listes de nos livres</h1>
                    <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">Nous vous satisfaisons de nos services</h3>
                </div>
            </div>
        </div>
    </div>

        <div class="row product-list m-5">
            <?php while ($res = $lesLivres->fetch()) {?>
            <div class="col-sm-6 col-md-3 product-item">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12 product-image w-100">
                            <img  src="<?php echo path('../assets/img/livres/' . $res["src"] . '.jpg') ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="myH2">
                                <a href="" class="text-truncated"><?php echo $res['titre'] ?></a>
                            </h2>
                        </div>
                        <div class="col-12">
                            <a class="small-text" href="#"><?php echo $res['auteur'] ?></a>
                        </div>
                    </div>
                    <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">00 views</a></div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description"><?php echo $res['description'] ?></p>
                            <div class="row">
                                <div class="col-6"><a href="livre.php?id=<?php echo $res['id'] ?>" class="btn btn-light" type="button"><i class="fa fa-eye">&nbsp;</i>Voir details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
<?php bFooter(); ?>
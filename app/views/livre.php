<?php require 'template/template.php'; ?>
<?php
    $idCourant = 1;
    if (isset($_GET['id'])) {
        $idCourant = $_GET['id'];
    }

    $element        = (new Table())->getAll('livre', 'id = "' . $idCourant . '"');
    $commentElement = (new Table())->getAll('commentaire', 'id_livre = "' . $idCourant . '"');

    while ($res = $element->fetch()) {
    ?>
<?php bHeader(); ?>
<div style="background-image:url(&quot;<?php echo path('../assets/img/livres/' . $res['src'] . '.jpg') ?>&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;'); height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(0,60,100,0.7);">
        <div class="d-flex align-items-center order-12" style="height:200px;">
            <div class="container">
                <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;"><?php echo $res['titre'] ?></h1>
                <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;"><?php echo $res['auteur'] ?></h3>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5" id="description"><dl class="row">
    <dt class="col-sm-3">Titre du livre</dt>
    <dd class="col-sm-9"><?php echo $res['titre'] ?></dd>
    <dt class="col-sm-3">Auteur</dt>
    <dd class="col-sm-9">
    <p><?php echo $res['auteur'] ?></p>
    </dd>
    <dt class="col-sm-3">Date d'ajout</dt>
    <dd class="col-sm-9"><?php echo $res['dateAjout'] ?></dd>
    <dt class="col-sm-3 text-truncate">Descripiton</dt>
    <dd class="col-sm-9"><?php echo $res['description'] ?></dd>
    <dt class="col-sm-3">Information supplémentaires</dt>
    <dd class="col-sm-9">
    <dl class="row">
        <dt class="col-sm-4"><a href="<?php echo path('pdf/' . $res["src"] . '.pdf') ?>" class="btn btn-success" download>Télécharger le documents</a></dt>
    </dl>
    </dd>
</dl></div>
<div class="container" id="comment">
    <div class="card m-18 ml-auto mr-auto">
        <div class="card-header">
            <h3>Les avis et commetaires</h3>
            <?php if (isset($_GET['comment'])) {?><p class="alert-success font-weight-bold p-3">Nouveau Commentaire ajouter avec succès</p><?php }?>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <?php while ($res = $commentElement->fetch()) {?>
                <li class="list-group-item" style="margin-bottom:6px;">
                    <div class="media">
                        <div></div>
                        <div class="media-body">
                            <div class="media" style="overflow:visible;">
                                <div><img class="mr-3" style="width: 25px; height:25px;" src="<?php echo path('../assets/img/user-photo4.jpg') ?>"></div>
                                <div class="media-body" style="overflow:visible;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><a href="#"><?php echo $res['pseudo'] ?>: </a><?php echo $res['message'] ?><br>
                                        <small class="text-muted"><?php echo $res['dateAjout'] ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php }?>
        </ul>
        <?php }?>
        <div class="pull-right d-block"><button class="btn btn-primary" type="button" onclick="toogleForm()">Ajouter un commentaire</button></div>

        <form method="POST" action="comment.php" id="form">
        <div style="clear: both;">
            <div class="card text-white" style="background: rgba(0,50,100,.5);">
                <div class="card-header">
                    <input type="text" class="form-control sr-only input-lg" name="id" value="<?php echo $idCourant ?>">
                    <input type="text" name="pseudo" class="form-control" placeholder="username">
                </div>
                <div class="card-body">
                    <div class=" card-text form-group">
                        <textarea placeholder="Message" rows="4"
                        class="form-control form-control-lg" name="message">
                        </textarea>
                    </div>
                    <button class="float-right btn btn-dark" type="submit" role="button"> <i class="fa fa-comment"></i> Comment</button>
                </div>
            </div>
        </div>
        </form>
</div>
</div>
</div>

<script type="text/javascript">

    var form = document.getElementById("form");
    var txtArea = document.getElementsByTagName("textarea");

    txtArea[0].value = "";

    form.style.display = "none";

    function toogleForm() {
        $('#form').fadeToggle();
    }

</script>

<?php bFooter(); ?>
<?php require 'template/template.php'; ?>

<?php bHeader(); ?>

    <div style="background-image:url(&quot;<?php echo path('../assets/img/contact-bg.jpg') ?>&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
            <div class="d-flex align-items-center order-12" style="height:200px;">
                <div class="container">
                    <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">Contactez-nous</h1>
                    <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">Veuillez nous contactez</h3>
                </div>
            </div>
        </div>
    </div>
    <section class="getintouch">
        <form method="POST" action="message.php">
        <div class="container modern-form">
            <div class="text-center">
                <h4 style="color: #212529;font-size: 45px;">Remplir le formulaire</h4>
            </div>
            <hr class="modern-form__hr">
            <?php if (isset($_GET['msg'])) {?>
                <p class="alert-success p-3">Message envoyé avec succès!</p>
            <?php }?>
            <div class="modern-form__form-container">
                <form>
                    <div class="form-row">
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-r"><input class="form-control input input-tr" type="text" name="pseudo" placeholder="Votre pseudo">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-l"><input class="form-control input input-tr" type="email" name="email" placeholder="Votre email">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group modern-form__form-group--padding-t"><textarea class="form-control input modern-form__form-control--textarea" name="message" placeholder="Ecrit ici votre message ..."></textarea>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col text-center"><button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-send"></i>&nbsp;Envoyer</button></div>
                    </div>
                </form>
            </div>
        </div>
        </form>
    </section>

<?php bFooter(); ?>
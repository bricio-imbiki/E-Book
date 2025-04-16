<?php require '../controller/controller.php'; ?>

<!-- Entête du page -->
<?php function bHeader()
{?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-book</title>
    <link rel="stylesheet" href="<?php echo path('../assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo path('../assets/css/Community-ChatComments.css') ?>">
    <link rel="stylesheet" href="<?php echo path('../assets/css/Customizable-Background--Overlay.css') ?>">
    <link rel="stylesheet" href="<?php echo path('../assets/css/Modern-Contact-Form.css') ?>">
    <link rel="stylesheet" href="<?php echo path('../assets/css/Pretty-Footer.css') ?>">
    <link rel="stylesheet" href="<?php echo path('../assets/css/Pretty-Product-List.css') ?>">
    <link rel="stylesheet" href="<?php echo path('../assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo path('../assets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo path('../assets/fonts/font-awesome.min.css') ?>">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light">
        <div class="container-fluid"><a class="navbar-brand text-primary font-weight-bold" href="<?php echo go('livres.php') ?>"><i class="fa fa-book">&nbsp;</i>PDF DOC</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav animate slideInLeft">
                    <li class="nav-item"><a class="nav-link" href="<?php echo go('livres.php') ?>">Mes&nbsp; livres</a></li>
                    <li class="nav-item sr-only"><a class="nav-link" href="<?php echo go('livre.php') ?>">Un livre</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo go('contact.php') ?>">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo go('about.php') ?>">A propos</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<?php }?>


	<!-- Pied du page -->


	<?php function bFooter()
    {?>

	<footer>
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">PDF<span>DOC</span></a></h3>
                <p class="links"><a href="<?php echo go('livres.php') ?>">Accueil</a><strong> · </strong><a href="#">Mes livres</a><strong> · </strong><a href="<?php echo go('contact.php') ?>">Contact</a><strong> · </strong><a href="<?php echo go('about.php') ?>">A propos</a><strong> · </strong><a href="#" class="sr-only">Contact</a></p>
                <p class="company-name">Copyright © 2021 | Tous droits réservés</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p> Toamasina, Madagascar</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +261 00 00 000 00</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">ebookadmin@gmail.com</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h4>A propos du site</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="<?php echo path('../assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo path('../assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>
	<?php }?>
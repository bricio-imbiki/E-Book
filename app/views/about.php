<?php require 'template/template.php'; ?>

<?php bHeader(); ?>

    <div style="background-image:url(&quot;<?php echo path('../assets/img/about-bg.jpg') ?>&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
            <div class="d-flex align-items-center order-12" style="height:200px;">
                <div class="container">
                    <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">A propos du site</h1>
                    <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">Regarder les informations du site</h3>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid mt-5">
        <div class="jumbotron text-center">
  <h1 class="display-4">A propos de nous</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
   </p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus</a>
  </p>
  </hr>
</div>
    </div>

<?php bFooter(); ?>
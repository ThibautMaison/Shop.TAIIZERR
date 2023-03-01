<?php
ob_start();
?>
<section class="pt-7">
    <div class="container mt-5">
        <div class="row align-items-center mt-5">
            <div class="col-md-6 text-md-start text-center py-6 ">
                <h1 class="mb-4 fw-bold text-white text-uppercase text-center" style="font-size: 75px;">Tapis de souris</h1>
                <p class="mb-6 lead fs-4 text-white text-center">Trouvez tous mes conseils pour vous équiper le mieux possible.
                    Je ne propose que des produits de très grande qualité et prévus pour durer dans le temps.
                    Je précise que je suis totalement transparent dans le choix des marques.
                    Vous pouvez faire vos choix en toute confiance !</p>

            </div>
            <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="/public/Accueil/backTEST.png" alt="" style="width: 600px;" /></div>
        </div>
    </div>
</section>
<div id="target" class="container-fluid pt-5 px-5">
    <div class="row px-xl-3">
        <div class="col-lg-3 col-md-4">
        <?php require "AllCategorie.view.php"; ?>
        </div>
        <?php require "AllComposant.view.php";?>
    </div>
</div>
<?php
$content = ob_get_clean();
require "template.php";
?>
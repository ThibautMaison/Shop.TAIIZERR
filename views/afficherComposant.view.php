<?php 
ob_start()?>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0 rounded-circle" src="<?=URL ?>public/images/<?= $Composant->getImage() ?>" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder text-white"><?= $Composant->getName() ?></h1>
                        <div class="fs-5 mb-4">
                            <span class="text-decoration-line-through text-white">$45.00</span>
                            <span class="text-white">$40.00</span>
                        </div>
                        <p class="lead text-white mb-5"><?= $Composant->getDescription() ?></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <a href="<?= $Composant->getLien() ?>"><button class="btn btn-outline-light flex-shrink-0" type="button">
                                ACHETER
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>

<?php
    $Name=$Composant->getName();
    $content=ob_get_clean();
    require "template.php";
?>
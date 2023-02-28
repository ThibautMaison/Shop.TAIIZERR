<div class="col py-3 container">
            <div class="d-flex flex-wrap w-100 mx-3">
                <?php
                for ($i = 0; $i < count($Boutique); $i++) : ?>
                    <a href="<?= URL ?>Boutique/l/<?= $Boutique[$i]->getId() ?>" class="link-dark text-decoration-none">
                        <div class="d-grid ms-4 mb-4">
                            <div class="card mx-auto bg-white zoom"  style="transition: transform 0.5s ease;" >
                                <div style="background-color: #c7c7c7;">
                                    <img src="/public/images/<?= $Boutique[$i]->getImage() ?>" class=" d-grid gap-2 d-flex justify-content-center services-list my-3 mx-3" style="height: 225px;width: 250px;">
                                </div>
                                <h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center my-3 "><?= $Boutique[$i]->getName() ?></h5>
                                <h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center mb-3"><?= $Boutique[$i]->getPrix() ?>€</h5>
                            </div>
                        </div>
                    </a>
                <?php endfor ?>
            </div>
        </div>
<?php
$categories = $this->ComposantManager->SelectAllCategories();
?>

<div class="product-list p-4 mb-30 mx-auto rounded" style="background-color: #c7c7c7;">
    <h3 class="product-list-title mb-4 text-uppercase text-center text-dark fs-2 fw-bold">Produits</h3>
    <a class="btn btn-product-list rounded text-dark d-block my-2 fw-semibold fst-italic" href="<?= URL ?>Boutique#target">Tous les produits</a>
    <?php foreach ($categories as $categorie) : ?>
        <a class="btn btn-product-list rounded text-dark d-block my-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/<?= strtolower($categorie['libelle']) ?>#target"
        <?php if(isset($_GET['url']) && strtolower($categorie['libelle']) == strtolower($_GET['url'])) : ?>
            style="background-color: #000; color: #fff;"
        <?php else : ?>
            onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff'"
            onmouseout="this.style.backgroundColor='#c7c7c7'; this.style.color='#000'"
        <?php endif; ?>><?= $categorie['libelle'] ?></a>
    <?php endforeach; ?>
</div>
<div class="my-gear p-4 mb-30 mx-auto mt-4 rounded" style="background-color: #c7c7c7;">
    <p class="my-gear-title mb-4 text-center text-dark fw-semibold fst-italic">Découvrez ce que j'utilise comme matériel au quotidien</p>
    <a class="btn btn-primary my-gear-btn rounded-pill text-white border-primary mt-3 d-block text-uppercase fs-5 fw-bold mx-auto" href="<?= URL ?>Boutique/stuffperso#target">mon stuff</a>
</div>
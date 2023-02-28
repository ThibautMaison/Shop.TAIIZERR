<?php

function selectALL()
{
    $req = "SELECT libelle FROM categorie";
    $pdo = new PDO("mysql:host=localhost;dbname=shoptaiizerr;charset=utf8", "root", "");
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $pdo = null;
    return $resultat;
}

$categories = selectALL(); ?>
<div class="p-4 mb-30 rounded mx-5 " style="background-color: #c7c7c7;">
    <h3 class="mb-4 gap-2 d-flex justify-content-center text-uppercase fs-2 fw-bold">Produits</h3>
    <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique#target">Tous les produits</a>
    <?php
    foreach ($categories as $categorie) {
    ?>
        <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/<?= strtolower($categorie['libelle']) ?>#target"><?= $categorie['libelle'] ?></a>

    <?php
    }
    ?>
</div>
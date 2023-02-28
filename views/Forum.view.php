<?php
ob_start();
?>
<div class="d-grid gap-2 col-6 mx-auto mt-5">
    <table class="table text-center">
        <tr class="table-dark">
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <!-- Permet d'avoir 2 colonnes en une -->
            <th colspan="2">Actions</th>
        </tr>
        <!-- Va chercher dans la classe COmposant, l'attribut Boutique (tableau des Boutique)  en faisant Livre::Boutique-->
        <?php
        for ($i = 0; $i < count($Boutique); $i++) : ?>
            <tr>
                <td class="align-middle text-white"><img src="public/images/<?= $Boutique[$i]->getImage() ?>" class="w-25 d-grid gap-2 mx-auto d-flex justify-content-center mt-4 hover-shadow "></td>
                <td class="align-middle"><a class="mt-4 d-grid gap-2 mx-auto d-flex justify-content-center" href="<?= URL ?>TestCRUD/l/<?= $Boutique[$i]->getId() ?>"><?= $Boutique[$i]->getName() ?></td>
                <td class="align-middle text-white"><?= $Boutique[$i]->getDescription() ?></td>
                <td class="align-middle text-white"><a href="<?= URL ?>TestCRUD/m/<?= $Boutique[$i]->getId() ?>" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle text-white">
                    <!-- onSubmit pour confirmer la suprresion -->
                    <form action="<?= URL ?>TestCRUD/s/<?= $Boutique[$i]->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le livre ?')" method="POST">
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endfor ?>
    </table>
</div>
<?php
$content=ob_get_clean();
require "template.php";
?>
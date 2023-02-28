<?php
ob_start();
?>
<?php
if (isset($_SESSION['Pseudo'])) {
    if (($_SESSION['Role']) == 1) { ?>
        <div class="container">
        <div class="text-center mb-5">
                <div class=" my-4 fw-bold text-uppercase">
                    <h2 class="text-white">Manage Boutique</h2>
                </div>
            </div>
            <table class="table table-striped table-hover text-white text-center mb-0">
                <thead>
                    <tr>
                        <th>
                        </th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Lien</th>
                        <th>idCategorie</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="<?= URL ?>Admin/ajoutcomposant" class="btn btn-success">Ajouter composant</a>
                </div>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($Boutique); $i++) : ?>
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td class="text-white"><?= $Boutique[$i]->getName() ?></td>
                            <td class="text-white"><?= $Boutique[$i]->getDescription() ?></td>
                            <td class="text-white"><?= $Boutique[$i]->getPrix() ?></td>
                            <td class="text-white"><?= $Boutique[$i]->getLien() ?></td>
                            <td class="text-white"><?= $Boutique[$i]->getidCategorie() ?></td>
                            <td>
                                <div class="d-flex justify-content-center mb-2">
                                    <form action="<?= URL ?>Admin/modificationcomposant/<?= $Boutique[$i]->getId() ?>" method="POST">
                                        <button class="btn btn-warning mx-auto d-flex justify-content-center me-3" type="submit">Modifier</button>
                                    </form>
                                    <form action="<?= URL ?>Admin/supprimercomposant/<?= $Boutique[$i]->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le produit ?')" method="POST">
                                        <button class="btn btn-danger mx-auto d-flex justify-content-center" type="submit">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table> 
        </div>
   
<?php }
} else {
    header("Location: " . URL . "connexion");
} ?>
<?php
$content = ob_get_clean();
require "template.php";
?>
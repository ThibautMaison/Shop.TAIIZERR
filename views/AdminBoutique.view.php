<?php
ob_start();
?>
<?php
if (isset($_SESSION['Pseudo'])) {
    if (($_SESSION['Role']) == 1) {
        $query = '';
        if (isset($_POST['search'])) {
            $query = $_POST['search'];
        }
?>
        <div class="container">
            <div class="text-center mb-5">
                <div class=" my-4 fw-bold text-uppercase">
                    <h2 class="text-white">Manage Boutique</h2>
                </div>
            </div>
            <form method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by name" name="search" value="<?php echo $query; ?>">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
            <table class="table table-striped table-hover text-white text-center mb-0">
                <thead>
                    <tr>
                        <th></th>
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
                    $filteredBoutique = array_filter($Boutique, function ($item) use ($query) {
                        return strpos(strtolower($item->getName()), strtolower($query)) !== false;
                    });

                    foreach ($filteredBoutique as $item) : ?>
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td class="text-white"><?= $item->getName() ?></td>
                            <td class="text-white"><?= $item->getDescription() ?></td>
                            <td class="text-white"><?= $item->getPrix() ?></td>
                            <td class="text-white"><?= $item->getLien() ?></td>
                            <td class="text-white"><?= $item->getidCategorie() ?></td>
                            <td>
                                <div class="d-flex justify-content-center mb-2">
                                    <form action="<?= URL ?>Admin/modificationcomposant/<?= $item->getId() ?>" method="POST">
                                        <button class="btn btn-warning mx-auto d-flex justify-content-center me-3" type="submit">Modifier</button>
                                    </form>
                                    <form action="<?= URL ?>Admin/supprimercomposant/<?= $item->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le produit ?')" method="POST">
                                        <button class="btn btn-danger mx-auto d-flex justify-content-center" type="submit">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    <?php
    }
} else {
    header("Location: " . URL . "connexion");
}
?>
<?php
$content = ob_get_clean();
require "template.php";
?>
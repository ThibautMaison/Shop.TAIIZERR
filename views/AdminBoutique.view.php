<?php
ob_start();
?>
<div class="container">
  <h2 class="text-center my-4 fw-bold text-uppercase text-white">Manage Boutique</h2>

  <div class="d-flex justify-content-between align-items-center">
<form method="post" action="" class="d-flex justify-content-end mb-3">
    <div class="input-group">
        <input type="text" class="form-control rounded-start rounded-end" placeholder="Search by name" id="search-input" >
    </div>
</form>
    <a href="<?= URL ?>Admin/ajoutcomposant" class="btn btn-success">Ajouter composant</a>
  </div>

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
    <tbody id="table-body">
      <?php
      foreach ($Boutique as $item) : ?>
        <tr>
          <td>
            <span class="custom-checkbox">
              <input type="checkbox" id="checkbox1" name="options[]" value="1">
              <label for="checkbox1"></label>
            </span>
          </td>
          <td><?= $item->getName() ?></td>
          <td><?= $item->getDescription() ?></td>
          <td><?= $item->getPrix() ?></td>
          <td><?= $item->getLien() ?></td>
          <td><?= $item->getidCategorie() ?></td>
          <td>
            <div class="d-flex justify-content-center mb-2">
              <form action="<?= URL ?>Admin/modificationcomposant/<?= $item->getId() ?>" method="POST">
                <button class="btn btn-warning mx-auto me-3" type="submit">Modifier</button>
              </form>
              <form action="<?= URL ?>Admin/supprimercomposant/<?= $item->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le produit ?')" method="POST">
                <button class="btn btn-danger mx-auto" type="submit">Supprimer</button>
              </form>
            </div>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<script>
  const searchInput = document.querySelector('#search-input');
  searchInput.addEventListener('keyup', (event) => {
    const query = event.target.value.toLowerCase();
    const tableBody = document.getElementById('table-body');
    const rows = tableBody.getElementsByTagName('tr');
    for (let i = 0; i < rows.length; i++) {
      const name = rows[i].getElementsByTagName('td')[1].textContent.toLowerCase();
      if (name.includes(query)) {
        rows[i].style.display = '';
      } else {
        rows[i].style.display = 'none';
      }
    }
  });
</script>
<?php
$content = ob_get_clean();
require "template.php";
?>
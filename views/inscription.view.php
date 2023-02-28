<?php
ob_start();
?>


<!-- Affichage du formulaire -->
<form method="POST" action="<?= URL ?>inscription/9" class="d-grid gap-2 col-6 mx-auto mt-5">
    <div class="form-group mb-2" style="margin-top: 50px;">
        <label class="text-white" for="Pseudo">Pseudo :</label>
        <input type="text" class="form-control" id="pseudo" name="Pseudo" placeholder="Entrez votre pseudo">
        <div id="confirmepseudo"></div>
    </div>
    <div class="form-group mb-2">
        <label class="text-white" for="Email">Email :</label>
        <input type="text" class="form-control" id="email" name="Email" placeholder="Entrez votre email">
        <div id="confirmeemail"></div>
    </div>
    <div class="form-group mb-4">
        <label class="text-white" for="Password">Mot de passe :</label>
        <input type="password" class="form-control" id="password" name="Password" placeholder="Entrez votre mot de passe">
        <div id="confirmepassword"></div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" name="Sinscrire" class="btn btn-outline-light rounded-pill mb-5 d-grid gap-2 col-6 mx-auto">S'inscrire</button>
    </div>
</form>

<?php
$content = ob_get_clean();
require "template.php";
?>
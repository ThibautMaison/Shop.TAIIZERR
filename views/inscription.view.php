<?php
ob_start();
$erreur = "";
?>


<!-- Affichage du formulaire -->
<form method="POST" action="" class="d-grid gap-2 col-6 mx-auto mt-5">
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
    <?php
if (isset($_POST['Sinscrire'])) {
    $pseudo = $_POST['Pseudo'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $erreur = '';

    if (empty($pseudo)) {
        $erreur .= "Le champ Pseudo est requis.<br>";
    } elseif (preg_match('/\s/', $pseudo)) {
        $erreur .= "Le pseudo ne doit pas contenir d'espaces.<br>";
    } elseif (ctype_digit($pseudo)) {
        $erreur .= "Le pseudo ne doit pas contenir que des chiffres.<br>";
    } elseif (!preg_match('/^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$/', $pseudo)) {
        $erreur .= "Le pseudo doit commencer par une lettre et ne doit contenir que des lettres, des chiffres et des underscores.<br>";
    }

    if (empty($email)) {
        $erreur .= "Le champ Email est requis.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur .= "L'email saisi n'est pas valide.<br>";
    }

    if (empty($password)) {
        $erreur .= "Le champ Mot de passe est requis.<br>";
    } elseif (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', $password)) {
        $erreur .= "Le mot de passe doit contenir au moins 8 caractères avec au moins une majuscule, une minuscule, un chiffre et un caractère spécial.<br>";
    }

    if (empty($erreur)) {
        $_SESSION['Pseudo'] = $pseudo;
        $_SESSION['Email'] = $email;
        $_SESSION['Password'] = $password;
        header("Location: " . URL . "inscription/9");
    }
}
?>

<?php if (!empty($erreur)): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php endif; ?>
</form>

<?php
$content = ob_get_clean();
require "template.php";
?>
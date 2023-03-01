<?php
ob_start();
$erreur = "";
?>


<form method="POST" action="" class="d-grid gap-2 col-12 col-md-8 mx-auto mt-5 rounded shadow p-5">
    <div class="form-group mb-3">
        <label for="pseudo" class="form-label text-muted fs-5 mb-2">Pseudo :</label>
        <input type="text" class="form-control rounded-pill py-3 px-4 border-0 shadow-sm" id="pseudo" name="Pseudo" placeholder="Entrez votre pseudo">
        <div id="confirmepseudo"></div>
    </div>
    <div class="form-group mb-3">
        <label for="email" class="form-label text-muted fs-5 mb-2">Email :</label>
        <input type="text" class="form-control rounded-pill py-3 px-4 border-0 shadow-sm" id="email" name="Email" placeholder="Entrez votre email">
        <div id="confirmeemail"></div>
    </div>
    <div class="form-group mb-4">
        <label for="password" class="form-label text-muted fs-5 mb-2">Mot de passe :</label>
        <input type="password" class="form-control rounded-pill py-3 px-4 border-0 shadow-sm" id="password" name="Password" placeholder="Entrez votre mot de passe">
        <div id="confirmepassword"></div>
    </div>

    <div class="d-grid gap-2 mt-3">
        <button type="submit" name="Sinscrire" class="btn btn-primary rounded-pill py-3 fs-5 fw-bold">S'inscrire</button>
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
    <div class="alert alert-danger mt-4">
        <?= $erreur ?>
    </div>
<?php endif; ?>
</form>

<?php
$content = ob_get_clean();
require "template.php";
?>
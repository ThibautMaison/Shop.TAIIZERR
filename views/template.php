<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch/dist/lux/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <link rel="stylesheet" href="/style.css">
</head>

<body style="background: linear-gradient(to bottom left,#0C0C0C, #161616)">
<nav class="navbar navbar-expand-lg navbar-dark navbar-animate">
    <div class="container my-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active text-white" href="<?= URL ?>accueil">Accueil</a></li>
                <li class="nav-item"><a class="nav-link active text-white" href="<?= URL ?>Boutique">Boutique</a></li>
                <li class="nav-item"><a class="nav-link active text-white" href="<?= URL ?>Forum">Forum</a></li>
                <li class="nav-item"><a class="nav-link active text-white" href="<?= URL ?>Contact">Contact</a></li>
            </ul>
            <?php if (isset($_SESSION['Pseudo'])): ?>
                <?php if ($_SESSION['Role'] == 1): ?>
                    <a class="text-white text-decoration-none me-3" href="<?= URL ?>Admin">Admin</a>
                <?php endif; ?>
                <div class="btn-group dropdown-end me-5">
                    <a type="button" class="btn btn-outline-dark text-white rounded" data-bs-toggle="dropdown" aria-expanded="false">
                        COMPTE
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle ms-2" height="22" alt="" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start bg-dark">
                        <li><a class="btn btn-dark text-white rounded d-flex justify-content-center" href="">Parametre</a></li>
                        <li><a class="btn btn-dark text-white rounded d-flex justify-content-center" href="<?= URL ?>logout">Deconnexion</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <a class="btn btn-outline-dark text-white me-2" href="<?= URL ?>connexion">CONNEXION</a>
                <a class="btn btn-outline-dark text-white" href="<?= URL ?>inscription">INSCRIPTION</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

  <div class="container-fluide">
    <?= $content ?>
  </div>




  <footer class="text-center text-lg-start text-white" style="bottom: 0;">
    <div class="container p-4 pb-0 ">
    <section class="mb-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
          <img class="mb-3" style="width: 100px;height: 60px;" src="/public/Accueil/transparent-screen-icon-ventures-icon-pc-tower-and-monitor-ico-609030c4286439.4452916816200624041655.png" alt="logo">
          <p>Bienvenue sur Shop.TAIIZERR.fr ! Retrouvez mes conseils pour le meilleur matériel et le forum pour vous aider et échanger librement.</p>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
          <h6 class="text-uppercase mb-4 font-weight-bold">MENU</h6>
          <ul class="list-unstyled mb-0">
            <li><a href="<?= URL ?>accueil" class="text-white">Accueil</a></li>
            <li><a href="<?= URL ?>Forum" class="text-white">Forum</a></li>
            <li><a href="<?= URL ?>Boutique" class="text-white">Boutique</a></li>
            <li><a href="<?= URL ?>Admin" class="text-white">Admin</a></li>
            <li><a href="<?= URL ?>Contact" class="text-white">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Dunkerque, France</p>
          <p><i class="fas fa-envelope me-3"></i> thibautmaison59@gmail.com</p>
          <p><i class="fas fa-phone me-3"></i> +06 06 06 06 06</p>
          <p><i class="fas fa-print me-3"></i> +06 06 06 06 06</p>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
          <h6 class="text-uppercase mb-4 font-weight-bold">Suivez-nous</h6>
          <ul class="list-unstyled mb-0">
            <li><a href="#" class="text-white"><i class="fab fa-facebook-f me-2"></i>Facebook</a></li>
            <li><a href="#" class="text-white"><i class="fab fa-twitter me-2"></i>Twitter</a></li>
            <li><a href="#" class="text-white"><i class="fab fa-google me-2"></i>Google</a></li>
            <li><a href="#" class="text-white"><i class="fab fa-instagram me-2"></i>Instagram</a></li>
          </ul>
        </div>
      </div>
    </section>

      <hr class="my-3">

      <section class="p-3 pt-0">
        <div class="p-3 text-center">
          © 2022 THIBAUT MAISON
        </div>
      </section>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
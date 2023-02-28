<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch/dist/lux/bootstrap.min.css">
  <link rel="stylesheet" href="/style.css">
</head>

<body style="background-color: #0C0C0C;">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container my-5">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="<?= URL ?>accueil">Accueil</a></li>
          <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="<?= URL ?>Boutique">Boutique</a></li>
          <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="<?= URL ?>Forum">Forum</a></li>
          <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="<?= URL ?>Contact">Contact</a></li>
        </ul>
        <form class="">
        <?php
          if (isset($_SESSION['Pseudo'])) {
            if (($_SESSION['Role']) == 1) { ?>
              <a class="text-white text-decoration-none me-3" aria-current="page" href="<?= URL ?>Admin">Admin</a>
          <?php }
          } else {
          } ?>
          <?php
          if (isset($_SESSION['Pseudo'])) { ?>
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
          <?php
          } else { ?>
            <a class="btn btn-outline-dark text-white me-2" href="<?= URL ?>connexion">CONNEXION</a>
            <a class="btn btn-outline-dark text-white" href="<?= URL ?>inscription">INSCRIPTION</a>
          <?php }
          ?>

        </form>
      </div>
    </div>
  </nav>

  <div class="container-fluide" style="background: linear-gradient(#0C0C0C, #161616)">
    <?= $content ?>
  </div>




  <footer class="text-center text-lg-start text-white" style="background-color: #161616;bottom: 0;">
    <div class="container p-4 pb-0 ">
      <section class="">
        <div class="row mt-5">
          <div class="col-md-2 mb-4col-lg-2 col-xl-2 mx-auto mt-5 services-list text-center">
            <img class="mb-4" style="width: 100px;height: 60px;" src="/public/Accueil/transparent-screen-icon-ventures-icon-pc-tower-and-monitor-ico-609030c4286439.4452916816200624041655.png" alt="logo">
            <P>Bienvenue sur Shop.TAIIZERR.fr !
              Retrouvez mes conseils pour le meilleur matériel et le forum pour vous aider et échanger librement.</P>
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto services-list mt-5 text-center">
            <h6 class="text-uppercase mb-4 font-weight-bold display-6 text-white">MENU</h6>
            <p>
              <a href="<?= URL ?>accueil" class="text-white">Accueil</a>
            </p>
            <p>
              <a href="<?= URL ?>Forum" class="text-white">Forum</a>
            </p>
            <p>
              <a href="<?= URL ?>Boutique" class="text-white">Boutique</a>
            </p>
            <p>
              <a href="<?= URL ?>Admin" class="text-white">Admin</a>
            </p>
            <p>
              <a href="<?= URL ?>Contact" class="text-white">Contact</a>
            </p>
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-5 text-center">
            <h6 class="text-uppercase mb-4 font-weight-bold display-6 text-white">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Dunkerque, France</p>
            <p><i class="fas fa-envelope mr-3"></i> thibautmaison59@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 06 06 06 06 06</p>
            <p><i class="fas fa-print mr-3"></i> + 06 06 06 06 06</p>
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
  <script src="/scr"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
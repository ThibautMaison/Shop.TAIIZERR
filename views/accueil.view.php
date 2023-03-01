<?php
ob_start();

?>
<!-- Inclure la bibliothèque AOS -->

<!-- Ajouter l'attribut "data-aos" à vos éléments pour leur appliquer un effet -->
<section class="pt-7 fade-in" data-aos="fade-up">
  <div class="container mt-5">
    <div class="row align-items-center mt-5">
      <div class="col-md-6 text-md-start text-center py-6">
        <h1 class="mb-4 fw-bold text-white text-uppercase text-center" style="font-size: 75px;">TAIIZERR</h1>
        <p class="mb-6 lead fs-4 text-white text-center fade-in" data-aos="fade-up" data-aos-delay="500">Bienvenue sur TAIIZERR.fr !
          Retrouvez mes conseils pour le meilleur matériel et le forum pour vous aider et échanger librement.</p>

      </div>
      <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="/public/Accueil/Daco_5738059.png" alt="" style="width: 600px;" data-aos="fade-left" data-aos-delay="1000" /></div>
    </div>
  </div>
</section>
<?php
$content = ob_get_clean();
$Name = "Page Accueil";
require "template.php";
?>
<?php
ob_start();
?>

<form method="POST" class="d-grid gap-2 col-6 mx-auto mt-5 " >
<!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group mb-2" style="margin-top: 50px;" >
        <label class="text-white"></label>
        <input type="text" class="form-control"name="Nom"  placeholder="Pseudo :">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group mb-2" >
        <label class="text-white"></label>
        <input type="text" class="form-control"name="Email"  placeholder="Email :">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group mb-2" >
        <label class="text-white"></label>
        <input type="text" class="form-control"name="Sujet"  placeholder="Sujet :">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-outline mb-2">
    <label class="form-label text-white" for="form4Example3"></label>
    <textarea class="form-control"name="Message" placeholder="Message :" rows="6"></textarea>

  </div>
  <div class="form-check d-flex justify-content-center m-4" >
    <input class="form-check-input me-2 mt-3" type="checkbox" value="" checked />
    <label class="form-check-label text-white mt-3" for="form4Example4">
      Send me a copy of this message
    </label>
  </div>
  
    <button type="submit" name="Envoyer" class="btn btn-outline-light rounded-pill mb-5 d-grid gap-2 col-6 mx-auto">Envoyer</button>
</form>

<?php

if(isset($_POST['Envoyer'])){
    $Message = "Ce message vous a été envoyé via la page conatct du site SHOP.TAIIZERR.fr
    Nom : " . $_POST["Nom"] . "
    Email : " . $_POST["Email"] . "
    Sujet : " . $_POST["Sujet"] . "
    Message : " . $_POST["Message"];

    $retour = mail("thibauttayzer@gmail.com", $_POST["Sujet"] , $Message,
    "From:contact@exemple.fr " . "\r\n" . "Reply-to:" . $_POST["Email"]);
    if($retour){
        echo "Le messagee a bien été envoyé";
    }
}
?>
<?php
$content=ob_get_clean();
require "template.php";
?>
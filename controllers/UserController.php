<?php
session_start();
require_once "models/UsersManager.class.php";

class UserController {
    private $UsersManager;

    public function __construct(){
        $this->UsersManager=new UsersManager;
        $this->UsersManager->chargementUser();
    }

    public function afficherUsersAdmin(){
        $Users=$this->UsersManager->getUser();
        require "views/AdminUsers.view.php";
    }
    
    public function connexion(){
        require "views/connexion.view.php";
    }

    public function inscription(){
        require "views/inscription.view.php";
    }

    public function ajoutUsers(){
        require "views/ajoutUsers.view.php";
    }

    public function ajoutUsersValidation(){
        $this->UsersManager->ajoutUsersBd($_SESSION["Pseudo"],$_SESSION["Email"],$_SESSION["Password"]);
        header("Location: ".URL."accueil"); 
    
        }
        public function ajoutUsersValidationAdmin(){
            $this->UsersManager->ajoutUsersBd($_POST["Pseudo"],$_POST["Email"],$_POST["Password"]);
            header("Location: ".URL."Admin/users"); 
        
            }

    public function UsersValidation(){
        $this->UsersManager->ConnexionUser($_POST["Pseudo"],$_POST["Password"]);
        header("Location: " . URL . "accueil");
    }


    public function suppressionUsers($id){
        $this->UsersManager->suppressionUsersBd($id);
        header("Location: ".URL."Admin/users");
    }

    public function modificationUsers($id){
        $Users = $this->UsersManager->getUsersById($id);
        require "views/modifierUsers.view.php";
    }

    public function modificationUsersValidation(){
        $this->UsersManager->modificationUsersBd((int)$_POST["identifiant"],$_POST["Pseudo"], $_POST["Email"], $_POST["Role"]);
        header("Location: ".URL."Admin/users");
    }
}
?>
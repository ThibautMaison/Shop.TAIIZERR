<?php
class Composant{
    private $id;
    private $Name;
    private $Description;
    private $Prix;
    private $Lien;
    private $image;
    private $idCategorie;

    public function __construct($id,$Name,$Description,$Prix,$Lien,$image,$idCategorie)
    {
        $this->id=$id;
        $this->Name=$Name;
        $this->Description=$Description;
        $this->Prix=$Prix;
        $this->Lien=$Lien;
        $this->image=$image;
        $this->idCategorie=$idCategorie;

    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id=$id;}

    public function getName(){return $this->Name;}
    public function setName($Name){$this->Name=$Name;}

    public function getDescription(){return $this->Description;}
    public function setDescription($Description){$this->Description=$Description;}

    public function getPrix(){return $this->Prix;}
    public function setPrix($Prix){$this->Prix=$Prix;}


    public function getLien(){return $this->Lien;}
    public function setLien($Lien){$this->Lien=$Lien;}

    public function getImage(){return $this->image;}
    public function setImage($image){$this->image=$image;}

    public function getIdCategorie(){return $this->idCategorie;}
    public function setIdCategorie($idCategorie){$this->idCategorie=$idCategorie;}
}

?>
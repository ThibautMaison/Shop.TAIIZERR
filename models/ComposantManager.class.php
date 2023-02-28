<?php
require "Model.class.php";
require_once "Composant.class.php";

class ComposantManager extends Model
{
    private $Boutique;
    private $Users;

    public function ajoutBoutique($Composant)
    {
        $this->Boutique[] = $Composant;
    }

    public function ajoutUsers($User)
    {
        $this->Users[] = $User;
    }

    public function getBoutique()
    {
        return $this->Boutique;
    }

    public function chargementBoutique()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM Boutique");
        $req->execute();
        $mesBoutique = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        foreach ($mesBoutique as $Composant) {
            $l = new Composant($Composant["id"], $Composant["Name"], $Composant["Description"], $Composant["Prix"], $Composant["Lien"], $Composant["image"], $Composant["idCategorie"]);
            $this->ajoutBoutique($l);
        }
    }

    public function chargerBoutiqueParCategorie($idCategorie)
    {
        $requete = "SELECT * FROM Boutique WHERE idCategorie = :idCategorie";
        $req = $this->getBdd()->prepare($requete);
        $req->execute(array(
            'idCategorie' => $idCategorie
        ));
        $mesBoutique = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($mesBoutique as $boutique) {
            $l = new Composant($boutique["id"], $boutique["Name"], $boutique["Description"], $boutique["Prix"], $boutique["Lien"], $boutique["image"], $boutique["idCategorie"]);
            $this->ajoutBoutique($l);
        }
    }

    public function chargementBoutiqueStuffperso()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM Boutique where Name IN ('BENQ XL2566K' , 'GSR-SE RED' , 'HYPERX ALPHA' , 'X2 MINI' , 'ZOWIE CAMADE' , 'PC GAMING')");
        $req->execute();
        $mesBoutique = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();


        foreach ($mesBoutique as $Stuffperso) {
            $l = new Composant($Stuffperso["id"], $Stuffperso["Name"], $Stuffperso["Description"], $Stuffperso["Prix"], $Stuffperso["Lien"], $Stuffperso["image"], $Stuffperso["idCategorie"]);
            $this->ajoutBoutique($l);
        }
    }

    public function getComposantById($id)
    {
        for ($i = 0; $i < count($this->Boutique); $i++) {
            if ($this->Boutique[$i]->getId() === $id) {
                return $this->Boutique[$i];
            }
        }
    }

    public function ajoutComposantBd($Name, $Description, $Prix, $Lien, $image, $idCategorie)
    {
        $req = "
        INSERT INTO Boutique (Name,Description,Prix,Lien,image,idCategorie)
        value (:Name,:Description,:Prix,:Lien,:image,:idCategorie)";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":Name", $Name, PDO::PARAM_STR);
        $stmt->bindValue(":Description", $Description, PDO::PARAM_STR);
        $stmt->bindValue(":Prix", $Prix, PDO::PARAM_STR);
        $stmt->bindValue(":Lien", $Lien, PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":idCategorie", $idCategorie, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $Composant = new Composant($this->getBdd()->lastInsertId(), $Name, $Description, $Prix, $Lien, $image, $idCategorie);
            $this->ajoutBoutique($Composant);
        }
    }

    public function suppressionComposantBd($id)
    {
        $req = "
        DELETE from boutique where id= :idComposant";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idComposant", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $Composant = $this->getComposantById($id);
            unset($Composant);
        }
    }

    public function modificationComposantBd($id, $Name, $Description, $Prix, $Lien, $image, $idCategorie)
    {
        $req = "
        UPDATE boutique
        SET Name= :Name,Description= :Description,Prix= :Prix,Lien= :Lien,image= :image,idCategorie= :idCategorie
        WHERE id= :id";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":Name", $Name, PDO::PARAM_STR);
        $stmt->bindValue(":Description", $Description, PDO::PARAM_STR);
        $stmt->bindValue(":Prix", $Prix, PDO::PARAM_STR);
        $stmt->bindValue(":Lien", $Lien, PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":idCategorie", $idCategorie, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
    }

    public function selectALL()
    {
        $req = "
            select libelle from categorie";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $resultat;
    }
}

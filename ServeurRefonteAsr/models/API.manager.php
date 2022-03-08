<?php
require_once "models/Model.php";

class APIManager extends Model
{
        public function getDBUsers()
        {
                $req = "SELECT * from utilisateurs";
                $stmt = $this->getBdd()->prepare($req);
                $stmt->execute();
                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $stmt->closeCursor();
                return $users;
        }

        public function getDBUser($idUser)
        {
                //propriété bindvalue de pdo pour sécuriser et injection de code
                $req = "SELECT * from utilisateurs where id= :idUser";
                $stmt = $this->getBdd()->prepare($req);
                // on remplace :idUser par $idUser et le deuxieme param permet de préciser le type de données
                $stmt->bindValue(":idUser", $idUser, PDO::PARAM_INT);
                $stmt->execute();
                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $stmt->closeCursor();
                return $users;
        }
}

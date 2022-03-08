<?php
abstract class Model
{
    private static $pdo;

    //Génère la connection a la bdd, instanciation de pdo
    private static function setBdd()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=pibr5462_asrgroupe123;charset=utf8", "root", "");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //Appel la fonction setBdd et récupère la connection
    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }

    //Convertis les informations en format JSON
    public static function sendJSON($info)
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($info);
    }
}

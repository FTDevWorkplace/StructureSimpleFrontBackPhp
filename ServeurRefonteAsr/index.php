<?php

//http://localhost/...
//https://www.h2prog.com/...
//PHP_SELF => page demandée
//Crée le chemin absolu
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
        "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/API.controller.php";

$apiController = new APIController();


try {
        if (empty($_GET['page'])) {
                echo "La page demandée est : page d'accueil";
        } else {
                $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
                //if (empty($url[0])) throw new Exception("La page n'existe pas");
                switch ($url[0]) {
                        case "1":
                                echo "La page demandée est : 1";
                                break;
                        case "2":
                                echo "La page demandée est : 2";
                                break;
                        case "users":
                                $apiController->getUsers();
                                break;
                        case "user":
                                if (empty($url[1])) throw new Exception("L'identifiant de l'utilisateur est manquant");
                                $apiController->getUser($url[1]);
                                break;
                        case "5":
                                echo "La page demandée est : 5";

                                break;
                        default:
                                throw new Exception("La page n'existe pas");
                }
        }
} catch (Exception $e) {
        $msg = $e->getMessage();
        echo $msg;
}

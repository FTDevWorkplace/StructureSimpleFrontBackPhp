<?php
require_once "models/API.manager.php";
require_once "models/Model.php";


class APIController
{
        private $apiManager;

        public function __construct()
        {
                $this->apiManager = new APIManager();
        }

        public function getUsers()
        {
                $users = $this->apiManager->getDBUsers();
                Model::sendJSON($users);
                // echo "<pre>";
                // print_r($users);
                // echo "</pre>";
        }

        public function getUser($idUser)
        {
                $user = $this->apiManager->getDBUser($idUser);
                echo "<pre>";
                print_r($user);
                echo "</pre>";
        }

        public function getContinents()
        {
                echo "données JSON des continents demandées";
        }

        public function getFamilles()
        {
                echo "données JSON des familles demandées";
        }
}

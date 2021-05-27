<?php

    namespace App\Lib;

    class ControllerMain
    {
        public function __construct($dados)
        {
            $this->dados = $dados;
        }

        /*
        *   carrega a view para exibição
        */

        public function loadView($nomeView, $dbDados = [])
        {
            $this->dbDados = $dbDados;

            if (file_exists("app/view/" . $nomeView . ".php")) {
                require_once "app/view/" . $nomeView . ".php";
            } else {
                require_once "app/view/erros.php";
            }
        }
    }
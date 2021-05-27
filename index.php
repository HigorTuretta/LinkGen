<?php

    session_start();

    //

    define("DS"     , DIRECTORY_SEPARATOR);
    define("ROOT"   , __FILE__);

    // Carregar o Autoload

    require_once "system/Autoload.php";

    // instância a classe Autload

    $AutoLoad = new AutoLoad();

    // registrar o autoloader com o spl.

    spl_autoload_register([$AutoLoad, "lib"]);

    //

    require_once "url.php";

    //

    $myController->$metodo();           // chama o método do controller a ser executado
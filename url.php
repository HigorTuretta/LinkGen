<?php

    // Carregar arquivo de configuração

    require_once "app/config/config.php";

    //

    $parametros = (isset($_GET['pag']) ? $_GET['pag'] : 'Home' );
    
    /* 
    * Verifica se o a variável $parametros possui alguma barra "/", 
    * se possuir significa que existem parametros para serem tratados
    */

    if (substr_count($parametros, "/") > 0) {
        $parametros = explode("/", $parametros);
        $controller = ( file_exists("app/controller/".$parametros[0].".php" ) ? $parametros[0] : "Erros" );
        $metodo     = $parametros[ 1 ];
        $model      = $parametros[0];
        $id         = ( isset( $parametros[ 2 ] ) ? $parametros[ 2 ] : 0 );
    } else {
        $controller = ( file_exists("app/controller/" . $parametros . ".php") ? $parametros : "Erros" );
        $metodo     = "index";
        $model      = $controller;
        $id         = 0;
    }

    // Carrega o controller e criar o objeto controller

    if (file_exists(__DIR__ . '/app/controller/' . $controller . ".php")) {
        require_once __DIR__ . '/app/controller/' . $controller . ".php";
    } else {
        echo "Não achei o arquivo " . __DIR__ . '/app/' . $controller . ".php" ; exit;
    }

    // instanciando o controller

    $myController = new $controller([
        "controller"    => $controller,
        "metodo"        => $metodo,
        "id"            => $id,
        "model"         => $model,
        "get"           => $_GET,
        "post"          => $_POST
    ]);    
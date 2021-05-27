<?php

use App\Lib\ControllerMain;

class Home extends ControllerMain
{
    /*
    *   index
    */

    public function index()
    {
        $this->loadView('home');
    }

    /*
    *   Carrega a view Features
    */

    public function pricing()
    {
        $this->loadView('pricing');
    }
    /*
    *   Carrega a view contato
    */

    public function contato()
    {
        $this->loadView('contato');
    }
    /*
    *   Carrega a view about
    */

    public function about()
    {
        $this->loadView('about');
    }
}

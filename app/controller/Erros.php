<?php 

use App\Lib\ControllerMain;

class Erros extends ControllerMain 
{
    /*
    *   Index
    */

    public function index()
    {
        $this->loadView("erros");
    }
}
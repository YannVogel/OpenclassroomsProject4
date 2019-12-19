<?php

namespace Project\Controller;

abstract class Controller
{

    public function __construct()
    {
        include('view/headerView.php');

    }

    public function includeView(string $viewName)
    {


        /*ob_start();
        echo(file_get_contents($path));

        $content = ob_get_clean();

        echo($content);*/
    }
}
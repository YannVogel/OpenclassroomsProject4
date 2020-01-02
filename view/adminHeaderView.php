<?php

include('view/alertsView.php');
include('view/connectionView.php');
include('view/inscriptionView.php');

use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();

if(isset($_SESSION['nickname']) AND isset($_SESSION['password']) AND $myAdmin->isUserAnAdmin($_SESSION['nickname'], $_SESSION['password']))
{
?>
    <header class="container-lg bgColor-headers">
        <div class="row">
            <div class="col text-center">
                <h1 class="h1 color-siteTitle">Billet simple pour l'Alaska</h1>
                <br/>
                <h2 class="navbar-brand text-danger">Page d'administration du site</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
            <div>Vous êtes connecté·e en tant que <strong><?= $_SESSION['nickname'] ?></strong><a href="index.php?logout=1"><span class="fa faButtonRight fa-sign-out-alt text-danger" title="Se déconnecter"></span></a></div>
            <button id="adminPanelQuitButton" class="btn btn-success btn-sm">Page d'accueil<span
                        class="fa faButtonRight fa-home"></span></button>
            </div>
        </div>
    </header>
<?php
}
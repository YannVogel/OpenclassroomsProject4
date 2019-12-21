<?php

include('view/alertsView.php');
include('view/connectionView.php');
include('view/inscriptionView.php');

use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();

if(isset($_SESSION['nickname']) AND isset($_SESSION['password']) AND $myAdmin->isConnectionValid($_SESSION['nickname'], $_SESSION['password']) AND $myAdmin->isUserAnAdmin($_SESSION['nickname']))
{
?>
    <header class="container">
        <div class="col text-center">PAGE D'ADMINISTRATION DU SITE
            <div>Vous êtes connecté·e en tant que <strong><?= $_SESSION['nickname'] ?></strong></div>
            <button id="endConnectionButton" class="btn btn-primary">Se déconnecter<span
                        class="fa faButtonRight fa-toggle-off"></span></button>
            <button id="adminPanelQuitButton" class="btn btn-success">Page d'accueil<span
                        class="fa faButtonRight fa-home"></span></button>
        </div>
    </header>
<?php
}
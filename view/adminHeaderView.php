<?php

include('view/alertsView.php');
include('view/connectionView.php');
include('view/inscriptionView.php');

?>

<header class="container">
    <div class="col text-center">HEADER DU SITE
        <div>Vous êtes connecté·e en tant que <strong><?= $_SESSION['nickname'] ?></strong></div>
        <button id="endConnectionButton" class="btn btn-primary">Se déconnecter<span class="fa faButtonRight fa-toggle-off"></span></button>
        <button id="adminPanelQuitButton" class="btn btn-success">Page d'accueil<span class="fa faButtonRight fa-home"></span></button>
    </div>
</header>
<?php
use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();

?>
<header class="container-lg bgColor-headers">
    <div class="row">
        <div class="col text-center">
            <h1 class="h1 color-siteTitle">Billet simple pour l'Alaska</h1>
            <br/>
            <h2 class="navbar-brand">Le site officiel de Jean Forteroche</h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <ul class="nav flex-row justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><span class="fa faButtonLeft fa-home" style="color:black"></span>Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?postsPage=1"><span class="fa faButtonLeft fa-book" style="color:brown"></span>Tous les chapitres</a>
                </li>
            </ul>
            <?php
            if(!isset($_SESSION['nickname']) OR !isset($_SESSION['password']) OR trim($_SESSION['nickname']) === '' OR trim($_SESSION['password']) === '')
            {
            ?>
            <button data-toggle="modal" data-target="#connectionForm" class="btn btn-primary btn-sm">Connexion<span class="fa faButtonRight fa-toggle-on"></span></button>
            <button data-toggle="modal" data-target="#inscriptionForm" class="btn btn-primary btn-sm">Inscription<span class="fa faButtonRight fa-edit"></span></button>
          <?php
        }elseif(isset($_SESSION['nickname']) AND isset($_SESSION['password']) AND !$myAdmin->isConnectionValid($_SESSION['nickname'], $_SESSION['password']))
          {

                session_destroy();
        }
        ?>

        </div>
    </div>
</header>
<?php
if(isset($_SESSION['nickname']) AND isset($_SESSION['password']) AND $myAdmin->isConnectionValid($_SESSION['nickname'], $_SESSION['password'])) {
    ?>
    <div class="container-lg">
        <div class="row">
            <div class="col text-right">
                <span class="color-connectionMessage-lightTheme">Vous êtes connecté·e en tant que <strong><?= $_SESSION['nickname'] ?></strong></span>
                <span id="lightThemeOnButton" class="fas fa-sun btn btn-sm btn-info" title="Thème clair" style="color:yellow"></span>
                <span id="darkThemeOnButton" class="fas fa-moon btn btn-sm btn-dark" title="Thème sombre" style="color:deepskyblue"></span>
                <?php
                if ($myAdmin->isUserAnAdmin($_SESSION['nickname'], $_SESSION['password'])) {
                ?>
                <button id="adminPanelEnterButton" class="btn btn-danger btn-sm float-right">Administration<span class="fa faButtonRight fa-lock"></span></button>
                <?php
                }
                ?>
                <a id="logoutButton" href="index.php?logout=1"><span class="fa faButtonRight faButtonLeft fa-sign-out-alt text-danger" title="Se déconnecter"></span></a>
            </div>
        </div>
    </div>
    <?php
}
include('view/alertsView.php');
include('view/connectionView.php');
include('view/inscriptionView.php');
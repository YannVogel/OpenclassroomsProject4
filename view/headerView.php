<?php
use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();

if(isset($_POST['nicknameInput']) AND isset($_POST['passwordInput']) AND $myAdmin->isConnectionValid($_POST['nicknameInput'], $_POST['passwordInput']))
{
    $nickname = htmlspecialchars($_POST['nicknameInput']);
    $password = $_POST['passwordInput'];
    $_SESSION['nickname'] = $nickname;
    $_SESSION['password'] = $password;
} elseif(isset($_POST['nicknameInput']) AND isset($_POST['passwordInput']) AND trim($_POST['nicknameInput']) !== "" AND  trim($_POST['passwordInput']) !== "") { ?>
    <div id="connectionUserFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Identifiants incorrects...
    </div>
    <?php
}
include('view/alertsView.php');
include('view/connectionView.php');
include('view/inscriptionView.php');
?>

<header class="container bgColor-azureishWhite">
    <div class="row">
        <div class="col text-center">
            <h1 class="h1">Billet simple pour l'Alaska</h1>
            <br/>
            <h2 class="navbar-brand">Le site officiel de Jean Forteroche</h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <ul class="nav flex-row justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil<span class="fa faButtonRight fa-home"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?postsPage=1">Tous les chapitres<span class="fa faButtonRight fa-book"></span></a>
                </li>
            </ul>
            <?php
            if(!isset($_SESSION['nickname']) OR !isset($_SESSION['password']) OR trim($_SESSION['nickname']) === '' OR trim($_SESSION['password']) === '')
            {
            ?>
            <button data-toggle="modal" data-target="#connectionForm" class="btn btn-primary btn-sm">Connexion<span class="fa faButtonRight fa-toggle-on"></span></button>
            <button data-toggle="modal" data-target="#inscriptionForm" class="btn btn-primary btn-sm">Inscription<span class="fa faButtonRight fa-edit"></span></button>
          <?php
        }elseif(isset($_SESSION['nickname']) AND isset($_SESSION['password'])) {
            if ($myAdmin->isConnectionValid($_SESSION['nickname'], $_SESSION['password'])) {
                if ($myAdmin->isUserAnAdmin($_SESSION['nickname'])) {
                    ?>

                    <button id="adminPanelEnterButton" class="btn btn-danger btn-sm">Admin Panel<span class="fa faButtonRight fa-lock"></span></button>
                    <?php
                }
            }else {
                session_destroy();
            }
        }
        ?>

        </div>
    </div>
    <?php
    if(isset($_SESSION['nickname']) AND isset($_SESSION['password']) AND $myAdmin->isConnectionValid($_SESSION['nickname'], $_SESSION['password'])) {
        ?>
        <div class="row">
            <div class="col text-center">
                Vous êtes connecté·e en tant que <strong><?= $_SESSION['nickname'] ?></strong> (<a id="endConnectionButton" href="#">Se déconnecter</a>)
            </div>
        </div>
        <?php
    }
    ?>
</header>
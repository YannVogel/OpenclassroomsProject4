<?php
use Project\Controller\PostController;
use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();
?>
<header class="container">
    <div class="row">
        <div class="col col-md-12 text-center">HEADER DU SITE
            <?php
            if(!isset($_SESSION['nickname']) OR !isset($_SESSION['password']) OR trim($_SESSION['nickname']) === '' OR trim($_SESSION['password']) === '')
            {
            ?>
            <div></div><button data-toggle="modal" data-target="#connectionForm" class="btn btn-primary">Connexion<span class="fa faButtonRight fa-toggle-on"></span></button>
            <button data-toggle="modal" data-target="#inscriptionForm" class="btn btn-primary">Inscription<span class="fa faButtonRight fa-edit"></span></button></div>
        <?php
        }elseif(isset($_SESSION['nickname']) AND isset($_SESSION['password'])) {
            if ($myAdmin->isConnectionValid($_SESSION['nickname'], $_SESSION['password'])) {
                ?>
                <div>Vous êtes connecté·e en tant que <?= $_SESSION['nickname'] ?></div>
                <button id="endConnectionButton" class="btn btn-primary">Se déconnecter<span class="fa faButtonRight fa-toggle-off"></span></button>
                <button id="adminPanelEnterButton" class="btn btn-danger">Admin Panel<span class="fa faButtonRight fa-lock"></span></button>
                <?php
            }else {
                session_destroy();
            }
        }
        ?>
    </div>
    </div>
</header>

<?php
    $manage = new PostController;
    $manage->displayPost($_GET['displayPost']);
?>
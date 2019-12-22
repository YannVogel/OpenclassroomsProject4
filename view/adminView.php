<?php
use Project\Controller\AdminUserController;
use Project\Controller\AdminPostController;

$myAdmin = new AdminUserController();


if(isset($_SESSION['nickname']) AND isset($_SESSION['password']) AND $myAdmin->isConnectionValid($_SESSION['nickname'], $_SESSION['password']) AND $myAdmin->isUserAnAdmin($_SESSION['nickname'], $_SESSION['password']))
{
?>
    <nav class="nav nav-tabs">
        <a id='tab1' class="nav-item nav-link" href="#p1">Nouveau billet</a>
        <a id='tab2' class="nav-item nav-link" href="#p2">Modifier billet</a>
        <a id='tab3' class="nav-item nav-link" href="#p3">Supprimer billet</a>
        <a id='tab4' class="nav-item nav-link" href="#p4">Supprimer commentaire</a>
    </nav>
    <div class="tab-content">
        <div class="tab-pane" id="p1">
            <!-- Ici se trouve le code pour ajouter un nouveau billet -->
            <?php require('./view/addPostView.php') ?>
    </div>

    <div class="tab-pane" id="p2">
        <!-- Ici se trouve le code pour modifier un billet existant -->
        <?php require('./view/editPostView.php') ?>
    </div>

    <div class="tab-pane" id="p3">
        <!-- Ici se trouve le code pour supprimer un billet -->
        <?php require('./view/deletePostView.php') ?>
    </div>
    <div class="tab-pane" id="p4">
        <!-- Ici se trouve le code pour supprimer un commentaire -->
        <?php require('./view/deleteCommentView.php') ?>
    </div>
    </div>
<?php

}else {

header('Location: index.php');
}
?>

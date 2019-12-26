<?php
use Project\Controller\AdminUserController;
use Project\Controller\AdminPostController;

$myAdmin = new AdminUserController();

//This page only displays if the user is logged in AS AN ADMIN
if(isset($_SESSION['nickname']) AND isset($_SESSION['password']) AND $myAdmin->isUserAnAdmin($_SESSION['nickname'], $_SESSION['password']))
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
            <!-- Administration panel tab to create a new post -->
            <?php require('./view/addPostView.php') ?>
    </div>

    <div class="tab-pane" id="p2">
        <!-- Administration panel tab to edit a post -->
        <?php require('./view/editPostView.php') ?>
    </div>

    <div class="tab-pane" id="p3">
        <!-- Administration panel tab to delete a post -->
        <?php require('./view/deletePostView.php') ?>
    </div>
    <div class="tab-pane" id="p4">
        <!-- Administration panel tab to delete an user's comment -->
        <?php require('./view/deleteCommentView.php') ?>
    </div>
    </div>
<?php

}else {
//If the user is not logged in, or not logged in as an admin, redirects to index.php
header('Location: index.php');
}
?>

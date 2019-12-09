<?php
require_once('../model/AdminPostManager.php');

if (isset($_GET['deletePostSuccessMessage']) AND $_GET['deletePostSuccessMessage'] === '1')
{?>
    <div id="deletePostSuccessMessage" class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Réussite !</strong> Le billet a bien été supprimé !
    </div>
    <?php
}



if(isset($_GET['deletePostFailureMessage']) AND $_GET['deletePostFailureMessage'] === '1')
{ ?>
    <div id="deletePostFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Le billet n'a pas pu être supprimé !
    </div>
    <?php
}
// Ici se trouve le code pour supprimer un billet
$myAdmin = new AdminPostManager();
$posts = $myAdmin->getPosts();

while ($data = $posts->fetch()) {
    ?>
    <h2>
        <a class="p2Active" href="controller/deletePost.php?postId=<?= $data['post_id'] ?>"><?= $data['post_title'] ?></a>
    </h2>
    <?php
}
$posts->closeCursor();
?>



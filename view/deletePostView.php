<?php

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

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
if(!isset($_GET['postId'])) {
    $myAdmin = new PostManager();
    $data = $myAdmin->getPosts();

    /** @var PostEntity $post */
    foreach ($data as $post) {
        ?>
        <h2>
            <a href=".?postId=<?= $post->getPostId() ?>"><?= $post->getPostTitle() ?></a>
        </h2>
        <?php
    }
}elseif(isset($_GET['postId']) && $_GET['postId'] > 0) {
    $myAdmin = new PostManager();
    $post = $myAdmin->getPost($_GET['postId']);
    ?>

    <h2><?= $post['post_title'] ?> <a href="index.php?deletePostId=<?= $_GET['postId'] ?>">EFFACER</a></h2>
    <div><?= $post['post_content'] ?></div>
    <button id="previousButton">Précédent</button>


<?php
}

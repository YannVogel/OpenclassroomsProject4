<?php
use Project\Controller\PostController;
$controller = new PostController();
?>

<section class="container">
    <div class="row mt-4 mb-2">
        <div class="col col-12 text-center">
            <h3 class="h3"><?= $post->getPostTitle(); ?></h3>
        </div>
    </div>
    <div class="row font-weight-bold bgColor-headers">
        <span class="col col-8">publié le <?= $post->getPostDate(); ?></span>
        <span class="col col-4 text-right">Nombre de commentaire : <?= $controller->getNumberOfComments($post->getPostId()) ?></span>
    </div>
    <div class="row border bgColor-postsContent">
        <div class="col col-12"><?= $post->getPostContent(); ?></div>
        <div class="col col-12 text-right"><span class="font-weight-bold">FIN DU CHAPITRE</span><br/><a href="index.php">Retour à l'accueil<span class="fa faButtonRight fa-home"></span></a></div>

    </div>
</section>
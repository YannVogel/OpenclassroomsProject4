<?php
use Project\Controller\PostController;
$controller = new PostController();
?>

<section class="container">
    <div class="row">
        <div class="col col-12 text-center">
            <h2 class="h2"><?= $post->getPostTitle(); ?></h2>
        </div>
    </div>
    <div class="row">
        <span class="col col-8">publié le <?= $post->getPostDate(); ?></span>
        <span class="col col-4 text-center">Nombre de commentaire : <?= $controller->getNumberOfComments($post->getPostId()) ?></span>
    </div>
    <div class="row">
        <div class="col col-12"><?= $post->getPostContent(); ?></div>
        <a class="col col-12 text-center" href="index.php">Retour à l'accueil.</a>

    </div>
</section>
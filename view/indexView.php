<?php
use Project\Controller\PostController;

if($lastPost)
    {
        $controller = new PostController();
?>
<section class="container">
    <div class="row">
        <div class="col col-12 text-center">
            <h2 class="h2"><?= $lastPost->getPostTitle(); ?></h2>
        </div>
    </div>
        <div class="row">
            <span class="col col-8">publié le <?= $lastPost->getPostDate(); ?></span>
            <span class="col col-4 text-center">Nombre de commentaire : <?= $controller->getNumberOfComments($lastPost->getPostId()) ?></span>
        </div>


    <div class="row">
    <div class="col"><?= $lastPost->getPostIntro(); ?></div>
    </div>
</section>
<?php
    }else{
    echo '<div>Aucun billet à afficher</div>';
}
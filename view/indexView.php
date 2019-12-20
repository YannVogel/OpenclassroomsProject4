<?php
use Project\Controller\PostController;

if($lastPost)
    {
        $controller = new PostController();
?>
<section class="container">
    <div class="row mt-4 mb-2">
        <div class="col col-12 text-center">
            <h3 class="h3"><?= $lastPost->getPostTitle(); ?></h3>
        </div>
    </div>
        <div class="row font-weight-bold bgColor-azureishWhite">
            <span class="col col-8">publié le <?= $lastPost->getPostDate(); ?></span>
            <span class="col col-4 text-right">Nombre de commentaire : <?= $controller->getNumberOfComments($lastPost->getPostId()) ?></span>
        </div>


    <div class="row border bgColor-floralWhite">
        <div class="col"><?= $lastPost->getPostIntro(); ?></div>
    </div>
</section>
<?php
    }else{
    echo '<div>Aucun billet à afficher</div>';
}
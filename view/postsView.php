<?php
use Project\Controller\PostController;
use Project\Model\Entity\PostEntity;
$controller = new PostController();
?>
<section class="container">
    <?php
    /** @var PostEntity $post */
    foreach($posts as $post)
    {
        ?>
    <article>
        <div class="row mt-4 mb-2">
            <div class="col col-12 text-center">
                <h3 class="h3"><?= $post->getPostTitle(); ?></h3>
            </div>
        </div>
        <div class="row font-weight-bold bgColor-azureishWhite">
            <span class="col col-8">publié le <?= $post->getPostDate(); ?></span>
            <span class="col col-4 text-right">Nombre de commentaire : <?= $controller->getNumberOfComments($post->getPostId()) ?></span>
        </div>


        <div class="row border bgColor-floralWhite">
            <div class="col"><?= $post->getPostIntro(); ?></div>
        </div>
    </article>
        <div class="myLine"></div>
        <?php
    }
    ?>
</section>
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
            <div class="col"><?= $post->getPostIntro(); ?></div>
        </div>
    </article>
        <?php
    }
    ?>
</section>
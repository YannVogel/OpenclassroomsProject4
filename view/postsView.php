<?php
use Project\Controller\PostController;
use Project\Model\Entity\PostEntity;
$controller = new PostController();
?>
<section class="container-lg">
    <?php
    /** @var PostEntity $post */
    foreach($posts as $post)
    {
        ?>
    <article>
        <div class="row mt-4 mb-2">
            <div class="col col-12 font-headersTitles colorHeaders-lightTheme text-center">
                <h3 class="h3"><?= $post->getPostTitle(); ?></h3>
            </div>
        </div>
        <div class="row font-weight-bold bgColor-headers">
            <span class="col col-sm-6 col-xl-8">publié le <?= $post->getPostDate(); ?></span>
            <span class="col col-sm-6 col-xl-4 text-right pr-2"><?= $controller->getNumberOfComments($post->getPostId()) ?> commentaire<?php if($controller->getNumberOfComments($post->getPostId()) > 1){echo 's';} ?></span>
        </div>


        <div class="row border font-postsContent bgColor-postsContent-lightTheme">
            <div class="col"><?= $controller->getPostIntro($post->getPostId()); ?></div>
        </div>
    </article>
        <div class="myLine-lightTheme"></div>
        <?php
    }
    ?>
</section>
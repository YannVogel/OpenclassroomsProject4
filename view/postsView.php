<section class="container">
    <?php
    /** @var \Project\Model\Entity\PostEntity $post */
    foreach($posts as $post)
    {
        ?>
    <article>
        <div class="row">
            <div class="col col-12 text-center"><h2 class="h2"><?= $post->getPostTitle(); ?></h2>
                le <?= $post->getPostDate(); ?></div>
        </div>
        <div class="row">
            <div class="col col-12"><?= $post->getPostIntro(); ?></div>
        </div>
    </article>
        <?php
    }
    ?>
</section>
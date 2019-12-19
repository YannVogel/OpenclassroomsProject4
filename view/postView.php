<section class="container">
    <div class="row">
        <div class="col col-12 text-center"><h2 class="h2"><?= $post->getPostTitle(); ?></h2> le <?= $post->getPostDate(); ?></div>
    </div>
    <div class="row">
        <div class="col col-12"><?= $post->getPostContent(); ?></div>
        <a class="col col-12 text-center" href="index.php">Retour à l'accueil.</a>

    </div>
</section>
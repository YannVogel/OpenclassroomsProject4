<?php

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

if(!isset($_GET['postId'])) {
    $myAdmin = new PostManager();
    $data = $myAdmin->getPosts();
?>
<section class="container text-center">
<div class="font-weight-bold">Choisir un article à supprimer :</div>

<?php
    /** @var PostEntity $post */
    foreach ($data as $post) {
        ?>
        <div>
             <h2 class="h2"><a href=".?adminPage=1&postId=<?= $post->getPostId() ?>"><?= $post->getPostTitle() ?></a></h2>
        </div>
        <?php
    }
    ?>

</section>
<?php
}elseif(isset($_GET['postId']) && $_GET['postId'] > 0) {
    $myAdmin = new PostManager();
    $post = $myAdmin->getPost($_GET['postId']);
    /** @var PostEntity $post */
    ?>
    <section class="container-lg border">
        <div class="row bgColor-headers text-center">
            <div class="col col-12">
                <h2 class="h2"><?= $post->getPostTitle() ?></h2>
            </div>
            <div class="col col-12">
                <a class="btn btn-danger" href="index.php?adminPage=1&deletePostId=<?= $post->getPostId() ?>"><span class="fa faButtonLeft fa-trash-alt"></span>SUPPRIMER</a>
                <button class="btn btn-info" id="previousButton"><span class="fa faButtonLeft fa-undo"></span>Précédent</button>
            </div>
        </div>
        <div class="row bgColor-postsContent-lightTheme">
            <div class="col col-12">
                <div><?= $post->getPostContent() ?></div>

            </div>
        </div>
    </section>
<?php
}

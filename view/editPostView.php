<?php

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

if(!isset($_GET['editPostId'])) {
    $myAdmin = new PostManager();
    $data = $myAdmin->getPosts();
?>
<section class="container text-center">
<div class="font-weight-bold">Choisir un article à modifier :</div>

<?php
    /** @var PostEntity $post */
    foreach ($data as $post) {
        ?>
        <div>
            <h2 class="h2"><a href=".?adminPage=1&editPostId=<?= $post->getPostId() ?>"><?= $post->getPostTitle() ?></a></h2>
        </div>
        <?php
    }
    ?>
</section>

<?php
}elseif(isset($_GET['editPostId']) && $_GET['editPostId'] > 0) {
    $myAdmin = new PostManager();
    $post = $myAdmin->getPost($_GET['editPostId']);
    /** @var PostEntity $post */
    ?>
    <form action=".?editPostId=<?= $post->getPostId() ?>" class="container" method="post">
        <div class="form-group">
            <label for="editPostTitle">Titre du billet : </label>
            <input id="editPostTitle" name="editPostTitle" type="text" class="form-control"
                   value="<?= $post->getPostTitle() ?>" required>
        </div>
        <div class="form-group">
            <label for="editPostContent">Contenu du billet : </label>
            <textarea id="editPostContent" name="editPostContent" class="form-control" required><?= $post->getPostContent() ?></textarea>
        </div>
        <button class="btn btn-primary" type="submit"><span class="fa faButtonLeft fa-edit"></span>Modifier</button>
        <button class="btn btn-info" id="previousButton"><span class="fa faButtonLeft fa-undo"></span>Précédent</button>
    </form>

    <?php
}
?>

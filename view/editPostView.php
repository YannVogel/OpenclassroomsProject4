<?php

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

?>

<!-- Ici se trouve le code pour modifier un billet existant -->
<?php
if(!isset($_GET['editPostId'])) {
    $myAdmin = new PostManager();
    $data = $myAdmin->getPosts();

    /** @var PostEntity $post */
    foreach ($data as $post) {
        ?>
        <h2>
            <a href=".?adminPage=1&editPostId=<?= $post->getPostId() ?>"><?= $post->getPostTitle() ?></a>
        </h2>
        <?php
    }
}elseif(isset($_GET['editPostId']) && $_GET['editPostId'] > 0) {
    $myAdmin = new PostManager();
    $post = $myAdmin->getPost($_GET['editPostId']);
    ?>
    <form id='formEditPostView' action=".?editPostId=<?= $_GET['editPostId'] ?>" class="container" method="post">
        <div class="form-group">
            <label for="editPostTitle">Titre du billet : </label>
            <input id="editPostTitle" name="editPostTitle" type="text" class="form-control"
                   value="<?= $post['post_title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="editPostContent">Contenu du billet : </label>
            <textarea id="editPostContent" name="editPostContent" class="form-control" required><?= $post['post_content'] ?></textarea>
        </div>
        <input type="submit" value="Modifier"/>
        <button id="previousButton">Précédent</button>
    </form>

    <?php
}
?>

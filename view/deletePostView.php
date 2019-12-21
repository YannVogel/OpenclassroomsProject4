<?php

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

if(!isset($_GET['postId'])) {
    $myAdmin = new PostManager();
    $data = $myAdmin->getPosts();

    /** @var PostEntity $post */
    foreach ($data as $post) {
        ?>
        <h2>
            <a href=".?adminPage=1&postId=<?= $post->getPostId() ?>"><?= $post->getPostTitle() ?></a>
        </h2>
        <?php
    }
}elseif(isset($_GET['postId']) && $_GET['postId'] > 0) {
    $myAdmin = new PostManager();
    $post = $myAdmin->getPost($_GET['postId']);
    /** @var PostEntity $post */
    ?>

    <h2><?= $post->getPostTitle() ?> <a href="index.php?adminPage=1&deletePostId=<?= $post->getPostId() ?>">EFFACER</a></h2>
    <div><?= $post->getPostContent() ?></div>
    <button id="previousButton">Précédent</button>


<?php
}

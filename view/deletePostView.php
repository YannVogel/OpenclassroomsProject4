<?php

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;


// Ici se trouve le code pour supprimer un billet
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
    ?>

    <h2><?= $post['post_title'] ?> <a href="index.php?adminPage=1&deletePostId=<?= $_GET['postId'] ?>">EFFACER</a></h2>
    <div><?= $post['post_content'] ?></div>
    <button id="previousButton">Précédent</button>


<?php
}

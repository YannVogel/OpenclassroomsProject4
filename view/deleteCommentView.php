<?php

use Project\Model\Entity\CommentEntity;
use Project\Model\Manager\CommentManager;


$myAdmin = new CommentManager();
$data = $myAdmin->manageComments();

/** @var CommentEntity $comment */
foreach ($data as $comment) {
        ?>
    <div class="container">
        <div class="col col-12 text-center">
            <?= $comment->getCommentAuthor() ?> le <?= $comment->getCommentDate() ?> | Niveau de signalement : <?= $comment->getCommentModeration() ?>
        </div>
        <div class="col col-12">
            <?= $comment->getCommentContent() ?>

            <div class="text-center"><a href="index.php?adminPage=1&deleteCommentId=<?= $comment->getCommentId() ?>">SUPPRRIMER</a></div>

        </div>
    </div>

        <?php
}

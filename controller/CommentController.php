<?php

namespace Project\Controller;

use Project\Model\Entity\CommentEntity;
use Project\Model\Manager\CommentManager;

class CommentController
{
    public function getCommentsSection($postId)
    {
        ob_start();
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($postId);

        include('view/commentsView.php');

        return ob_get_clean();

    }
}
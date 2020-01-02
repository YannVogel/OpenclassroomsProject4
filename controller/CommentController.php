<?php

namespace Project\Controller;

use Project\Model\Entity\CommentEntity;
use Project\Model\Manager\CommentManager;

/**
 * Class CommentController
 * @package Project\Controller
 * Controls the operations affecting the comments.
 */
class CommentController
{
    /**
     * @param $postId
     * @return false|string
     * Display the comments section of the post matching $postId.
     */
    public function getCommentsSection($postId)
    {
        ob_start();
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($postId);

        include('view/commentsView.php');

        return ob_get_clean();

    }
}
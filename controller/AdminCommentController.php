<?php


namespace Project\Controller;


use Project\Model\Entity\CommentEntity;
use Project\Model\Manager\CommentManager;

class AdminCommentController
{

    public function valideAddComment($postId, $user, $content)
    {
        $comment = new CommentEntity();
        $comment->setRelatedPostId($postId);
        $comment->setCommentAuthor($user);
        $comment->setcommentContent(htmlspecialchars($content));

        $manager = new CommentManager();
        $manager->addComment($comment);

        header('Location: index.php?displayPost=' . $postId . '&newCommentSuccessMessage=1');
    }


    public function failureAddComment($postId)
    {
        header('Location: index.php?displayPost=' . $postId . '&newCommentFailureMessage=1');
    }

    public function valideSignalComment($postId, $commentId)
    {
        $manager = new CommentManager();
        $manager->signalComment($commentId);

        header('Location: index.php?displayPost=' . $postId . '&signalCommentSuccessMessage=1');


    }
}
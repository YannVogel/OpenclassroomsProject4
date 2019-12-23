<?php


namespace Project\Controller;


use Project\Model\Entity\CommentEntity;
use Project\Model\Manager\CommentManager;

/**
 * Class AdminCommentController
 * @package Project\Controller
 * Control the admin operations affecting the comments.
 */
class AdminCommentController
{

    /**
     * @param $postId
     * @param $user
     * @param $content
     * Set informations in order to add a new comment to the database.
     */
    public function valideAddComment($postId, $user, $content)
    {
        $comment = new CommentEntity();
        $comment->setRelatedPostId($postId);
        $comment->setCommentAuthor($user);
        $comment->setcommentContent(nl2br(htmlspecialchars($content)));

        $manager = new CommentManager();
        $manager->addComment($comment);

        header('Location: index.php?displayPost=' . $postId . '&newCommentSuccessMessage=1');
    }


    /**
     * @param $postId
     * Display an error message if a comment couldn't be added to the database.
     */
    public function failureAddComment($postId)
    {
        header('Location: index.php?displayPost=' . $postId . '&newCommentFailureMessage=1');
    }

    /**
     * @param $postId
     * @param $commentId
     * Display a success message when a comment is signaled for the moderation.
     */
    public function valideSignalComment($postId, $commentId)
    {
        $manager = new CommentManager();
        $manager->signalComment($commentId);

        header('Location: index.php?displayPost=' . $postId . '&signalCommentSuccessMessage=1');


    }

    /**
     * @param $commentId
     * Set informations in order to delete the comment matching $commentId from the database.
     */
    public function valideDeleteComment($commentId)
    {
        $manager = new CommentManager();
        $manager->deleteComment($commentId);

        header('Location: index.php?adminPage=1&deleteCommentSuccessMessage=1');

    }
}
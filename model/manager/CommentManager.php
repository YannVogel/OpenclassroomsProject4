<?php

namespace Project\Model\Manager;

use Project\Model\Entity\CommentEntity;
use Project\Model\Manager\Manager;

class CommentManager extends Manager
{
    public function getComments(int $postId)
    {
        $db = $this->databaseConnect();
        $comments = $db->prepare('SELECT comment_id, comment_author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%y - %Hh%imin%ss\') AS comment_date_fr FROM comments_table WHERE related_post_id = ?');
        $comments->execute(array($postId));

        return $comments->fetchAll(\PDO::FETCH_CLASS, CommentEntity::class);
    }

    public function addComment(CommentEntity $comment)
    {
        $db = $this->databaseConnect();
        $comments = $db->prepare('INSERT INTO comments_table(related_post_id, comment_author, comment_content, comment_date) VALUES(?, ?, ?, NOW())');
        $comments->execute(array($comment->getCommentId(), $comment->getCommentAuthor(), $comment->getCommmentContent()));
    }

    public function displayReportedComments()
    {
        $db = $this->databaseConnect();
        $comments = $db->prepare('SELECT comment_id, related_post_id, comment_author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%y - %Hh%imin%ss\') AS comment_date_fr FROM comments_table ORDER BY comment_moderation DESC');
        $comments->execute();

        return $comments;
    }

    public function deleteComment(int $commentId)
    {
        //delete a selected comment
    }
}
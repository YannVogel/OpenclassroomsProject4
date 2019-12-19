<?php

namespace Project\Model\Manager;

use Project\Model\Entity\CommentEntity;
use Project\Model\Manager\Manager;

class CommentManager extends Manager
{
    public function getComment(int $commentId) : CommentEntity
    {
        $db = $this->databaseConnect();
        $comment = $db->prepare('SELECT comment_id, comment_author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%y - %Hh%imin%ss\') AS comment_date_fr, comment_moderation FROM comments_table WHERE comment_id = ?');
        $comment->execute(array($commentId));

        $comment->setFetchMode(\PDO::FETCH_CLASS, CommentEntity::class);

        return $comment->fetch();
    }

    public function getComments(int $postId)
    {
        $db = $this->databaseConnect();
        $comments = $db->prepare('SELECT comment_id, comment_author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%y - %Hh%imin%ss\') AS comment_date_fr FROM comments_table WHERE related_post_id = ? ORDER BY comment_id DESC');
        $comments->execute(array($postId));

        return $comments->fetchAll(\PDO::FETCH_CLASS, CommentEntity::class);
    }

    public function addComment(CommentEntity $comment)
    {
        $db = $this->databaseConnect();
        $comments = $db->prepare('INSERT INTO comments_table(related_post_id, comment_author, comment_content, comment_date) VALUES(?, ?, ?, NOW())');
        $comments->execute(array($comment->getRelatedPostId(), $comment->getCommentAuthor(), $comment->getCommentContent()));
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
        $db = $this->databaseConnect();
        $req = $db->prepare('DELETE FROM comments_table WHERE comment_id= ?');
        $req->execute(array($commentId));
    }

    public function signalComment(int $commentId)
    {
        $comment = $this->getComment($commentId);
        /** @var CommentEntity $comment */
        $moderation = $comment->getCommentModeration();

        $moderation++;

        $db = $this->databaseConnect();
        $req = $db->prepare('UPDATE comments_table SET comment_moderation = ? WHERE comment_id = ?');
        $req->execute(array($moderation, $commentId));

    }

    public function manageComments()
    {
        $db = $this->databaseConnect();
        $comments = $db->prepare('SELECT comment_id, related_post_id, comment_author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%y - %Hh%imin%ss\') AS comment_date_fr, comment_moderation FROM comments_table ORDER BY comment_moderation DESC');
        $comments->execute();

        return $comments->fetchAll(\PDO::FETCH_CLASS, CommentEntity::class);
    }
}
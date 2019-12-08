<?php
require_once('model/Manager.php');

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->databaseConnect();
        $comments = $db->prepare('SELECT comment_id, comment_author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%y - %Hh%imin%ss\') AS comment_date_fr FROM comments_table WHERE related_post_id = ?');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $content)
    {
        $db = $this->databaseConnect();
        $comments = $db->prepare('INSERT INTO comments_table(related_post_id, comment_author, comment_content, comment_date) VALUES(?, ?, ?, NOW())');
        $comments->execute(array($postId, $author, $content));
    }
}
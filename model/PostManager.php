<?php
require_once('Manager.php');

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->databaseConnect();

        return $db->query('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS posts_dates_fr FROM posts_table ORDER BY post_id DESC');
    }

    public function getPost($postId)
    {
        $db = $this->databaseConnect();
        $req = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS posts_dates_fr FROM posts_table WHERE post_id = ?');
        $req->execute(array($postId));

        return $req->fetch();
    }
}
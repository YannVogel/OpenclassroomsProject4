<?php

namespace Project\Model\Manager;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\Manager;

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->databaseConnect();

        $posts = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS posts_dates_fr FROM posts_table ORDER BY post_id DESC');
        $posts->execute();

        return $posts->fetchAll(\PDO::FETCH_CLASS, PostEntity::class);
    }

    public function getPost(int $postId)
    {
        $db = $this->databaseConnect();
        $post = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS posts_dates_fr FROM posts_table WHERE post_id = ?');
        $post->execute(array($postId));

        return $post->fetch();
    }

    public function createPost($postTitle, $postContent)
    {
        $db = $this->databaseConnect();
        $req = $db->prepare('INSERT INTO posts_table(post_title, post_content, post_date) VALUES(?, ?, NOW())');
        $req->execute(array($postTitle, $postContent));
    }

    public function editPost($postId, $postTitle, $postContent)
    {
        $db = $this->databaseConnect();
        $req = $db->prepare('UPDATE posts_table SET post_title = ?, post_content = ?, post_date = NOW() WHERE post_id = ?');
        $req->execute(array($postTitle, $postContent, $postId));
    }

    public function deletePost($postId)
    {
        $db = $this->databaseConnect();
        $req = $db->prepare('DELETE FROM posts_table WHERE post_id= ?');
        $req->execute(array($postId));
    }
}
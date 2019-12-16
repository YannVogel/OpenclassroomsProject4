<?php

namespace Project\Model\Manager;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\Manager;

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->databaseConnect();

        $posts = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS post_date_fr FROM posts_table ORDER BY post_id DESC');
        $posts->execute();

        return $posts->fetchAll(\PDO::FETCH_CLASS, PostEntity::class);
    }

    public function getPost(int $postId)
    {
        $db = $this->databaseConnect();
        $post = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS post_date_fr FROM posts_table WHERE post_id = ?');
        $post->execute(array($postId));

        $post->setFetchMode(\PDO::FETCH_CLASS, PostEntity::class);

        return $post->fetch();
    }

    public function getLastPost()
    {
        $db = $this->databaseConnect();
        $lastPost = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS post_date_fr FROM posts_table ORDER BY post_id DESC LIMIT 0,1');
        $lastPost->execute();

        $lastPost->setFetchMode(\PDO::FETCH_CLASS, PostEntity::class);

        return $lastPost->fetch();
    }

    public function addPost(PostEntity $post)
    {
        $db = $this->databaseConnect();
        $req = $db->prepare('INSERT INTO posts_table(post_title, post_content, post_date) VALUES(?, ?, NOW())');
        $req->execute(array($post->getPostTitle(), $post->getPostContent()));
    }

    public function editPost(int $postId, string $postTitle, string $postContent)
    {
        $db = $this->databaseConnect();
        $req = $db->prepare('UPDATE posts_table SET post_title = ?, post_content = ?, post_date = NOW() WHERE post_id = ?');
        $req->execute(array($postTitle, $postContent, $postId));
    }

    public function deletePost(int $postId)
    {
        $db = $this->databaseConnect();
        $req = $db->prepare('DELETE FROM posts_table WHERE post_id= ?');
        $req->execute(array($postId));
    }
}
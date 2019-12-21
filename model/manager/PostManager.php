<?php

namespace Project\Model\Manager;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\Manager;

/**
 * Class PostManager
 * @package Project\Model\Manager
 * Manage posts in database.
 */
class PostManager extends Manager
{
    /**
     * @return array
     * Return all the posts in the database.
     */
    public function getPosts()
    {
        $db = $this->databaseConnect();

        $posts = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS post_date_fr FROM posts_table ORDER BY post_id DESC');
        $posts->execute();

        return $posts->fetchAll(\PDO::FETCH_CLASS, PostEntity::class);
    }

    /**
     * @param int $postId
     * @return mixed
     * Return the post matching $postId.
     */
    public function getPost(int $postId)
    {
        $db = $this->databaseConnect();

        $post = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS post_date_fr FROM posts_table WHERE post_id = ?');
        $post->execute(array($postId));

        $post->setFetchMode(\PDO::FETCH_CLASS, PostEntity::class);

        return $post->fetch();
    }

    /**
     * @return mixed
     * Return the last post of the database (based on the post_id).
     */
    public function getLastPost()
    {
        $db = $this->databaseConnect();

        $lastPost = $db->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'%d/%m/%y - %Hh%imin%ss\') AS post_date_fr FROM posts_table ORDER BY post_id DESC LIMIT 0,1');
        $lastPost->execute();

        $lastPost->setFetchMode(\PDO::FETCH_CLASS, PostEntity::class);

        return $lastPost->fetch();
    }

    /**
     * @param PostEntity $post
     * Add a post to the database.
     */
    public function addPost(PostEntity $post)
    {
        $db = $this->databaseConnect();

        $req = $db->prepare('INSERT INTO posts_table(post_title, post_content, post_date) VALUES(?, ?, NOW())');
        $req->execute(array($post->getPostTitle(), $post->getPostContent()));
    }

    /**
     * @param int $postId
     * @param string $postTitle
     * @param string $postContent
     * Edit the post matching $postId with a new title ($postTitle) and content ($postContent).
     */
    public function editPost(int $postId, string $postTitle, string $postContent)
    {
        $db = $this->databaseConnect();

        $req = $db->prepare('UPDATE posts_table SET post_title = ?, post_content = ?, post_date = NOW() WHERE post_id = ?');
        $req->execute(array($postTitle, $postContent, $postId));
    }

    /**
     * @param int $postId
     * Delete the post matching $postId from the database.
     */
    public function deletePost(int $postId)
    {
        $db = $this->databaseConnect();

        $req = $db->prepare('DELETE FROM posts_table WHERE post_id= ?');
        $req->execute(array($postId));
    }

    /**
     * @param $postId
     * @return mixed
     * Return the number of comments of the post matching $postId.
     */
    public function numberOfComments($postId)
    {
        $db = $this->databaseConnect();
        $comments = $db->prepare('SELECT COUNT(*) AS numberOfComments FROM comments_table WHERE related_post_id = ?');
        $comments->execute(array($postId));

        $nbr = $comments->fetch();

        return $nbr['numberOfComments'];
    }
}
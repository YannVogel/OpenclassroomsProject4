<?php
require_once('../../model/PostManager.php');

class AdminPostManager extends PostManager
{
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
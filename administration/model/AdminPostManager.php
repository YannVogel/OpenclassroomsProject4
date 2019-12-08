<?php
require_once('../../model/PostManager.php');

class AdminPostManager extends PostManager
{
    public function createPost($postTitle, $postContent)
    {
        //create a new post from a form contents
        $db = $this->databaseConnect();
        $req = $db->prepare('INSERT INTO posts_table(post_title, post_content, post_date) VALUES(?, ?, NOW())');
        $req->execute(array($postTitle, $postContent));
    }

    public function editPost($postId, $postTitle, $postContent)
    {
        //edit a post from a form contents
    }

    public function deletePost($postId)
    {
        //delete a post
    }
}
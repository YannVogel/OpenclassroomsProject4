<?php
require "vendor/autoload.php";

use Project\Controller\PostController;
use Project\Controller\CommentController;
use Project\Controller\AdminPostController;
use Project\Controller\AdminCommentController;




$newPost = new AdminPostController();

if(isset($_POST['newPostTitle']) && trim($_POST['newPostTitle']) !== "" && isset($_POST['newPostContent']) && trim($_POST['newPostContent']) !== "") {
    $newPost->valideAddPost();
} elseif(isset($_POST['newPostTitle']) OR isset($_POST['newPostContent'])) {
    $newPost->failureAddPost();
} elseif(isset($_POST['editPostTitle']) AND trim($_POST['editPostTitle']) !== "" AND isset($_POST['editPostContent']) AND trim($_POST['editPostContent']) !== "")
{
    $newPost->valideEditPost();
} elseif(isset($_POST['editPostTitle']) OR isset($_POST['editPostContent']))
{
    $newPost->failureEditPost();
} elseif(isset($_GET['deletePostId']) AND trim($_GET['deletePostId']) !== "")
{
    $newPost->valideDeletePost();
} elseif (isset($_GET['deletePostId']))
{
    $newPost->failureDeletePost();
}else {
    require('view/indexView.php');
}

/*else if {droits admin}
require('view/adminView.php');*/
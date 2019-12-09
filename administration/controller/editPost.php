<?php
require_once('../model/AdminPostManager.php');

if(isset($_GET['postId'])) {
    $_GET['postId'] = (int)$_GET['postId'];

    if($_GET['postId'] > 0) {
        $myAdmin = new AdminPostManager();
        $post = $myAdmin->getPost($_GET['postId']);

        require('../view/createPostView.php');
    }
}

if(isset($_POST['editPostTitle']) AND trim($_POST['editPostTitle']) !== "" AND isset($_POST['editPostContent']) AND trim($_POST['editPostContent']) !== "") {
    $myAdmin = new AdminPostManager();
    $myAdmin->editPost($_GET['postId'], $_POST['editPostTitle'], $_POST['editPostContent']);

    header('Location: ../view/createPostView.php?editPostSuccessMessage=1');
} elseif(isset($_POST['editPostTitle']) OR isset($_POST['editPostContent']))
{
    header('Location: ../view/createPostView.php?editPostFailureMessage=1');
}
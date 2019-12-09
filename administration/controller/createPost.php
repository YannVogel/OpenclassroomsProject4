<?php
require_once('../model/AdminPostManager.php');

if(isset($_POST['newPostTitle']) && trim($_POST['newPostTitle']) !== "" && isset($_POST['newPostContent']) && trim($_POST['newPostContent']) !== "")
{
    $myAdmin = new AdminPostManager();
    $myAdmin->createPost($_POST['newPostTitle'], $_POST['newPostContent']);

    header('Location: ../view/adminView.php?successMessage=1');
} else
{
    header('Location: ../view/adminView.php?failureMessage=1');
}
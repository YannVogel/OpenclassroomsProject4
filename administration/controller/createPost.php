<?php
require_once('../model/AdminPostManager.php');

if(isset($_POST['newPostTitle']) && trim($_POST['newPostTitle']) !== "" && isset($_POST['newPostContent']) && trim($_POST['newPostContent']) !== "")
{
    $myAdmin = new AdminPostManager();
    $myAdmin->createPost($_POST['newPostTitle'], $_POST['newPostContent']);

    header('Location: ../indexAdmin.php?newPostSuccessMessage=1');
} else
{
    header('Location: ../indexAdmin.php?newPostFailureMessage=1');
}
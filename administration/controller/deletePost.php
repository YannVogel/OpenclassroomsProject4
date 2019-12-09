<?php
require_once('../model/AdminPostManager.php');

if(isset($_GET['deletePost']) AND trim($_GET['deletePost']) !== "")
{
    $myAdmin = new AdminPostManager();
    $myAdmin->deletePost($_GET['deletePost']);

    header('Location: ../indexAdmin.php?deletePostSuccessMessage=1');
} else
{
    header('Location: ../indexAdmin.php?deletePostFailureMessage=1');
}
<?php
use Project\Controller\PostController;
use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();

include('headerView.php');

    $manage = new PostController;
    $manage->displayLastPost();
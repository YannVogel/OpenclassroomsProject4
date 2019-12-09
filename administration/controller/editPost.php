<?php
require_once('../model/AdminPostManager.php');

$_GET['postId'] = (int)$_GET['postId'];


if(isset($_GET['postId']) && $_GET['postId'] > 0) {
    $myAdmin = new AdminPostManager();
    $post = $myAdmin->getPost($_GET['postId']);

    require('../view/adminView.php');
}
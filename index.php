<?php
if(!isset($_SESSION)) {
    session_start();
}
require "vendor/autoload.php";

use Project\Controller\PostController;
use Project\Controller\CommentController;
use Project\Controller\AdminPostController;
use Project\Controller\AdminCommentController;
use Project\Controller\AdminUserController;



if(isset($_POST['newPostTitle']) && trim($_POST['newPostTitle']) !== "" && isset($_POST['newPostContent']) && trim($_POST['newPostContent']) !== "") {

    $adminController = new AdminPostController();
    $adminController->valideAddPost();

} elseif(isset($_POST['newPostTitle']) OR isset($_POST['newPostContent'])) {

    $adminController = new AdminPostController();
    $adminController->failureAddPost();
}

if(isset($_POST['editPostTitle']) AND trim($_POST['editPostTitle']) !== "" AND isset($_POST['editPostContent']) AND trim($_POST['editPostContent']) !== "")
{
    $adminController = new AdminPostController();
    $adminController->valideEditPost();

} elseif(isset($_POST['editPostTitle']) OR isset($_POST['editPostContent']))
{
    $adminController = new AdminPostController();
    $adminController->failureEditPost();
}

if(isset($_GET['deletePostId']) AND trim($_GET['deletePostId']) !== "")
{
    $adminController = new AdminPostController();
    $adminController->valideDeletePost();

} elseif (isset($_GET['deletePostId']))
{
    $adminController = new AdminPostController();
    $adminController->failureDeletePost();
}




if(isset($_GET['displayPost']) AND trim($_GET['displayPost']) !== "") {

    $controller = new PostController();
    $pageTitle = $controller->getPageTitle($_GET['displayPost']);
    $pageHeader = $controller->getRegularHeader();
    $pageContent = $controller->getPostPage($_GET['displayPost']);

}elseif(isset($_GET['adminPage']) AND $_GET['adminPage'] === '1') {

    $adminController = new AdminPostController();
    $pageTitle = 'Page d\'administration | ';
    $pageHeader = $adminController->getAdminPageHeader();
    $pageContent = $adminController->getAdminPage();

}else {

    $controller = new PostController();
    $pageHeader = $controller->getRegularHeader();
    $pageContent = $controller->getHomePage();
}

include('view/templateView.php');


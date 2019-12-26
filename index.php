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

$controller = new PostController();
$adminUserController = new AdminUserController();

if(isset($_POST['nicknameInput']) AND trim($_POST['nicknameInput']) !== '' AND isset($_POST['passwordInput']) AND trim($_POST['passwordInput']) !== '' AND isset($_GET['newConnection']) AND $_GET['newConnection'] === '1')
{
    if($adminUserController->isConnectionValid($_POST['nicknameInput'], $_POST['passwordInput']))
    {
        $nickname = htmlspecialchars($_POST['nicknameInput']);
        $password = $_POST['passwordInput'];
        $_SESSION['nickname'] = $nickname;
        $_SESSION['password'] = $password;

        header('Location: index.php?connectionSuccessMessage=1');

    }else{

        header('Location: index.php?connectionFailureMessage=1');
    }

}

if(isset($_SESSION['nickname']) AND isset($_SESSION['password']))
{

    if($adminUserController->isUserAnAdmin($_SESSION['nickname'], $_SESSION['password'])) {

        if (isset($_POST['newPostTitle']) && trim($_POST['newPostTitle']) !== "" AND isset($_POST['newPostContent']) AND trim(strip_tags($_POST['newPostContent'])) !== "") {

            $adminController = new AdminPostController();
            $adminController->valideAddPost();

        } elseif (isset($_POST['newPostTitle']) OR isset($_POST['newPostContent'])) {

            $adminController = new AdminPostController();
            $adminController->failureAddPost();
        }

        if (isset($_POST['editPostTitle']) AND trim($_POST['editPostTitle']) !== "" AND isset($_POST['editPostContent']) AND trim($_POST['editPostContent']) !== "") {

            $adminController = new AdminPostController();
            $adminController->valideEditPost();

        } elseif (isset($_POST['editPostTitle']) OR isset($_POST['editPostContent'])) {

            $adminController = new AdminPostController();
            $adminController->failureEditPost();
        }

        if (isset($_GET['deletePostId']) AND trim($_GET['deletePostId']) !== "") {

            $adminController = new AdminPostController();
            $adminController->valideDeletePost();

        } elseif (isset($_GET['deletePostId'])) {

            $adminController = new AdminPostController();
            $adminController->failureDeletePost();
        }

        if (isset($_GET['deleteCommentId']) AND trim($_GET['deleteCommentId']) !== "") {

            $adminController = new AdminCommentController();
            $adminController->valideDeleteComment($_GET['deleteCommentId']);
        }
    }

    if (isset($_POST['newComment']) && trim($_POST['newComment']) !== "") {
        $adminController = new AdminCommentController();
        $adminController->valideAddComment($_GET['displayPost'], $_SESSION['nickname'], $_POST['newComment']);

    } elseif (isset($_POST['newComment'])) {
        $adminController = new AdminCommentController();
        $adminController->failureAddComment($_GET['displayPost']);
    }

    if (isset($_GET['displayPost']) AND isset($_GET['signalCommentId'])) {
        $adminController = new AdminCommentController();
        $adminController->valideSignalComment($_GET['displayPost'], $_GET['signalCommentId']);
    }

}

/* -------------------- PAGES TO DISPLAY -------------------- */

if(isset($_GET['displayPost']) AND trim($_GET['displayPost']) !== "" AND $controller->doesPostExist($_GET['displayPost']))
{
    $pageTitle = $controller->getPageTitle($_GET['displayPost']);
    $pageHeader = $controller->getRegularHeader();
    $pageContent = $controller->getPostPage($_GET['displayPost']);

    $commentsController = new CommentController();
    $commentsContent = $commentsController->getCommentsSection($_GET['displayPost']);

}elseif(isset($_GET['adminPage']) AND $_GET['adminPage'] === '1') {

    $adminController = new AdminPostController();
    $pageTitle = 'Page d\'administration | ';
    $pageHeader = $adminController->getAdminPageHeader();
    $pageContent = $adminController->getAdminPage();

}elseif(isset($_GET['postsPage']) AND $_GET['postsPage'] === '1') {

    $pageTitle = 'Tous les chapitres publiés | ';
    $pageHeader = $controller->getRegularHeader();
    $pageContent = $controller->getPostsPage();

}else {

    $pageHeader = $controller->getRegularHeader();
    $pageContent = $controller->getHomePage();
}

include('view/templateView.php');
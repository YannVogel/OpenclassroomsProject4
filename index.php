<?php
session_start();
require "vendor/autoload.php";

use Project\Controller\PostController;
use Project\Controller\CommentController;
use Project\Controller\AdminPostController;
use Project\Controller\AdminCommentController;
use Project\Controller\AdminUserController;
include('view/alertsView.php');

$myAdmin = new AdminUserController();
if(isset($_POST['nicknameInput']) AND isset($_POST['passwordInput']) AND $myAdmin->isConnectionValid($_POST['nicknameInput'], $_POST['passwordInput']))
{
    $nickname = htmlspecialchars($_POST['nicknameInput']);
    $password = $_POST['passwordInput'];
    $_SESSION['nickname'] = $nickname;
    $_SESSION['password'] = $password;
} elseif(isset($_POST['nicknameInput']) AND isset($_POST['passwordInput']) AND trim($_POST['nicknameInput']) !== "" AND  trim($_POST['passwordInput']) !== "") { ?>
    <div id="connectionUserFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Identifiants incorrects...
    </div>
<?php
}

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

}elseif(isset($_GET['adminPage']) AND $_GET['adminPage'] === '1') {

    require('view/adminView.php');

}else {
    require('view/indexView.php');
}
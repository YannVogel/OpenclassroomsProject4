<?php
session_start();
require "vendor/autoload.php";

use Project\Controller\PostController;
use Project\Controller\CommentController;
use Project\Controller\AdminPostController;
use Project\Controller\AdminCommentController;
use Project\Controller\AdminUserController;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/style.css" />
    <script src="https://cdn.tiny.cloud/1/eao0m8gx6g8dp0oieeo8wvkd3ut5slygyly5rgcyizps38du/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <title>Page d'administration</title>
</head>
<body>
<?php
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

}

if(isset($_POST['editPostTitle']) AND trim($_POST['editPostTitle']) !== "" AND isset($_POST['editPostContent']) AND trim($_POST['editPostContent']) !== "")
{
    $newPost->valideEditPost();

} elseif(isset($_POST['editPostTitle']) OR isset($_POST['editPostContent']))
{
    $newPost->failureEditPost();

}

if(isset($_GET['deletePostId']) AND trim($_GET['deletePostId']) !== "")
{
    $newPost->valideDeletePost();

} elseif (isset($_GET['deletePostId'])) {
    $newPost->failureDeletePost();

}


if(isset($_GET['displayPost']) AND trim($_GET['displayPost']) !== "") {

    require('view/postView.php');

}elseif(isset($_GET['adminPage']) AND $_GET['adminPage'] === '1') {

    require('view/adminView.php');

}else {
    require('view/indexView.php');
}
?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="public/js/Storage.js"></script>
<script src="public/js/ActiveTab.js"></script>
<script src="public/js/javascript.js"></script>
</body>
</html>
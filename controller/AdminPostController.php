<?php
namespace Project\Controller;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

class AdminPostController
{

    public function getAdminPageHeader()
    {
        ob_start();

        include('view/adminHeaderView.php');

        return ob_get_clean();
    }


    public function getAdminPage() {
        ob_start();

        include('view/adminView.php');

        return ob_get_clean();
    }

    public function valideAddPost() {

        $myPost = new PostEntity();
        $myPost->setPostTitle(htmlspecialchars($_POST['newPostTitle']));
        $myPost->setPostContent(($_POST['newPostContent']));

        $myAdmin = new PostManager();
        $myAdmin->addPost($myPost);

        header('Location: index.php?adminPage=1&newPostSuccessMessage=1');
    }

    public function failureAddPost() {

        header('Location: index.php?adminPage=1&newPostFailureMessage=1');
    }

    public function valideEditPost() {

        $myAdmin = new PostManager();
        $myAdmin->editPost($_GET['editPostId'], htmlspecialchars($_POST['editPostTitle']), $_POST['editPostContent']);

        header('Location: index.php?adminPage=1&editPostSuccessMessage=1');
    }

    public function failureEditPost() {

        header('Location: index.php?adminPage=1&editPostFailureMessage=1');
    }

    public function valideDeletePost() {

        $myAdmin = new PostManager();
        $myAdmin->deletePost($_GET['deletePostId']);

        header('Location: index.php?adminPage=1&deletePostSuccessMessage=1');
    }

    public function failureDeletePost() {

        header('Location: index.php?adminPage=1&deletePostFailureMessage=1');
    }
}




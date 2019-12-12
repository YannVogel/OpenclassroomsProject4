<?php


namespace Project\Controller;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;


class AdminPostController
{
    public function valideAddPost() {

        $myPost = new PostEntity();
        $myPost->setPostTitle(htmlspecialchars($_POST['newPostTitle']));
        $myPost->setPostContent(($_POST['newPostContent']));

        $myAdmin = new PostManager();
        $myAdmin->addPost($myPost);

        header('Location: index.php?newPostSuccessMessage=1');
    }

    public function failureAddPost() {

        header('Location: index.php?newPostFailureMessage=1');
    }

    public function valideEditPost() {

        $myAdmin = new PostManager();
        $myAdmin->editPost($_GET['editPostId'], htmlspecialchars($_POST['editPostTitle']), htmlspecialchars($_POST['editPostContent']));

        header('Location: index.php?editPostSuccessMessage=1');
    }

    public function failureEditPost() {

        header('Location: index.php?editPostFailureMessage=1');
    }

    public function valideDeletePost() {

        $myAdmin = new PostManager();
        $myAdmin->deletePost($_GET['deletePostId']);

        header('Location: index.php?deletePostSuccessMessage=1');
    }

    public function failureDeletePost() {

        header('Location: index.php?deletePostFailureMessage=1');
    }
}




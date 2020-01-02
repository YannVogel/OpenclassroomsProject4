<?php
namespace Project\Controller;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

/**
 * Class AdminPostController
 * @package Project\Controller
 * Controls the admin operations affecting the posts.
 */
class AdminPostController
{

    /**
     * @return false|string
     * Return the admin panel header.
     */
    public function getAdminPageHeader() {
        ob_start();

        include('view/adminHeaderView.php');

        return ob_get_clean();
    }


    /**
     * @return false|string
     * Return the admin panel page.
     */
    public function getAdminPage() {
        ob_start();

        include('view/adminView.php');

        return ob_get_clean();
    }

    /**
     * Set informations in order to add a new post to the database.
     */
    public function valideAddPost() {

        $myPost = new PostEntity();
        $myPost->setPostTitle(htmlspecialchars($_POST['newPostTitle']));
        $myPost->setPostContent(($_POST['newPostContent']));

        $myAdmin = new PostManager();
        $myAdmin->addPost($myPost);

        header('Location: index.php?adminPage=1&newPostSuccessMessage=1');
    }

    /**
     * Display an error message if a post couldn't be added to the database.
     */
    public function failureAddPost() {

        header('Location: index.php?adminPage=1&newPostFailureMessage=1');
    }

    /**
     * Set informations in order to edit a post in the database.
     */
    public function valideEditPost() {

        $myAdmin = new PostManager();
        $myAdmin->editPost($_GET['editPostId'], htmlspecialchars($_POST['editPostTitle']), $_POST['editPostContent']);

        header('Location: index.php?adminPage=1&editPostSuccessMessage=1');
    }

    /**
     * Display an error message if a post in the database couldn't be edited.
     */
    public function failureEditPost() {

        header('Location: index.php?adminPage=1&editPostFailureMessage=1');
    }

    /**
     * Set informations in order to delete a post from the database.
     */
    public function valideDeletePost() {

        $myAdmin = new PostManager();
        $myAdmin->deletePost($_GET['deletePostId']);

        header('Location: index.php?adminPage=1&deletePostSuccessMessage=1');
    }

    /**
     * Display an error message if a post couldn't be deleted from the database.
     */
    public function failureDeletePost() {

        header('Location: index.php?adminPage=1&deletePostFailureMessage=1');
    }
}




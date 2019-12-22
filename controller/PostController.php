<?php

namespace Project\Controller;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

/**
 * Class PostController
 * @package Project\Controller
 * Control the operations affecting the posts.
 */
class PostController
{

    /**
     * @param $postId
     * @return string
     * Return the title of the post matching $postId as the title of the displaying page.
     */
    public function getPageTitle($postId)
    {
        $postManager = new PostManager();
        $post = $postManager->getPost($postId);
        /** @var PostEntity $post */
        return $post->getPostTitle() . ' | ';
    }

    /**
     * @return false|string
     * Return the regular (non-admin) pages header.
     */
    public function getRegularHeader()
    {
        ob_start();

        include('view/headerView.php');

        return ob_get_clean();
    }

    /**
     * @return false|string
     * Return the home page.
     */
    public function getHomePage()
    {
        ob_start();
        $postManager = new PostManager();
        $lastPost = $postManager->getLastPost();

        include('view/indexView.php');

        return ob_get_clean();
    }

    /**
     * @param int $postId
     * @return false|string
     * Return a page displaying the post matching $postId
     */
    public function getPostPage(int $postId)
    {
        ob_start();
        $postManager = new PostManager();
        $post = $postManager->getPost($postId);

        include('view/postView.php');

        return ob_get_clean();

    }

    /**
     * @return false|string
     * Return the page displaying all the posts.
     */
    public function getPostsPage()
    {
        ob_start();
        $postManager = new PostManager();
        $posts = $postManager->getPosts();

        include('view/postsView.php');

        return ob_get_clean();
    }

    /**
     * @param $postId
     * @return mixed
     * Return the comments number of the post matching $postId.
     */
    public function getNumberOfComments($postId)
    {
        $postManager = new PostManager();

        return $postManager->numberOfComments($postId);

    }


    /**
     * @param $postId
     * @return bool
     * Return true if a post matching $postId exists, otherwise return false.
     */
    public function doesPostExist($postId)
    {
        $postManager = new PostManager();
        $post = $postManager->getPost($postId);
        if($post){return true;}

        return false;
    }


    /**
     * @param $postId
     * @return string
     * Return the first 1000 characters of the post matching $postId.
     */
    public function getPostIntro($postId) : string
    {
        $postManager = new PostManager();
        $post = $postManager->getPost($postId);
        /** @var PostEntity $post */
        return substr($post->getPostContent(), 0, 1000) . '...<br /><a class="float-right" href="index.php?displayPost=' . $post->getPostId() . '">Lire la suite...</a>';
    }

}
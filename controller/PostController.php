<?php

namespace Project\Controller;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

class PostController
{

    public function getPageTitle($postId)
    {
        $postManager = new PostManager();
        $post = $postManager->getPost($postId);
        /** @var PostEntity $post */
        return $post->getPostTitle() . ' | ';
    }

    public function getRegularHeader()
    {
        ob_start();

        include('view/headerView.php');

        return ob_get_clean();
    }

    /**
     * Permet de générer la page d'accueil
     *
     * @return false|string
     */
    public function getHomePage()
    {
        ob_start();
        $postManager = new PostManager();
        $lastPost = $postManager->getLastPost();

        include('view/indexView.php');

        return ob_get_clean();
    }

    public function getPostPage(int $postId)
    {
        ob_start();
        $postManager = new PostManager();
        $post = $postManager->getPost($postId);

        include('view/postView.php');

        return ob_get_clean();

    }

    public function getPostsPage()
    {
        ob_start();
        $postManager = new PostManager();
        $posts = $postManager->getPosts();

        include('view/postsView.php');

        return ob_get_clean();
    }
}
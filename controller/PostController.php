<?php

namespace Project\Controller;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

class PostController extends Controller
{
    /**
     * Permet de générer la page d'accueil
     *
     * @return false|string
     */
    public function getHome(){
        ob_start();
        $postManager = new PostManager();
        $data = $postManager->getPosts();

        $lastPost = $this->displayLastPost();

        include('view/indexView.php');

        return ob_get_clean();
    }

    public function displayPost(int $postId) {
        $postManager = new PostManager();
        $post = $postManager->getPost($postId);
        /** @var PostEntity $post */

    ?>
            <section class="container">
                <div class="row">
                    <div class="col col-12 text-center"><h2 class="h2"><?= $post->getPostTitle(); ?></h2> le <?= $post->getPostDate(); ?></div>
                </div>
                <div class="row">
                    <div class="col col-12"><?= $post->getPostContent(); ?></div>
                        <a class="col col-12 text-center" href="index.php">Retour à l'accueil.</a>

                </div>
            </section>

    <?php
    }

    public function displayPosts() {

            $postManager = new PostManager();
            $posts = $postManager->getPosts();
            /** @var PostEntity $post */
            foreach($posts as $post)
            {

                ?>
                <section class="container">
                <div class="row">
                    <div class="col col-12 text-center"><h2 class="h2"><?= $post->getPostTitle(); ?></h2> le <?= $post->getPostDate(); ?></div>
                </div>
                <div class="row">
                    <div class="col col-12"><?= $post->getPostIntro(); ?></div>
                </div>
                </section>
                <?php
          }


    }

    public function displayLastPost() {

        $postManager = new PostManager();
        return $postManager->getLastPost();

    }
}
<?php

namespace Project\Controller;

use Project\Model\Entity\PostEntity;
use Project\Model\Manager\PostManager;

class PostController
{
    public function home(){
        $postManager = new PostManager();
        $data = $postManager->getPosts();

        /** @var PostEntity $post */
        foreach ($data as $post){
            echo $post->getPostContent();
        }
    }

    public function displayPost($postId) {
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

    public function displayLastPost() {
        $postManager = new PostManager();
        $lastPost = $postManager->getLastPost();
        /** @var PostEntity $lastPost */

?>
        <section class="container">
            <div class="col col-12 text-center"><h2 class="h2"><?= $lastPost->getPostTitle(); ?></h2> le <?= $lastPost->getPostDate(); ?></div>
            <div class="col"><?= $lastPost->getPostIntro(); ?></div>
        </section>
<?php

    }
}
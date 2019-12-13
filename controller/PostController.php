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


    public function displayLastPost() {
        $postManager = new PostManager();
        $lastPost = $postManager->getLastPost();

?>
        <section class="container">
            <div class="col col-12 text-center"><h2 class=""><?= $lastPost['post_title']; ?></h2> le <?= $lastPost['post_date_fr']; ?></div>
            <div class="col"><?= $lastPost['post_content']; ?></div>
        </section>
<?php

    }
}
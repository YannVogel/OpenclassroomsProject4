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
}
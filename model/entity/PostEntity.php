<?php

namespace Project\Model\Entity;

class PostEntity
{
    private $post_id, $post_title, $post_content, $post_date_fr;

    /**
     * @return mixed
     */
    public function getPostId() : int
    {
        return $this->post_id;
    }

    /**
     * @param mixed $post_id
     * @return PostEntity
     */
    public function setPostId(int $post_id)
    {
        $this->post_id = $post_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostTitle() : string
    {
        return $this->post_title;
    }

    /**
     * @param mixed $post_title
     * @return PostEntity
     */
    public function setPostTitle(string $post_title)
    {
        $this->post_title = $post_title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostContent() : string
    {
        return $this->post_content;
    }

    /**
     * @param mixed $post_content
     * @return PostEntity
     */
    public function setPostContent(string $post_content)
    {
        $this->post_content = $post_content;
        return $this;
    }

    public function getPostIntro() : string
    {
        return substr(strip_tags($this->post_content), 0, 500) . '<a href="index.php?displayPost=' . $this->getPostId() . '">...lire la suite</a>';
    }

    /**
     * @return mixed
     */
    public function getPostDate()
    {
        return $this->post_date_fr;
    }

    /**
     * @param mixed $post_date
     * @return PostEntity
     */
    public function setPostDate($post_date_fr)
    {
        $this->post_date_fr = $post_date_fr;
        return $this;
    }

}
<?php

namespace Project\Model\Entity;

/**
 * Class PostEntity
 * @package Project\Model\Entity
 * Manages posts in database as PHP objects.
 */
class PostEntity
{
    /**
     * @var
     * Contains the unique ID of a post.
     */
    private $post_id;
    /**
     * @var
     * Contains the title of a post.
     */
    private $post_title;
    /**
     * @var
     * Contains the content of a post.
     */
    private $post_content;
    /**
     * @var
     * Contains the formatted date (french format) of a post when it's published.
     */
    private $post_date_fr;


    /**
     * @return int
     */
    public function getPostId() : int
    {
        return $this->post_id;
    }


    /**
     * @param int $post_id
     * @return $this
     */
    public function setPostId(int $post_id)
    {
        $this->post_id = $post_id;
        return $this;
    }


    /**
     * @return string
     */
    public function getPostTitle() : string
    {
        return $this->post_title;
    }


    /**
     * @param string $post_title
     * @return $this
     */
    public function setPostTitle(string $post_title)
    {
        $this->post_title = $post_title;
        return $this;
    }


    /**
     * @return string
     */
    public function getPostContent() : string
    {
        return $this->post_content;
    }


    /**
     * @param string $post_content
     * @return $this
     */
    public function setPostContent(string $post_content)
    {
        $this->post_content = $post_content;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getPostDate()
    {
        return $this->post_date_fr;
    }


    /**
     * @param $post_date_fr
     * @return $this
     */
    public function setPostDate($post_date_fr)
    {
        $this->post_date_fr = $post_date_fr;
        return $this;
    }
}
<?php
namespace Project\Model\Entity;

/**
 * Class CommentEntity
 * @package Project\Model\Entity
 * Manage comments in database as PHP objects.
 */
class CommentEntity
{
    /**
     * @var int
     * Contains the unique ID of a comment.
     */
    private $comment_id;
    /**
     * @var int
     * Contains the related post unique ID of a comment.
     */
    private $related_post_id;
    /**
     * @var string
     * Contains the author nickname of a comment.
     */
    private $comment_author;
    /**
     * @var string
     * Contains the content of a comment.
     */
    private $comment_content;
    /**
     * @var
     * Contains the formatted date (french format) of a comment when it's published.
     */
    private $comment_date_fr;
    /**
     * @var int
     * Contains an integer representing the number of times a comment has been reported for moderation.
     */
    private $comment_moderation;


    /**
     * @return int
     */
    public function getCommentId() : int
    {
        return $this->comment_id;
    }


    /**
     * @param int $comment_id
     * @return $this
     */
    public function setCommentId(int $comment_id)
    {
        $this->comment_id = $comment_id;
        return $this;
    }


    /**
     * @return int
     */
    public function getRelatedPostId() : int
    {
        return $this->related_post_id;
    }


    /**
     * @param int $related_post_id
     * @return $this
     */
    public function setRelatedPostId(int $related_post_id)
    {
        $this->related_post_id = $related_post_id;
        return $this;
    }


    /**
     * @return string
     */
    public function getCommentAuthor() : string
    {
        return $this->comment_author;
    }


    /**
     * @param string $comment_author
     * @return $this
     */
    public function setCommentAuthor(string $comment_author)
    {
        $this->comment_author = $comment_author;
        return $this;
    }


    /**
     * @return string
     */
    public function getCommentContent() : string
    {
        return $this->comment_content;
    }


    /**
     * @param string $comment_content
     * @return $this
     */
    public function setCommentContent(string $comment_content)
    {
        $this->comment_content = $comment_content;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getCommentDate()
    {
        return $this->comment_date_fr;
    }


    /**
     * @param $comment_date
     * @return $this
     */
    public function setCommentDate($comment_date)
    {
        $this->comment_date = $comment_date;
        return $this;
    }


    /**
     * @return int
     */
    public function getCommentModeration() : int
    {
        return $this->comment_moderation;
    }


    /**
     * @param int $comment_moderation
     * @return $this
     */
    public function setCommentModeration(int $comment_moderation)
    {
        $this->comment_moderation = $comment_moderation;
        return $this;
    }

}
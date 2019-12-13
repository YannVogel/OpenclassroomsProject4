<?php
namespace Project\Model\Entity;

class CommentEntity
{
    private $comment_id, $related_post_id, $comment_author, $commment_content, $comment_date, $comment_moderation;

    /**
     * @return mixed
     */
    public function getCommentId() : int
    {
        return $this->comment_id;
    }

    /**
     * @param mixed $comment_id
     * @return CommentEntity
     */
    public function setCommentId(int $comment_id)
    {
        $this->comment_id = $comment_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelatedPostId() : int
    {
        return $this->related_post_id;
    }

    /**
     * @param mixed $related_post_id
     * @return CommentEntity
     */
    public function setRelatedPostId(int $related_post_id)
    {
        $this->related_post_id = $related_post_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommentAuthor() : string
    {
        return $this->comment_author;
    }

    /**
     * @param mixed $comment_author
     * @return CommentEntity
     */
    public function setCommentAuthor(string $comment_author)
    {
        $this->comment_author = $comment_author;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommmentContent() : string
    {
        return $this->commment_content;
    }

    /**
     * @param mixed $commment_content
     * @return CommentEntity
     */
    public function setCommmentContent(string $commment_content)
    {
        $this->commment_content = $commment_content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommentDate()
    {
        return $this->comment_date;
    }

    /**
     * @param mixed $comment_date
     * @return CommentEntity
     */
    public function setCommentDate($comment_date)
    {
        $this->comment_date = $comment_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommentModeration() : int
    {
        return $this->comment_moderation;
    }

    /**
     * @param mixed $comment_moderation
     * @return CommentEntity
     */
    public function setCommentModeration(int $comment_moderation)
    {
        $this->comment_moderation = $comment_moderation;
        return $this;
    }

}
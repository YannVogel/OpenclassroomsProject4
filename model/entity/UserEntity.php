<?php
namespace Project\Model\Entity;

/**
 * Class UserEntity
 * @package Project\Model\Entity
 * Manage users in database as PHP objects.
 */
class UserEntity
{
    /**
     * @var
     * Contains the unique ID of an user.
     */
    private $user_id;
    /**
     * @var
     * Contains the unique nickname of an user.
     */
    private $user_nickname;
    /**
     * @var
     * Contains the hashed password of an user.
     */
    private $user_password;
    /**
     * @var
     * Contains the user inscription date.
     */
    private $user_inscription_date;
    /**
     * @var
     * Contains an integer showing if an user is an admin (1) or not (0).
     */
    private $user_admin_rights;


    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->user_id;
    }


    /**
     * @param int $user_id
     * @return $this
     */
    public function setUserId(int $user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }


    /**
     * @return string
     */
    public function getUserNickname() : string
    {
        return $this->user_nickname;
    }


    /**
     * @param string $user_nickname
     * @return $this
     */
    public function setUserNickname(string $user_nickname)
    {
        $this->user_nickname = $user_nickname;
        return $this;
    }


    /**
     * @return string
     */
    public function getUserPassword() : string
    {
        return $this->user_password;
    }


    /**
     * @param string $user_password
     * @return $this
     */
    public function setUserPassword(string $user_password)
    {
        $this->user_password = $user_password;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getUserInscriptionDate()
    {
        return $this->user_inscription_date;
    }


    /**
     * @param $user_inscription_date
     * @return $this
     */
    public function setUserInscriptionDate($user_inscription_date)
    {
        $this->user_inscription_date = $user_inscription_date;
        return $this;
    }


    /**
     * @return bool
     */
    public function getUserAdminRights() : bool
    {
        return $this->user_admin_rights;
    }


    /**
     * @param bool $user_admin_rights
     * @return $this
     */
    public function setUserAdminRights(bool $user_admin_rights)
    {
        $this->user_admin_rights = $user_admin_rights;
        return $this;
    }


}
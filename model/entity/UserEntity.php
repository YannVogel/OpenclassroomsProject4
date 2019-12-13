<?php
namespace Project\Model\Entity;

class UserEntity
{
    private $user_id, $user_nickname, $user_password, $user_inscription_date, $user_admin_rights;

    /**
     * @return mixed
     */
    public function getUserId() : int
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     * @return UserEntity
     */
    public function setUserId(int $user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserNickname() : string
    {
        return $this->user_nickname;
    }

    /**
     * @param mixed $user_nickname
     * @return UserEntity
     */
    public function setUserNickname(string $user_nickname)
    {
        $this->user_nickname = $user_nickname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserPassword() : string
    {
        return $this->user_password;
    }

    /**
     * @param mixed $user_password
     * @return UserEntity
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
     * @param mixed $user_inscription_date
     * @return UserEntity
     */
    public function setUserInscriptionDate($user_inscription_date)
    {
        $this->user_inscription_date = $user_inscription_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserAdminRights() : bool
    {
        return $this->user_admin_rights;
    }

    /**
     * @param mixed $user_admin_rights
     * @return UserEntity
     */
    public function setUserAdminRights(bool $user_admin_rights)
    {
        $this->user_admin_rights = $user_admin_rights;
        return $this;
    }


}
<?php

namespace Project\Model\Manager;

use Project\Model\Entity\UserEntity;
use Project\Model\Manager\Manager;

/**
 * Class UserManager
 * @package Project\Model\Manager
 * Manage users in database.
 */
class UserManager extends Manager
{
    /**
     * @return array
     * Return all the users in the database.
     */
    public function getUsers()
    {
        $db = $this->databaseConnect();

        $users = $db->prepare('SELECT user_id, user_nickname, user_password, DATE_FORMAT(user_inscription_date, \'%d/%m/%y - %Hh%imin%ss\') AS user_inscription_date_fr, user_admin_rights FROM users_table ORDER BY user_id DESC');
        $users->execute();

        return $users->fetchAll(\PDO::FETCH_CLASS, UserEntity::class);
    }

    /**
     * @param $nickname
     * @return mixed
     * Return the user matching $nickname.
     */
    public function getUser($nickname)
    {
        $db = $this->databaseConnect();

        $user = $db->prepare('SELECT user_id, user_nickname, user_password, DATE_FORMAT(user_inscription_date, \'%d/%m/%y - %Hh%imin%ss\') AS user_inscription_date_fr, user_admin_rights FROM users_table WHERE user_nickname=?');
        $user->execute(array($nickname));

        return $user->fetch();
    }

    /**
     * @param UserEntity $user
     * Add a user to the database.
     */
    public function addUser(UserEntity $user)
    {
        $db = $this->databaseConnect();
        $req = $db->prepare('INSERT INTO users_table(user_nickname, user_password, user_inscription_date) VALUES(?, ?, NOW())');
        $req->execute(array($user->getUserNickname(), password_hash($user->getUserPassword(), PASSWORD_DEFAULT)));
    }
}
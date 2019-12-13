<?php

namespace Project\Model\Manager;

use Project\Model\Entity\UserEntity;
use Project\Model\Manager\Manager;

class UserManager extends Manager
{
    public function getUsers()
    {
        $db = $this->databaseConnect();

        $users = $db->prepare('SELECT user_id, user_nickname, user_password, DATE_FORMAT(user_inscription_date, \'%d/%m/%y - %Hh%imin%ss\') AS user_inscription_date_fr, user_admin_rights FROM users_table ORDER BY user_id DESC');
        $users->execute();

        return $users->fetchAll(\PDO::FETCH_CLASS, UserEntity::class);
    }

    public function addUser(UserEntity $user)
    {
        $db = $this->databaseConnect();
        $req = $db->prepare('INSERT INTO users_table(user_nickname, user_password, user_inscription_date) VALUES(?, ?, NOW())');
        $req->execute(array($user->getUserNickname(), $user->getUserPassword()));
    }
}
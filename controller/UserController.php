<?php

namespace Project\Controller;

use Project\Model\Entity\UserEntity;
use Project\Model\Manager\UserManager;

class UserController
{
    public function home(){
        $userManager = new UserManager();
        $data = $userManager->getUsers();

        /** @var UserEntity  $user */
        foreach ($data as $user){
            echo $user->getUserNickname();
        }
    }
}
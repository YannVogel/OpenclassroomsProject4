<?php
namespace Project\Controller;

use Project\Model\Entity\UserEntity;
use Project\Model\Manager\UserManager;

class AdminUserController
{
    public function valideAddUser()
    {
        $user = new UserEntity();
        $user->setUserNickname(htmlspecialchars($_POST['nicknameInscriptionInput']));
        $user->setUserPassword($_POST['passwordInscriptionInput']);

        $myAdmin = new UserManager();
        $myAdmin->addUser($user);

        header('Location: index.php?newUserSuccessMessage=1');
    }

    public function failureAddUser() {

        header('Location: index.php?newUserFailureMessage=1');
    }

    public function isNicknameAvailable(string $nickname){
        $userManager = new UserManager();
        $data = $userManager->getUsers();

        /** @var UserEntity  $user */
        foreach ($data as $user){
            if(strtolower($nickname) === strtolower($user->getUserNickname())){
                return 0;
            }
        }
        return 1;
    }

    public function doPasswordsMatch(string $password, string $confirmationPassword) {
        if ($password === $confirmationPassword) {
            return 1;
        }
        return 0;
    }

    public function isConnectionValid(string $nickname, string $password) {
        $userManager = new UserManager();
        $data = $userManager->getUsers();

        /** @var UserEntity  $user */
        foreach ($data as $user){
            if(strtolower($nickname) === strtolower($user->getUserNickname()) AND password_verify($password, $user->getUserPassword())) {
                return 1;
            }
        }
        return 0;
    }

    public function isUserAnAdmin(string $nickname) {
        $userManager = new UserManager();
        $user = $userManager->getUser($nickname);

        return $user['user_admin_rights'];
    }
}
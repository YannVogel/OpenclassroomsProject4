<?php
namespace Project\Controller;

use Project\Model\Entity\UserEntity;
use Project\Model\Manager\UserManager;

class AdminUserController
{

    private const NICKNAME_NOT_AVAILABLE = "Ce pseudonyme n'est pas disponible.";
    private const NICKNAME_NOT_CORRECT = "Le format du pseudonyme est incorrect (lettres et chiffres uniquement).";
    private const PASSWORDS_DONT_MATCH = "Les mots de passe entrés ne correspondent pas.";
    private const INFORMATIONS_ARE_MISSING = "Merci de remplir toutes les données du formulaire afin de valider votre inscription.";


    public function valideAddUser()
    {
        $user = new UserEntity();
        $user->setUserNickname(htmlspecialchars($_POST['nicknameInscriptionInput']));
        $user->setUserPassword($_POST['passwordInscriptionInput']);

        $myAdmin = new UserManager();
        $myAdmin->addUser($user);

        header('Location: index.php?newUserSuccessMessage=1');
    }

    public function failureAddUser(int $errorNumber)
    {
        header('Location: index.php?newUserFailureMessage=' . $errorNumber);
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
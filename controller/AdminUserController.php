<?php
namespace Project\Controller;

use Project\Model\Entity\UserEntity;
use Project\Model\Manager\UserManager;

/**
 * Class AdminUserController
 * @package Project\Controller
 * Control the admin operations affecting the users.
 */
class AdminUserController
{

    /**
     * @var string Contains the error message displaying if the chosen nickname during inscription is already assigned.
     */
    public const NICKNAME_NOT_AVAILABLE = "Ce pseudonyme n'est pas disponible.";
    /**
     * @var string Contains the error message displaying if the chosen nickname during inscription doesn't match the right format.
     */
    public const NICKNAME_NOT_CORRECT = "Le format du pseudonyme est incorrect (lettres et chiffres uniquement).";
    /**
     * @var string Contains the error message displaying if the passwords written during inscription don't match.
     */
    public const PASSWORDS_DONT_MATCH = "Les mots de passe entrés ne correspondent pas.";
    /**
     * @var string Contains the error message displaying if informations are missing during inscription.
     */
    public const INFORMATIONS_ARE_MISSING = "Merci de remplir toutes les données du formulaire afin de valider votre inscription.";


    /**
     * Set informations in order to add a new user to the database.
     */
    public function valideAddUser()
    {
        $user = new UserEntity();
        $user->setUserNickname(htmlspecialchars($_POST['nicknameInscriptionInput']));
        $user->setUserPassword($_POST['passwordInscriptionInput']);

        $myAdmin = new UserManager();
        $myAdmin->addUser($user);

        header('Location: index.php?newUserSuccessMessage=1');
    }

    /**
     * @param int $errorNumber
     * Display various error messages if an user couldn't be added to the database.
     * Error messages depend on $errorNumber (1, 2, 3 or 4).
     * 1: NICKNAME_NOT_AVAILABLE ;
     * 2: NICKNAME_NOT_CORRECT ;
     * 3: PASSWORDS_DONT_MATCH ;
     * 4: INFORMATIONS_ARE_MISSING.
     */
    public function failureAddUser(int $errorNumber)
    {
        header('Location: index.php?newUserFailureMessage=' . $errorNumber);
    }

    /**
     * @param string $nickname
     * @return int
     * Return true if a nickname matching $nickname exists, otherwise return false.
     */
    public function isNicknameAvailable(string $nickname){
        $userManager = new UserManager();
        $data = $userManager->getUsers();

        /** @var UserEntity  $user */
        foreach ($data as $user){
            if(strtolower($nickname) === strtolower($user->getUserNickname())){
                return false;
            }
        }
        return true;
    }

    /**
     * @param string $password
     * @param string $confirmationPassword
     * @return int
     * Return true if a password matches its confirmation, otherwise return false.
     */
    public function doPasswordsMatch(string $password, string $confirmationPassword) {
        if ($password === $confirmationPassword) {
            return true;
        }
        return false;
    }

    /**
     * @param string $nickname
     * @param string $password
     * @return int
     * Return true if the connection is valid, otherwise return false.
     * The connection is valid only if $nickname and $password match the nickname and password of a registered user.
     */
    public function isConnectionValid(string $nickname, string $password) {
        $userManager = new UserManager();
        $data = $userManager->getUsers();

        /** @var UserEntity  $user */
        foreach ($data as $user){
            if(strtolower($nickname) === strtolower($user->getUserNickname()) AND password_verify($password, $user->getUserPassword())) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param string $nickname
     * @param string $password
     * @return mixed
     * First, verify if the connection is valid (nickname & password must match).
     * Return true if the user matching $nickname is an admin, otherwise return false.
     * The user is an admin only if his user_admin_rights are set to '1'.
     */
    public function isUserAnAdmin(string $nickname, string $password)
    {
        if($this->isConnectionValid($nickname, $password))
        {
            $userManager = new UserManager();
            $user = $userManager->getUser($nickname);

            return $user['user_admin_rights'];
        }

        return false;

    }
}
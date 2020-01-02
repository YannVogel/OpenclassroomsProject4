<?php


namespace Project\Controller;

use Project\Controller\AdminUserController;


/**
 * Class AuthController
 * @package Project\Controller
 * Controls the operations related to users connections.
 */
class AuthController
{
    /**
     * @var string Contains a regex to secure and verify the new user nickname input.
     */
    private const REGEX = "#^[a-z]+[a-z1-9éèçëïüÿà_-]*[a-z1-9éèçëïüÿà]$#i";

    /**
     * @param $nickname
     * @param $password
     * @param $passwordConfirm
     * Authorizes a new inscription if the controls are respected, otherwise prevents it by displaying an error.
     */
    public function newUserInscription($nickname, $password, $passwordConfirm) {

        $control1 = isset($nickname);
        $control2 = isset($password);
        $control3 = isset($passwordConfirm);
        $control4 = trim($nickname) !== "";
        $control5 = trim($password) !== "";
        $control6 = trim($passwordConfirm) !== "";
        $controller = new AdminUserController();

        if($control1 AND $control2 AND $control3 AND $control4 AND $control5 AND $control6)
        {
            if (!$controller->isNicknameAvailable($nickname)) {

                $controller->failureAddUser(1);

            } elseif (!preg_match(self::REGEX, $nickname)) {

                $controller->failureAddUser(2);

            } elseif (!$controller->doPasswordsMatch($password, $passwordConfirm)) {

                $controller->failureAddUser(3);

            }else {
                $controller->valideAddUser();
            }

        }else {

            $controller->failureAddUser(4);
        }
    }

    /**
     * @param $nickname
     * @param $password
     * Authorizes a connection if its valid, otherwise prevents it by displaying an error.
     */
    public function userConnection($nickname, $password) {

        $controller = new AdminUserController();

        if($controller->isConnectionValid($nickname, $password))
        {
            $_SESSION['nickname'] = $nickname;
            $_SESSION['password'] = $password;

            header('Location: index.php?connectionSuccessMessage=1');

        }else {
            header('Location: index.php?connectionFailureMessage=1');
        }
    }

    /**
     * Logs out an user.
     */
    public function userLogout() {
        session_destroy();
        header('Location: index.php');
    }
}
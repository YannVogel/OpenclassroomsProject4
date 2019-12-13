<?php
/* nicknameInscriptionInput
 * passwordInscriptionInput
 * passwordInscriptionConfirmationInput
 */
require "vendor/autoload.php";

use Project\Controller\AdminUserController;

$regex = "#^[a-z]+[a-z1-9éèçëïüÿà_-]*[a-z1-9éèçëïüÿà]$#i";
$req = new AdminUserController();

$confirmation1 = isset($_POST['nicknameInscriptionInput']);
$confirmation2 = isset($_POST['passwordInscriptionInput']);
$confirmation3 = isset($_POST['passwordInscriptionConfirmationInput']);
$confirmation4 = trim($_POST['nicknameInscriptionInput']) !== "";
$confirmation5 = trim($_POST['passwordInscriptionInput']) !== "";
$confirmation6 = trim($_POST['passwordInscriptionConfirmationInput']) !== "";


if( $confirmation1 AND $confirmation2 AND $confirmation3 AND $confirmation4 AND $confirmation5 AND $confirmation6)
{
    if (!$req->isNicknameAvailable($_POST['nicknameInscriptionInput'])) {

        echo 'Ce pseudonyme n\'est pas disponible !';
        $req->failureAddUser();

    } elseif (!preg_match($regex, $_POST['nicknameInscriptionInput'])) {

        echo 'Le format du pseudo ' . $_POST['nicknameInscriptionInput'] . ' n\'est pas accepté';
        $req->failureAddUser();

    } elseif (!$req->doPasswordsMatch($_POST['passwordInscriptionInput'], $_POST['passwordInscriptionConfirmationInput'])) {

        echo 'Les mdp entrés ne correspondent pas !';
        $req->failureAddUser();

    }else {
        $req->valideAddUser();
    }

}else {
    echo 'Merci de remplir toutes les données du formulaire afin de valider votre inscription';
    $req->failureAddUser();
}
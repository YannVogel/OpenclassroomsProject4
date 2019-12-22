<?php
use Project\Controller\AdminUserController;

if (isset($_GET['newUserSuccessMessage']) AND $_GET['newUserSuccessMessage'] === '1')
{
    ?>
    <div id="newUserSuccessMessage" class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Réussite !</strong> Votre profil a bien été créé ! Vous pouvez à présent vous connecter.
    </div>
    <?php
}



if(isset($_GET['newUserFailureMessage']))
{
    ?>
    <div id="newUserFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong>
        <?php
        if($_GET['newUserFailureMessage'] === '1'){echo AdminUserController::NICKNAME_NOT_AVAILABLE;}
        elseif($_GET['newUserFailureMessage'] === '2'){echo AdminUserController::NICKNAME_NOT_CORRECT;}
        elseif($_GET['newUserFailureMessage'] === '3'){echo AdminUserController::PASSWORDS_DONT_MATCH;}
        elseif($_GET['newUserFailureMessage'] === '4'){echo AdminUserController::INFORMATIONS_ARE_MISSING;}
        else{echo "Une erreur inconnue s'est produite.";}
        ?>
    </div>
    <?php
}


if (isset($_GET['newPostSuccessMessage']) AND $_GET['newPostSuccessMessage'] === '1')
{
    ?>
    <div id="newPostSuccessMessage" class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Réussite !</strong> Le billet a bien été publié !
    </div>
    <?php
}



if(isset($_GET['newPostFailureMessage']) AND $_GET['newPostFailureMessage'] === '1')
{
    ?>
    <div id="newPostFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Le billet n'a pas pu être publié !
    </div>
    <?php
}

if (isset($_GET['editPostSuccessMessage']) AND $_GET['editPostSuccessMessage'] === '1')
{
    ?>
    <div id="editPostSuccessMessage" class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Réussite !</strong> Le billet a bien été édité !
    </div>
    <?php
}

if(isset($_GET['editPostFailureMessage']) AND $_GET['editPostFailureMessage'] === '1')
{
    ?>
    <div id="editPostFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Le billet n'a pas pu être édité !
    </div>
    <?php
}

if (isset($_GET['deletePostSuccessMessage']) AND $_GET['deletePostSuccessMessage'] === '1')
{
    ?>
    <div id="deletePostSuccessMessage" class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Réussite !</strong> Le billet a bien été supprimé !
    </div>
    <?php
}



if(isset($_GET['deletePostFailureMessage']) AND $_GET['deletePostFailureMessage'] === '1')
{
    ?>
    <div id="deletePostFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Le billet n'a pas pu être supprimé !
    </div>
    <?php
}

if(isset($_GET['newCommentSuccessMessage']) AND $_GET['newCommentSuccessMessage'] === '1')
{
    ?>
    <div id="newCommentSuccessMessage" class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Réussite !</strong> Votre commentaire a bien été posté !
    </div>
    <?php
}

if(isset($_GET['newCommentFailureMessage']) AND $_GET['newCommentFailureMessage'] === '1')
{
    ?>
    <div id="newCommentFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Votre commentaire n'a pas pu être publié...
    </div>
    <?php
}

if(isset($_GET['signalCommentSuccessMessage']) AND $_GET['signalCommentSuccessMessage'] === '1')
{
    ?>
    <div id="signalCommentSuccessMessage" class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Réussite !</strong> Le commentaire a bien été signalé. Merci !
    </div>
    <?php
}

if(isset($_GET['deleteCommentSuccessMessage']) AND $_GET['deleteCommentSuccessMessage'] === '1')
{
    ?>
    <div id="deleteCommentSuccessMessage" class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Réussite !</strong> Le commentaire a bien été supprimé !
    </div>
    <?php
}

if(isset($_GET['connectionSuccessMessage']) AND $_GET['connectionSuccessMessage'] === '1')
{
    ?>
    <div id="connectionSuccessMessage" class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        Bon retour sur mon site <strong><?= $_SESSION['nickname'] ?></strong> !
    </div>
    <?php
}

if(isset($_GET['connectionFailureMessage']) AND $_GET['connectionFailureMessage'] === '1')
{
    ?>
    <div id="connectionFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Identifiants incorrects...
    </div>
    <?php
}
<?php
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



if(isset($_GET['newUserFailureMessage']) AND $_GET['newUserFailureMessage'] === '1')
{
    ?>
    <div id="newUserFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Une erreur est survenue durant la création de votre profil...
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
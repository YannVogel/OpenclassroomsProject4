<?php
if (isset($_GET['newPostSuccessMessage']) AND $_GET['newPostSuccessMessage'] === '1')
{?>
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
{ ?>
    <div id="newPostFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Le billet n'a pas pu être publié !
    </div>
<?php
}
?>

<!-- Ici se trouve le code pour ajouter un nouveau billet -->

<form action="controller/createPost.php" class="container" method="post">
    <div class="form-group">
        <label for="newPostTitle">Titre du billet : </label>
        <input id="newPostTitle" name="newPostTitle" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="newPostContent">Contenu du billet : </label>
        <textarea id="newPostContent" name="newPostContent" class="form-control" required>Votre texte</textarea>
    </div>
    <input type="submit" value="Valider" />
</form>











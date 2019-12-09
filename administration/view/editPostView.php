<?php
if (isset($_GET['editPostSuccessMessage']) AND $_GET['editPostSuccessMessage'] === '1')
{?>
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
{ ?>
    <div id="editPostFailureMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Fermer</span>
        </button>
        <strong>Erreur !</strong> Le billet n'a pas pu être édité !
    </div>
    <?php
}

?>

<!-- Ici se trouve le code pour modifier un billet existant -->
<?php
if(!isset($_GET['postId'])) {
    $myAdmin = new AdminPostManager();
    $posts = $myAdmin->getPosts();

    while ($data = $posts->fetch()) {
        ?>
        <h2>
            <a class="p2Active" href="controller/editPost.php?postId=<?= $data['post_id'] ?>"><?= $data['post_title'] ?></a>
        </h2>
        <?php
    }
    $posts->closeCursor();
}elseif(isset($_GET['postId']) && $_GET['postId'] > 0) {
    ?>

    <form action="../controller/editPost.php?postId=<?= $_GET['postId'] ?>" class="container" method="post">
        <div class="form-group">
            <label for="editPostTitle">Titre du billet : </label>
            <input id="editPostTitle" name="editPostTitle" type="text" class="form-control"
                   value="<?= $post['post_title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="editPostContent">Contenu du billet : </label>
            <textarea id="editPostContent" name="editPostContent" class="form-control" required><?= $post['post_content'] ?></textarea>
        </div>
        <input type="submit" value="Modifier"/>
        <button id="previousButton">Précédent</button>
    </form>

    <?php
}
?>

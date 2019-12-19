<?php
use Project\Model\Entity\CommentEntity;
use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();
?>

<section class="container">
<?php
//Si l'utilisateur est connecté, afficher module de post de commentaires
if(isset($_SESSION['nickname']) AND isset($_SESSION['password'])) {

        include('addCommentView.php');

    } else   //Sinon, afficher proposition de se connecter
    {
    ?>
        <div class="col col-12 text-center">Vous devez vous <a data-toggle="modal" href="#connectionForm">connecter</a> pour publier un commentaire.</div>
<?php
    }

?>

<?php

if($comments) {

//Afficher commentaires
    /** @var CommentEntity $comment */
    foreach ($comments as $comment) { ?>

        <div class="col col-12 text-center"><strong><?= $comment->getCommentAuthor() ?></strong> a posté un commentaire
            le <?= $comment->getCommentDate() ?> <a href="index.php?displayPost=<?= $_GET['displayPost'] ?>&signalComment=<?= $comment->getCommentId() ?>"><span title="Signaler ce commentaire" class="fa fa-exclamation-triangle float-right" style="color:red"></span></a></div>
        <div class="col col-12"><?= $comment->getCommentContent() ?></div>

        <?php
    }
}else
{
    echo '<div>Il n\'y pas encore de commentaire posté ici...</div>';
}
?>
        </section>

<?php
use Project\Model\Entity\CommentEntity;
use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();
?>

<section class="container">

<?php

if($comments) {

//Afficher commentaires
    /** @var CommentEntity $comment */
    foreach ($comments as $comment) { ?>

        <div class="col col-12 text-center"><strong><?= $comment->getCommentAuthor() ?></strong> a posté un commentaire
            le <?= $comment->getCommentDate() ?>
            <?php
            if(isset($_SESSION['nickname']) AND isset($_SESSION['password'])) {
                if($comment->getCommentAuthor() !== $_SESSION['nickname']) {
                    ?>
                    <a href="index.php?displayPost=<?= $_GET['displayPost'] ?>&signalCommentId=<?= $comment->getCommentId() ?>"><span
                            title="Signaler ce commentaire" class="fa fa-exclamation-triangle" style="color:red"></span></a>
                    <?php
                }else
                {
                ?>
                    <span class="text-info">(C'est vous qui avez posté ce commentaire !)</span>
                <?php
                }
                if($myAdmin->isUserAnAdmin($_SESSION['nickname']))
                {
                ?>
                    <a href="index.php?adminPage=1"><span title="Accéder au panneau d'administration" class="fa fa-lock" style="color:blue"></span></a>
            <?php
                }
            }
            ?>
            </div>
        <div class="col col-12"><?= $comment->getCommentContent() ?></div>

        <?php
    }
}else
{
    ?>
    <div class="col col-12 text-center">Soyez le premier à poster un commentaire !</div>';
    <?php
}

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
        </section>

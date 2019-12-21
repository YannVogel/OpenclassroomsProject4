<?php
use Project\Model\Entity\CommentEntity;
use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();
?>

<section class="container mt-4 mb-4 pb-2 border bgColor-commentsSection">
    <div class="row">
        <div class="col col-12 text-center font-weight-bold mb-2 bgColor-headers">Espace commentaires :</div>
    </div>
<?php

if($comments) {
$hideFirstLine = true;
//Afficher commentaires
    /** @var CommentEntity $comment */
    foreach ($comments as $comment) {
        if(!$hideFirstLine)
{
    ?>
    <div class="myCommentLine"></div>
    <?php
}?>

<div class="col col-12">
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
        <div class="col col-12 bgColor-commentMessages"><?= $comment->getCommentContent() ?></div>
</div>

        <?php
        $hideFirstLine = false;
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
    <div class="myLine"></div>
    <div class="col col-12 text-center">Vous devez vous <a data-toggle="modal" href="#connectionForm">connecter</a> pour publier un commentaire.</div>
    <?php
}

?>
</section>

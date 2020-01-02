<?php
use Project\Model\Entity\CommentEntity;
use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();
?>

<section class="container-lg mt-4 mb-4 pb-2 border bgColor-commentsSection-lightTheme">
    <div class="row">
        <div class="col col-12 text-center font-weight-bold mb-2 bgColor-headers">Espace commentaires :</div>
    </div>
<?php

if($comments) {
$hideFirstLine = true;

    /** @var CommentEntity $comment */
    foreach ($comments as $comment) {
        if(!$hideFirstLine)
{
    ?>
    <div class="myCommentLine-lightTheme"></div>
    <?php
}?>

<div class="col col-12">
        <div class="col col-12 text-center color-commentAuthor-lightTheme"><strong><?= $comment->getCommentAuthor() ?></strong> a posté un commentaire
            le <?= $comment->getCommentDate() ?>
            <?php
            if(isset($_SESSION['nickname']) AND isset($_SESSION['password'])) {
                if($comment->getCommentAuthor() !== $_SESSION['nickname']) {
                    ?>
                    <a class="btn btn-danger btn-sm rounded-circle" href="index.php?displayPost=<?= $_GET['displayPost'] ?>&signalCommentId=<?= $comment->getCommentId() ?>"><span
                            title="Signaler ce commentaire" class="fa fa-exclamation-triangle"></span></a>
                    <?php
                }else
                {
                ?>
                    <span class="text-warning">(C'est vous qui avez posté ce commentaire !)</span>
                <?php
                }
                if($myAdmin->isUserAnAdmin($_SESSION['nickname'], $_SESSION['password']))
                {
                ?>
                    <a class="btn btn-primary btn-sm rounded-circle" href="index.php?adminPage=1"><span title="Accéder au panneau d'administration" class="fa fa-lock"></span></a>
            <?php
                }
            }
            ?>
            </div>
        <div class="col col-12 color-commentMessages-lightTheme bgColor-commentMessages-lightTheme"><?= $comment->getCommentContent() ?></div>
</div>

        <?php
        $hideFirstLine = false;
    }
}else
{
    ?>
    <div class="col col-12 text-center color-commentAuthor-lightTheme">Soyez le premier à poster un commentaire !</div>
    <?php
}

//If the user is logged in, displays the module for writing comments
if(isset($_SESSION['nickname']) AND isset($_SESSION['password'])) {

    include('addCommentView.php');

} else   //Otherwise, displays a message suggesting to connect
{
    ?>
    <div class="myLine-lightTheme"></div>
    <div class="col col-12 text-center">Vous devez vous <a data-toggle="modal" href="#connectionForm">connecter</a> pour publier un commentaire.</div>
    <?php
}

?>
</section>

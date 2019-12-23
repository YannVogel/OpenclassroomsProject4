<?php
use Project\Controller\PostController;

if($lastPost)
    {
        $controller = new PostController();
?>
<section class="container">
    <div class="row mt-4 mb-2">
        <div class="col col-12 font-headersTitles colorHeaders-lightTheme text-center">
            <h3 class="h3"><?= $lastPost->getPostTitle(); ?></h3>
        </div>
    </div>
        <div class="row font-weight-bold bgColor-headers">
            <span class="col col-8">publié le <?= $lastPost->getPostDate(); ?></span>
            <span class="col col-4 text-right">Nombre de commentaire<?php if($controller->getNumberOfComments($lastPost->getPostId()) > 1){echo 's';} ?> : <?= $controller->getNumberOfComments($lastPost->getPostId()) ?></span>
        </div>


    <div class="row border font-postsContent bgColor-postsContent-lightTheme">
        <div class="col"><?= $controller->getPostIntro($lastPost->getPostId()); ?></div>
    </div>
</section>
<?php
    }else{
    echo '<div>Aucun billet à afficher</div>';
}
?>

<section class="container">
    <div class="row mt-4">
        <div class="col col-12 text-center">
            <h3 class="font-headersTitles colorHeaders-lightTheme h3">Le mot de Jean Forteroche</h3>
        </div>
    </div>
    <div class="myLine"></div>
    <div class="row">
        <div class="col col-12 briefSection color-briefSection-lightTheme">
            <img id="jeanForteroche" src="public/images/JeanForteroche.jpg" class="float-left mr-2 img-fluid img-thumbnail" alt="Jean Forteroche prenant la pose"/>
            <div><strong>BIENVENUE sur mon site, cher lecteur.</strong>
                Vous n'êtes pas sans savoir que je travaille d'arrache-pied sur mon prochain roman, intitulé <h2 class="text-primary font-weight-bold">"Billet simple pour l'Alaska"</h2>.
                Dans ce récit, je vous promets de mélanger divers genres qui ont fait la renommée de mes précédents livres : <h4>aventure</h4>, <h4>intrigue</h4>, <h4>romance</h4>, <h4>conflits géo-politiques</h4> et une touche de <h4>cyberpunk</h4> !</div>
            <p> Écrire cette histoire est un travail de longue haleine et je ne veux pas laisser mes fans sans rien avoir à lire pendant une longue période de temps. C'est pour cela que j'ai décidé de publier mon livre sur ce site, chapitre par chapitre !</p>
            <p>Je ne peux garantir un rythme de parution régulier mais j'essayerai de respecter la publication d'un chapitre par mois. Sachez que je passe mes journées sur ce nouveau roman et le peu de temps libre que je m'accorde sert à me documenter afin de vous fournir des textes de toujours aussi bonne qualité !</p>
            <p>En dessous de chaque chapitre publié, vous aurez la possibilité de donner votre avis en laissant un commentaire. Il faudra au préalable vous inscrire et je compte sur vous pour rester courtois quelle que soit la situation !</p>
            <p>Je vous souhaite une bonne navigation sur mon site, en espérant vous faire vivre de belles aventures pendant encore de nombreuses années !</p>
            <p class="text-right">- Littéralement vôtre.</p>
            <img src="public/images/signature.gif" class="float-right img-fluid" alt="Signature" />
        </div>
    </div>
</section>


<?php
if($lastPost)
    {
?>
<section class="container">
    <div class="col col-12 text-center"><h2 class="h2"><?= $lastPost->getPostTitle(); ?></h2> le <?= $lastPost->getPostDate(); ?></div>
    <div class="col"><?= $lastPost->getPostIntro(); ?></div>
</section>
<?php
    }


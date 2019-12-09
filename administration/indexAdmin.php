<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/css/style.css" />
    <script src="https://cdn.tiny.cloud/1/eao0m8gx6g8dp0oieeo8wvkd3ut5slygyly5rgcyizps38du/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <title>Page d'administration</title>
</head>
<body>
<header class="container-fluid pl-0 pr-0">
    <div class="col text-center">HEADER DU SITE</div>
</header>

<nav class="nav nav-tabs">
    <a class="nav-item nav-link active" href="#p1">Nouveau billet</a>
    <a class="nav-item nav-link" href="#p2">Modifier billet</a>
    <a class="nav-item nav-link" href="#p3">Supprimer billet</a>
    <a class="nav-item nav-link" href="#p4">Supprimer commentaire</a>
</nav>
<div class="tab-content">
    <div class="tab-pane active" id="p1">
        <!-- Ici se trouve le code pour ajouter un nouveau billet -->
        <?php include('./view/createPostView.php') ?>
    </div>

    <div class="tab-pane" id="p2">
        <!-- Ici se trouve le code pour modifier un billet existant -->
        <?php // include('./view/editPostView.php') ?>
    </div>

    <div class="tab-pane" id="p3">
        <!-- Ici se trouve le code pour supprimer un billet -->
        <?php // include('./view/deletePostView.php') ?>
    </div>
    <div class="tab-pane" id="p4">
        <!-- Ici se trouve le code pour supprimer un commentaire -->
        Ici se trouve le code pour supprimer un commentaire
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../public/js/javascript.js"></script>
</body>
</html>
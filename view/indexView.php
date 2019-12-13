<?php
use Project\Controller\PostController;
use Project\Controller\AdminUserController;

$myAdmin = new AdminUserController();

if(isset($_POST['nicknameInput']) AND isset($_POST['passwordInput']) AND trim($_POST['nicknameInput']) !== "" AND trim($_POST['passwordInput']) !== "")
{
    $nickname = htmlspecialchars($_POST['nicknameInput']);
    $password = htmlspecialchars($_POST['passwordInput']);
    $_SESSION['nickname'] = $nickname;
    $_SESSION['password'] = $password;
}
?>


<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css" />
    <title>Le blog de Jean Forteroche</title>
</head>
<body>
    <header class="container">
        <div class="row">
        <div class="col col-md-12 text-center">HEADER DU SITE
            <?php
                if(!isset($_SESSION['nickname']) OR !isset($_SESSION['password']) OR trim($_SESSION['nickname']) === '' OR trim($_SESSION['password']) === '')
            {
            ?>
            <div></div><button data-toggle="modal" data-target="#connectionForm" class="btn btn-primary">Connexion<span class="fa fa-key"></span></button>
            <button data-toggle="modal" data-target="#inscriptionForm" class="btn btn-primary">Inscription<span class="fa fa-edit"></span></button></div>
            <?php
            }elseif(isset($_SESSION['nickname']) AND isset($_SESSION['password'])) {
                if ($myAdmin->isConnectionValid($_SESSION['nickname'], $_SESSION['password'])) {
                    ?>
                    <div>Vous êtes connecté·e en tant que <?= $_SESSION['nickname'] ?></div><a href="logout.php">Se
                        déconnecter</a>
                    <?php
                }
            }
            ?>
        </div>
        </div>
    </header>


    <div class="container">
        <div class="modal fade" id="connectionForm">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Vos infos :</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body row">
                        <form class="col" method="post" action=".">
                            <div class="form-group">
                                <label for="nicknameInput" class="form-control-label">Pseudo</label>
                                <input type="text" class="form-control" name ="nicknameInput" id="nicknameInput" required>
                            </div>
                            <div class="form-group">
                                <label for="passwordInput" class="form-control-label">Mot de passe</label>
                                <input type="password" class="form-control" name="passwordInput" id="passwordInput" required>
                            </div>
                            <button id="connectionButton" type="submit" class="btn btn-primary pull-right">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="modal fade" id="inscriptionForm">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Vos infos :</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body row">
                        <form class="col" method="post" action="inscription.php">
                            <div class="form-group">
                                <label for="nicknameInscriptionInput" class="form-control-label">Pseudo désiré</label>
                                <input type="text" class="form-control" name ="nicknameInscriptionInput" id="nicknameInscriptionInput" required>
                            </div>
                            <div class="form-group">
                                <label for="passwordInscriptionInput" class="form-control-label">Mot de passe</label>
                                <input type="password" class="form-control" name="passwordInscriptionInput" id="passwordInscriptionInput" required>
                            </div>
                            <div class="form-group">
                                <label for="passwordInscriptionConfirmationInput" class="form-control-label">Confirmez votre mot de passe</label>
                                <input type="password" class="form-control" name="passwordInscriptionConfirmationInput" id="passwordInscriptionConfirmationInput" required>
                            </div>
                            <button id="inscriptionButton" type="submit" class="btn btn-info pull-right">Inscription</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $manage = new PostController;
        $manage->displayLastPost();
    ?>

    <footer class="container-fluid pl-0 pr-0">
        <div class="col text-center">FOOTER DU SITE</div>
    </footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="public/js/Storage.js"></script>
<script src="public/js/ActiveTab.js"></script>
<script src="public/js/javascript.js"></script>
</body>
</html>
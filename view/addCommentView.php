<div class="myLine"></div>

<form action="index.php?displayPost=<?= $_GET['displayPost'] ?>" class="container" method="post">
    <div class="form-group">
        <label for="newComment">Poster un commentaire en tant que <strong><?= $_SESSION['nickname'] ?></strong> : </label>
        <textarea id="newComment" name="newComment" class="form-control" placeholder="Merci de respecter les règles basiques du civisme. Tout commentaire est sujet à modération et pourra être supprimé sans avertissement." required></textarea>
    </div>
    <input type="submit" value="Valider" />
</form>

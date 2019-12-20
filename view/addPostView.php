<!-- Ici se trouve le code pour ajouter un nouveau billet -->
<form action="index.php" class="container" method="post">
    <div class="form-group">
        <label for="newPostTitle">Titre du billet : </label>
        <input id="newPostTitle" name="newPostTitle" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="newPostContent">Contenu du billet : </label>
        <textarea id="newPostContent" name="newPostContent" class="form-control" placeholder="Un nouveau chapitre de Jean Rochefort va naître ici !" required></textarea>
    </div>
    <input type="submit" value="Valider" />
</form>






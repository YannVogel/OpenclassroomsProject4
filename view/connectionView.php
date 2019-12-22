<div class="container">
    <div class="modal fade" id="connectionForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Vos identifiants :</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <form class="col" method="post" action="index.php?welcomeMessage=1">
                        <div class="form-group">
                            <label for="nicknameInput" class="form-control-label">Pseudo</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-user"></span></span>
                                </div>
                                <input type="text" class="form-control" name ="nicknameInput" id="nicknameInput" required>
                            </div>
                            </div>
                        <div class="form-group">
                            <label for="passwordInput" class="form-control-label">Mot de passe</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-lock"></span></span>
                                </div>
                                <input type="password" class="form-control" name="passwordInput" id="passwordInput" required>
                            </div>
                        </div>
                        <button id="connectionButton" type="submit" class="btn btn-primary pull-right">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="modal fade" id="inscriptionForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Vos infos :</div>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <form class="col" method="post" action="controller/inscription.php">
                        <div class="form-group">
                            <label for="nicknameInscriptionInput" class="form-control-label">Pseudo désiré</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-user"></span></span>
                                </div>
                            <input type="text" class="form-control" name ="nicknameInscriptionInput" id="nicknameInscriptionInput" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passwordInscriptionInput" class="form-control-label">Mot de passe</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-lock"></span></span>
                                </div>
                            <input type="password" class="form-control" name="passwordInscriptionInput" id="passwordInscriptionInput" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passwordInscriptionConfirmationInput" class="form-control-label">Confirmez votre mot de passe</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-lock"></span></span>
                                </div>
                            <input type="password" class="form-control" name="passwordInscriptionConfirmationInput" id="passwordInscriptionConfirmationInput" required>
                            </div>
                        </div>
                        <button id="inscriptionButton" type="submit" class="btn btn-info pull-right">Inscription</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
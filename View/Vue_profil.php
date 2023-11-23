
<main class="containe-fluid">
    <h1>Mon profil</h1>
    <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="pseudo">
                            Pseudo
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="pseudo" value="<?php echo $_SESSION['membre']["login"]; ?>" name="pseudo" type="text"placeholder="pseudo"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="nom">
                            Nom
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="nom" value="<?php echo $_SESSION['membre']["nom"]; ?>" name="nom" type="text" placeholder="nom"/>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="prenom">
                            Prenom
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="prenom" value="<?php echo $_SESSION['membre']["prenom"]; ?>" name="prenom" type="text" placeholder="prenom"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="email">
                            Email
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="email" value="<?php echo $_SESSION['membre']["email"]; ?>" name="email" type="mail" placeholder="email"/>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="password">
                            Statut
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="statut" value="<?php echo $_SESSION['membre']["statut"]; ?>" name="statut" type="text" placeholder="statut"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="adresse">
                            Adresse
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="adresse" value="<?php echo $_SESSION['membre']["adresse"]; ?>" name="adresse" type="text" placeholder="adresse"/>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="telephone">
                            Téléphone
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="telephone" value="<?php echo $_SESSION['membre']["tel"]; ?>" name="telephone" type="text" placeholder="numero de telephone"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="cp">
                            Code postal
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="cp" value="<?php echo $_SESSION['membre']["cp"]; ?>" name="cp" type="number" placeholder="code postal"/>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="ville">
                            Ville
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="ville" value="<?php echo $_SESSION['membre']["ville"]; ?>" name="ville" type="text" placeholder="ville"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="date">
                            Date de création du compte
                            </label>
                            <div class="input-group">
                                <input class="form-control" value="<?php echo $_SESSION['membre']["date_inscription"]; ?>" id="date" name="date" placeholder="jj/mm/aaaa" type="text" onfocus="this.type='date'" onblur="this.type='text'"/>
                            </div>
                        </div>
                    </div>
                </div> 
            </form>
        </div>
</main>
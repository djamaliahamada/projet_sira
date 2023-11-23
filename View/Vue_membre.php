<main class="container-fluid">
    <br>
    <h1>Membres</h1>
    <!-- Formulaire de recherche membres -->
<div class="container">
    <form action="" method="get">
        <div class="form-group">
            <label for="recherche_vehicule">Rechercher un memnbre</label>
            <input type="text" class="form-control" id="recherche_vehicule" name="recherche_vehicule" placeholder="Saisissez votre recherche">
        </div>
        <br><input type="submit" value="Rechercher" class="btn btn-primary"><br>
    </form>
</div>

    <br>
    <div class="membre">
        
        <table class="table table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Id membre</th>
                    <th>Pseudo</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Ville</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Code postal</th>
                    <th>Statut</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
        </thead>
            <tbody>
                <?php while($membre=$requet->fetch()){ ?>
                    <tr>
                        <td><?php echo $membre["id_membre"]; ?></td>
                        <td><?php echo $membre["login"]; ?></td>
                        <td><?php echo $membre["nom"]; ?></td>
                        <td><?php echo $membre["prenom"]; ?></td>
                        <td><?php echo $membre["ville"]; ?></td>
                        <td><?php echo $membre["adresse"]; ?></td>
                        <td><?php echo $membre["tel"]; ?></td>
                        <td><?php echo $membre["email"]; ?></td>
                        <td><?php echo $membre["cp"]; ?></td>
                        <td><?php echo $membre["statut"]; ?></td>
                        <td><?php echo $membre["date_inscription"]; ?></td>
                        <td>
                            <a href="?id=<?php echo $membre["id_membre"]; ?>" style="text-decoration: none;">
                                <span class="mdi mdi-square-edit-outline"></span>
                            </a>
                            <a href="?delete_id=<?php echo $membre["id_membre"]; ?>" style="text-decoration: none;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?');">
                             <span class="mdi mdi-delete"></span>
                             </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
    <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="pseudo">
                            Pseudo
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="pseudo" value="<?php echo ($membre_mod !== null) ? $membre_mod["login"] : ''; ?>" name="pseudo" type="text"placeholder="pseudo"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="nom">
                            Nom
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="nom" value="<?php echo ($membre_mod !== null)? $membre_mod["nom"] : '';?>" name="nom" type="text" placeholder="nom"/>
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
                                <input class="form-control" id="prenom" value="<?php echo ($membre_mod !== null)? $membre_mod["prenom"] : ''; ?>" name="prenom" type="text" placeholder="prenom"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="email">
                            Email
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="email" value="<?php echo ($membre_mod !== null)? $membre_mod["email"] : '' ;?>" name="email" type="mail" placeholder="email"/>
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
                                <input class="form-control" id="statut" value="<?php echo ($membre_mod !==null)? $membre_mod["statut"]: '' ;?>" name="statut" type="text" placeholder="statut"/>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="adresse">
                            Adresse
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="adresse" value="<?php echo ($membre_mod !==null)? $membre_mod["adresse"] : ''; ?>" name="adresse" type="text" placeholder="adresse"/>
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
                                <input class="form-control" id="telephone" value="<?php echo ($membre_mod !==null)? $membre_mod["tel"]: '';?>" name="telephone" type="text" placeholder="numero de telephone"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="cp">
                            Code postal
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="cp" value="<?php echo ($membre_mod !==null)? $membre_mod["cp"] : ''; ?>" name="cp" type="number" placeholder="code postal"/>
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
                                <input class="form-control" id="ville" value="<?php echo ($membre_mod !==null)? $membre_mod["ville"] : ''; ?>" name="ville" type="text" placeholder="ville"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="date">
                            Date de création du compte
                            </label>
                            <div class="input-group">
                                <input class="form-control" value="<?php echo ($membre_mod !==null)? $membre_mod["date_inscription"] : ''; ?>" id="date" name="date" placeholder="jj/mm/aaaa" type="text" onfocus="this.type='date'" onblur="this.type='text'"/>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <input type="submit" value="Enregistrer" name="enregistrer" class="btn btn-primary">
            </form>
        </div>
</main>
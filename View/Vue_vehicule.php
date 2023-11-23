<main class="container-fluid">
    <br>
    <h1>Véhicules</h1>
    <br>
    <!-- Formulaire de recherche pour les véhicules -->
<div class="container">
    <form action="" method="get">
        <div class="form-group">
            <label for="recherche_vehicule">Rechercher un véhicule</label>
            <input type="text" class="form-control" id="recherche_vehicule" name="recherche_vehicule" placeholder="Saisissez votre recherche">
        </div>
        <br><input type="submit" value="Rechercher" class="btn btn-primary">
    </form>
    <br>
</div>

    <div class="membre">
        
        <table class="table table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Id véhicule</th>
                    <th>Agence</th>
                    <th>Marque</th>
                    <th>Modele</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
        </thead>
            <tbody>
                <?php while($vehicule=$vehicules->fetch()){ ?>
                    <tr style="text-align: center;">
                        <td><?php echo $vehicule["id_vehicule"]; ?></td>
                        <td><?php echo $vehicule["nom"]; ?></td>
                        <td><?php echo $vehicule["marque"]; ?></td>
                        <td><?php echo $vehicule["modele"]; ?></td>
                        <td><?php echo $vehicule["description"]; ?></td>
                        <td>
                            <img src="Assets/Images/<?php echo $vehicule["image"]; ?>" style="width:100px; height:100px;" class="img-fluid"  alt="image">
                        </td>
                        <td><?php echo $vehicule["prix_journalier"]; ?></td>
                        <td>
                            <a href="?id=<?php echo $vehicule["id_vehicule"]; ?>" style="text-decoration: none;">
                                <span class="mdi mdi-square-edit-outline"></span>
                            </a>
                            <a href="?delete_id=<?php echo $vehicule["id_vehicule"]; ?>" style="text-decoration: none;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?');">
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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <input type="hidden" value="<?php echo ($vehicule_mod !== null) ? $vehicule_mod['id_vehicule'] : ''; ?>" class="form-control" name="modifier_vehicule" >
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="marque">
                            Marque
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="marque" value="<?php echo ($vehicule_mod !== null) ? $vehicule_mod['marque'] : ''; ?>" name="marque" type="text"placeholder="marque"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="modele">
                            Modele
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="modele" value="<?php echo ($vehicule_mod !== null) ? $vehicule_mod['modele'] : ''; ?>" name="modele" type="text" placeholder="modele"/>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="image">
                            Image
                            </label> <br>
                            <?php if(isset($_GET['id'])){ ?>
                                <img src="Assets/Images/<?php echo $vehicule_mod["image"]; ?>" style="width:100px; height:100px;" class="img-fluid"  alt="image">
                            <?php }else{ echo '';} ?>
                            <div class="input-group">
                                
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="prix">
                            Prix
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="prix" value="<?php echo ($vehicule_mod !== null) ? $vehicule_mod['prix_journalier'] : ''; ?>" name="prix" type="number" placeholder="prix"/>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row">
                    
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="email">
                            Description
                            </label>
                            <div class="input-group">
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">
                                    <?php echo ($vehicule_mod !== null) ? $vehicule_mod['description'] : ''; ?>
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="prix">
                            Agence
                            </label>
                            <select name="agence_vehicule" class="form-control">
                                <?php foreach($agence_vehiculs as $agence_vehicul){ ?>
                                    <option value="<?php echo $agence_vehicul['id_agence']; ?>"><?php echo $agence_vehicul['nom']; ?></option>
                                <?php };?>
                                
                            </select>
                        </div>
                    </div>
                </div> 
                
                <br>
                <br>
                <input type="submit" value="Enregistrer" name="enregistrer" class="btn btn-primary">
            </form>
        </div>
</main>
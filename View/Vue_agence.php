<main class="container-fluid">
    <br>
    <h1>Agence</h1>
    <br>
    <div class="membre">
        
        <table class="table table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Id agence</th>
                    <th>Nom</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Ville</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
        </thead>
            <tbody>
                <?php while($agence=$requet->fetch()){ ?>
                    <tr style="text-align: center;">
                        <td><?php echo $agence["id_agence"]; ?></td>
                        <td><?php echo $agence["nom"]; ?></td>
                        <td><?php echo $agence["tel"]; ?></td>
                        <td><?php echo $agence["email"]; ?></td>
                        <td><?php echo $agence["adresse"]; ?></td>
                        <td><?php echo $agence["cp"]; ?></td>
                        <td><?php echo $agence["ville"]; ?></td>
                        <td>
                            <img src="Assets/Images/<?php echo $agence["image"]; ?>" style="width:100px; height:100px;" class="img-fluid"  alt="image">
                        </td>
                        <td>
                            <a href="?id=<?php echo $agence["id_agence"]; ?>" style="text-decoration: none;">
                                <span class="mdi mdi-square-edit-outline"></span>
                            </a>
                            <a href="?delete_id=<?php echo $agence["id_agence"]; ?>" style="text-decoration: none;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette agence ?');">
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
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="nom">
                            Nom
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="nom" value="<?php echo ($agence_mod !== null) ? $agence_mod['nom'] : ''; ?>" name="nom" type="text"placeholder="nom"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="tel">
                            Téléphone
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="tel" value="<?php echo ($agence_mod !== null) ? $agence_mod['tel'] : ''; ?>" name="tel" type="text" placeholder="telephone"/>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="email">
                            Email
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="email" value="<?php echo ($agence_mod !== null) ? $agence_mod['email'] : ''; ?>" name="email" type="mail" placeholder="email"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="adresse">
                            Adresse
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="adresse" value="<?php echo ($agence_mod !== null) ? $agence_mod['adresse'] : ''; ?>" name="adresse" type="text" placeholder="adresse"/>
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
                                <input class="form-control" id="ville" value="<?php echo ($agence_mod !== null) ? $agence_mod['ville'] : ''; ?>" name="ville" type="text" placeholder="ville"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="cp">
                            Code postal
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="cp" value="<?php echo ($agence_mod !== null) ? $agence_mod['cp'] : ''; ?>" name="cp" type="number" placeholder="code postal"/>
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
                                <img src="Assets/Images/<?php echo $agence_mod["image"]; ?>" style="width:100px; height:100px;" class="img-fluid"  alt="image">
                            <?php }else{ echo '';} ?>
                            <div class="input-group">
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="hidden" value="<?php echo ($agence_mod !== null) ? $agence_mod['id_agence'] : ''; ?>" class="form-control" name="modifier_agence" >
                            
                        </div>
                    </div>
                </div> 
                
                <br>
                <br>
                <input type="submit" value="Enregistrer" name="enregistrer" class="btn btn-primary">
            </form>
        </div>
</main>
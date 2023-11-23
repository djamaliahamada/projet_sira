<?php 
    include("fonction.php");

    $query=" select vehicule.id_vehicule, vehicule.marque,vehicule.modele,vehicule.prix_journalier, vehicule.description,vehicule.image, nom from vehicule
    inner join agence on id_agence = agence";
    $vehicules=$pdo->prepare($query);
    $vehicules->execute();
?>
<?php include_once('header.php');?>
    <main class="containe-fluid">
        <div class="container-head">
            <div class="bord-bienvenu">
                <span> Bienvenue à Bord</span><br>
                <span> Location de véhicule 24h/24 7j/7</span> <br><br>
                <?php if(isset($_SESSION['membre']) ){ ?>
                <?php }else{ ?>
                    <a href="inscription.php">Inscription</a>
                    <a href="login.php">Connexion</a>
                <?php };?>
            </div>
        </div>
        <div class="container">
            <br>
            <div class="row">
                <?php while($vehicule=$vehicules->fetch()){ ?>
                    <div class="col">
                        <table>
                            <tr style="text-align: center;">
                                <td>
                                    <img src="Assets/Images/<?php echo $vehicule["image"]; ?>" style="width:100px; height:100px;" class="img-fluid"  alt="image">
                                </td>
                                <td>
                                    <?php echo $vehicule["marque"]; ?> <br>
                                    <?php echo $vehicule["description"]; ?> <br>
                                    <?php echo $vehicule["prix_journalier"]; ?> <br>
                                    <?php if(isset($_SESSION['membre']) ){ ?>
                                        <a href="location.php?id=<?php echo $vehicule["id_vehicule"]; ?>" style="text-decoration: none;" class="btn btn-success">
                                            Réserver et Payer
                                        </a>
                                    <?php }; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>
            
        </div>
    </main>
<?php include_once('footer.php');?>
    
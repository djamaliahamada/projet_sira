<?php
    include_once('fonction.php');

    if(isset($_POST['marque']) && isset($_POST['modele']) && isset($_POST['description']) && isset($_POST['prix'])
        && isset($_POST['agence_vehicule'])
        ){
        $marque=htmlentities($_POST['marque']);
        $modele=htmlentities($_POST['modele']);
        $description=htmlentities($_POST['description']);
        $prix=$_POST['prix'];
        $agence_ve=$_POST['agence_vehicule'];
    }else{
        $marque="";
        $modele="";
        $description="";
        $prix=0;
        $agence_ve="";
    }
    if(isset($_POST['enregistrer'])){
        $info = pathinfo($_FILES['image']['name']);
        $ext= ["jpg","jpeg","png","gif"];
        if(in_array(strtolower($info['extension']),$ext)){
            move_uploaded_file($_FILES['image']['tmp_name'], "Assets/Images/" .$info['basename']);
        }

        $query="insert into vehicule values(null, :marque, :modele, :prix_journalier, :description, :image, :agence)";
        $resultat= $pdo->prepare($query);
        $reponse=$resultat->execute([
            "marque"    =>$marque,
            "modele"  =>$modele,
            "prix_journalier"  =>$prix,
            "description"=>$description,
            "image" =>$info['basename'],
            "agence"=>$agence_ve
        ]);
    }


    $requet= $pdo->prepare(" select * from agence");
    $requet->execute();
    $agence_vehiculs=$requet->fetchAll();

    
    $query=" select vehicule.id_vehicule, vehicule.marque,vehicule.modele,vehicule.prix_journalier, vehicule.description,vehicule.image, nom from vehicule
    inner join agence on id_agence = agence";
    $vehicules=$pdo->prepare($query);
    $vehicules->execute();



    //pour la modification 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $requet_mod = $pdo->prepare("SELECT * FROM vehicule WHERE id_vehicule = :id");
        $requet_mod->bindParam(':id', $id, PDO::PARAM_INT);
        $requet_mod->execute();
        $vehicule_mod = $requet_mod->fetch();
    } else {
        // Ne rien faire si l'ID n'est pas spécifié
        $vehicule_mod = null;
    }

    include ('header.php');
    include ('View/Vue_vehicule.php');
    include ('footer.php');

?>
<?php
    include_once('fonction.php');

    if(isset($_POST['nom']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['adresse'])
        && isset($_POST['cp']) && isset($_POST['ville']) 
        ){
        $nom=htmlentities($_POST['nom']);
        $tel=htmlentities($_POST['tel']);
        $email=htmlentities($_POST['email']);
        $adresse=htmlentities($_POST['adresse']);
        $cp=$_POST['cp'];
        $ville=htmlentities($_POST['ville']);
    }else{
        $nom="";
        $tel="";
        $email="";
        $adresse="";
        $cp="";
        $ville="";
    }
    if(isset($_POST['enregistrer'])){
        
        $info = pathinfo($_FILES['image']['name']);
        $ext= ["jpg","jpeg","png","gif"];
        if(in_array(strtolower($info['extension']),$ext)){
            move_uploaded_file($_FILES['image']['tmp_name'], "Assets/Images/" .$info['basename']);
        }

        $query="insert into agence values(null, :nom, :tel, :email, :adresse, :cp, :ville, :image)";
        $resultat= $pdo->prepare($query);
        $reponse=$resultat->execute([
            "nom"    =>$nom,
            "tel"  =>$tel,
            "email"  =>$email,
            "adresse"=>$adresse,
            "cp"     =>$cp,
            "ville"  =>$ville,
            "image" =>$info['basename']
        ]);
    }


    $requet= $pdo->prepare(" select * from agence ");
    $requet->execute();

    //pour la modification 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $requet_mod = $pdo->prepare("SELECT * FROM agence WHERE id_agence = :id");
        $requet_mod->bindParam(':id', $id, PDO::PARAM_INT);
        $requet_mod->execute();
        $agence_mod = $requet_mod->fetch();
    } else {
        // Ne rien faire si l'ID n'est pas spécifié
        $agence_mod = null;
    }

    include ('header.php');
    include ('View/Vue_agence.php');
    include ('footer.php');

?>
<?php
    include_once('fonction.php');

    if(isset($_POST['pseudo']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])
        && isset($_POST['password']) && isset($_POST['adresse']) && isset($_POST['telephone']) && 
        isset($_POST['cp']) && isset($_POST['ville']) && isset($_POST['date'])
        ){
        $pseudo=htmlentities($_POST['pseudo']);
        $nom=htmlentities($_POST['nom']);
        $prenom=htmlentities($_POST['prenom']);
        $email=htmlentities($_POST['email']);
        $password=htmlentities($_POST['password']);
        $adresse=htmlentities($_POST['adresse']);
        $telephone=htmlentities($_POST['telephone']);
        $cp=$_POST['cp'];
        $ville=htmlentities($_POST['ville']);
        $date=$_POST['date'];
    }else{
        $pseudo="";
        $nom="";
        $prenom="";
        $email="";
        $password="";
        $adresse="";
        $telephone="";
        $cp="";
        $ville="";
    }
    $statut="CLIENT";
    if(isset($_POST['enregistrer'])){
        $query="insert into membre values(null, :prenom, :nom, :login, :mdp, :tel, :email, :adresse, :cp,
        :ville, :statut, :date_inscription)";
        $resultat= $pdo->prepare($query);
        $reponse=$resultat->execute([
            "prenom" =>$prenom,
            "nom"    =>$nom,
            "login"  =>$pseudo,
            "mdp"    =>$password,
            "tel"    =>$telephone,
            "email"  =>$email,
            "adresse"=>$adresse,
            "cp"     =>$cp,
            "ville"  =>$ville,
            "statut" =>$statut,
            "date_inscription"=>$date
        ]);
        if($reponse){
            header("location: login.php");
            exit;
        }
    }
    include ('header.php');
    include ('View/Vue_inscription.php');
    include ('footer.php');

?>
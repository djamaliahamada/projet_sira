<?php
    include_once('fonction.php');

    $requet= $pdo->prepare(" select * from membre");
    $requet->execute();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $requet_mod = $pdo->prepare("SELECT * FROM membre where id_membre=$id");
        $requet_mod->execute();
        $membre_mod=$requet_mod->fetch();
    }else{
        // ne rien faire
        $membre_mod=null;
    }

    include ('header.php');
    include ('View/Vue_membre.php');
    include ('footer.php');

?>
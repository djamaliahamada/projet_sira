<?php
    include_once('fonction.php');

    if( isset($_POST['se_connecter']) && !empty($_POST['se_connecter']) ) {

        $query = "SELECT * FROM membre WHERE login = ?";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$_POST['login']]);

        //vérifie si login est correct
        if( $stmt->rowCount() != 0 ){
            $user = $stmt->fetch();

            //test si le password est bon
          if( $_POST['password']==$user['mdp']){
               //créer la session
               $_SESSION['membre'] = $user;
               header("location: index.php");
               exit;
            }else{
                echo "erreur de mot de passe";
            }
        }else{
            echo "login not found";
        }
    }
    
    include ('header.php');
    include ('View/Vue_login.php');
    include ('footer.php');

?>
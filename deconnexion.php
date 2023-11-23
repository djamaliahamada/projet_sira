<?php

session_start();

// Votre code de déconnexion ici
session_destroy();
header("Location: login.php");
exit();
?>

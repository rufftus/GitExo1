<?php

$login=($_POST["login"]);
$mdp=($_POST["mdp"]);
if ($login=="exit" and $mdp=="azerty")
{
    header(profil.html);
}

echo "Bonjour $login votre mot de passe est : $mdp";
?>
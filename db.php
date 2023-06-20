<?php

$db = mysqli_connect('localhost','root','Azerty01','moduleconnexion');

if (!$db) {
    die("La connexion a échoué: " . mysqli_connect_error());
}
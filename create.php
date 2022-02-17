<?php

require_once 'utils/tableConnect.php';
var_dump($_SESSION['test']);
$name = htmlentities($_POST['name']);
$profession = htmlentities($_POST['profession']);
$pv = (int) htmlentities($_POST['pv']);
$atk = (int) htmlentities($_POST['atk']);




$personnage = [];
$personnage['name'] = $name = $name ?: 'Aucun';
$personnage['profession'] = $profession ?: 'Aucune';
$personnage['pv'] = $pv ?? 0;
$personnage['atk'] = $atk ?? 0;





if (create($dbconnect, $personnage)){
    $_SESSION['create'] = 'succes';
} else {
    $_SESSION['create'] = 'echec';
}


header('Location: .'); //renvoi vers le fichier index.php si trouver dans ce dossier
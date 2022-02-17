<?php

require_once 'utils/tableConnect.php'; // Connection à la BDD

include_once 'includes/header.php'; // Ajout du header
include_once 'utils/function.php'; // Ajout de mes fonctions


sessionMessage($_SESSION['create']);
sessionMessage($_SESSION['delete']);

include_once 'includes/form.php'; // Inclusion du formulaire


$personnageArray = connectAll($dbconnect); // Connexion à la base
// Utilsiation de $personnageArray dans ~/personnagesSection

// Inclusion des personnages créer
include_once 'includes/personnagesSection.php';
$_SESSION['create'] = ''; // Remise à Zero de l'info de session 'create'
$_SESSION['delete'] = ''; // Remise à Zero de l'info de session 'delete'


include_once 'includes/footer.php'; // Inclusion du footer




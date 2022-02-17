<?php

include_once 'includes/header.php';
require_once 'utils/tableConnect.php';

// Je vais chercher les infos personnages uniquement sur l'id entrée en parametre

$id = (int) htmlentities($_GET['id']);
$personnage = connectOne($dbconnect, $id);


//var_dump($_SERVER); // A peu prés égal à un consol log de response
// On accede au donné par $_SERVER['Cequejeveuxrecuperer']
?>


<section class="tableau">
    <div class="container">
        <div class="personnage-card">
            <h2><?=$personnage['name']?></h2>
            <ul>
                <li><?=$personnage['profession'] ?></li>
                <li><?=$personnage['pv']?> points de vie
                <li><?=$personnage['atk']?> en attaque</li>
            </ul>
            <h4>Description :</h4>
            <p>Lorem ipsum para belur la casa nostramus del bellius tetolaphus caius bonnus</p>

        </div>
    </div>
</section>


<?php
include_once 'includes/footer.php';
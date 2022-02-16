<?php 

include_once 'includes/header.php';

include_once 'utils.php'; // Include de mes fonctions


$alfred = [
    'name' => 'Alfred',
    'profession' => 'Major d\'homme',
    'pv' => 100,
    'atk' => 10,
];

$james = [
    'name' => 'James',
    'profession' => 'Inspecteur',
    'pv' => 175,
    'atk' => 40,
];

$pingouin = [
    'name' => 'Osvald',
    'profession' => 'Parain',
    'pv' => 80,
    'atk' => 60,
];

$bruce = [
    'name' => 'Bruce',
    'profession' => 'Milliardaire',
    'pv' => 120,
    'atk' => 35,
];

$selena = [
    'name' => 'Selena',
    'profession' => 'Voleuse',
    'pv' => 80,
    'atk' => 30,
];


// Switch case pour la professions
/*
switch ($james['profession']) {
    case 'Chomeur':
        echo '<br/> Va chercher du taff <br/>';
        break;
    case 'Inspecteur':
        echo '<br/> Va tuer le pingouin <br/>';
        break;
    default:
        echo '<br/> Je sais pas ce que tu fous <br/>';
}

// Boucle while
echo  'Combat tant attendu entre le Major d\'homme et l\'inspecteur <br/>';
while ($james['pv'] > 0 && $alfred['pv'] > 0) {
    $james['pv'] -= $alfred['atk'];
    echo 'Pv de James ' . $james['pv'] . '<br/>';
    $alfred['pv'] -= $james['atk'];
    echo 'Pv de Alfred' . $alfred['pv'] . '<br/>';
}
*/




getCombat($selena, $bruce);



echo strtoupper($alfred['name']); // En majuscule


$presentation = 'Je suis Arthur Pendragon !';
echo strpos($presentation, 'Arthur'); // 8eme position


$personnages = ['Arthur', 'Lancelot', 'Perceval', 'Guenièvre', 'Merlin', 'Mordred'];
echo array_reduce($personnages, static function($carry, $name) { // Reduce pareille que en JS
    return strlen($carry) > strlen($name) ? $carry : $name;
}, ' '); // Parametre initial de carry



include_once 'includes/footer.php';



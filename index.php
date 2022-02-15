<?php 

// Déclarations des personnages

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


var_dump($alfred['pv']);

//$alfred['pv'] -= (int) ($alfred['pv'] / 3);

var_dump($alfred['pv']);//die('Arret'); // Le die sert à stoppé tout le code aprés lui

var_dump($alfred['pv'] <= 200);
var_dump($alfred['pv'] === 200);
var_dump($alfred['name'] === 'Mjolnir');
var_dump(!$alfred['pv']);


// Switch case pour la professions

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

/*
echo  'Combat tant attendu entre le Major d\'homme et l\'inspecteur <br/>';
while ($james['pv'] > 0 && $alfred['pv'] > 0) {
    $james['pv'] -= $alfred['atk'];
    echo 'Pv de James ' . $james['pv'] . '<br/>';
    $alfred['pv'] -= $james['atk'];
    echo 'Pv de Alfred' . $alfred['pv'] . '<br/>';
}
*/

// Status pv alfred

if ($alfred['pv'] > 50) {
    echo ' <br />Tu peux y aller Alfred ! <br/>';
} elseif ($alfred['pv'] <= 50 && $alfred['pv'] > 0) {
    echo ' <br /> Ménage toi ! <br/>';
} else {
    echo '<br /> Je vous l\'avais bien dit </br>';
}
/**
 * @param array $attacker
 * @param array $victime
 * @return int
 */
function getCombat(array $attacker, array &$victime) :int {

    return $victime['pv'] -= $attacker['atk'];
}

/**
 * @param array $personnage
 * @return void
 */
function getHealth(array $personnage) :void {
    if ($personnage['pv'] > 50) {
        echo ' <br />Tu peux y aller Alfred ! <br/>';
    } elseif ($personnage['pv'] <= 50 && $alfred['pv'] > 0) {
        echo ' <br /> Ménage toi ! <br/>';
    } else {
        echo '<br /> Je vous l\'avais bien dit </br>';
    }
}

getHealth(getCombat($james, $alfred));


<?php

$client = [
    "prenom" => "John",
    "nom" => "Doe",
    "adresses" => [
        [
            "numero" => 60,
            "voie" => "rue",
            "nomDeLaVoie" => "des Vignes",
            "codePostal" => 12345,
            "ville" => "Toulouse"
        ],
        [
            "numero" => 1,
            "voie" => "place",
            "nomDeLaVoie" => "de la résistance",
            "codePostal" => 12345,
            "ville" => "Toulouse"
        ]
    ],
];

$client["téléphone"] = "02 47 47 47 47";
$client["prenom"] = "Robert";
/* MAUVAISE METHODE
$client["adresses"][2]["numero"] = 12;
$client["adresses"][2]["voie"] = "rue";
$client["adresses"][2]["nomDeLaVoie"] = "du Terrier du Rat";
$client["adresses"][2]["codePostal"] = "67227";
$client["adresses"][2]["ville"] = "Paris /s Loire";
*/
// BONNE METHODE
$client['adresses'][] = [
    "numero" => 1,
    "voie" => "impasse",
    "nomDeLaVoie" => "du Terrier du Rat",
    "codePostal" => 13566,
    "ville" => "Villette sur Rhône"
];
unset($client["nom"]);


[   "numero" => $number,
    "voie" => $voie,
    "nomDeLaVoie" => $street,
    "codePostal" => $cp,
    "ville" => $town
] = $client['adresses'][0];

echo ' <br/> ' . $number . $voie . $street . $cp . $town;

//                      <== <== <== <== Etape 4 ==> ==> ==> ==>

$test = range(1, 15);


echo '<br/><br/><br/><br/> ================ ';
echo '<br/><br/><br/>';
echo 'Nombre de valeur dans $test : ' . count($test) . '<br/>';
echo 'Somme des valeurs dans $test :' . array_sum($test) . '<br/>';
echo 'Moyenne des valeurs dans $test :' . (array_sum($test) / count($test)) . '<br/>';
echo 'Le nombre d\'adresse du client est de :' . count($client["adresses"]) . '<br/>';

$jhonVerify = in_array("Jhon", $client, true);
$nameVerify = isset($client["nom"]);
$phoneVerify = array_key_exists("téléphone", $client);
$adressVerify = isset($client["adresses"]);
$adressEmpty = empty($client["adresses"]); // empty => si vide // !empty => si au moin un élément


function verify($therm):void {
    if ($therm) {
        echo 'Présent dans le tableau <br/>';
    } else {
        echo 'N\'est pas parmis nous <br/>';
    }
}

verify($jhonVerify);
verify($nameVerify);
verify($phoneVerify);
verify($adressVerify);
verify($adressEmpty);


$nombres = range(1, 5);

array_shift($nombres); // Enleve le premier élément mais touches aux clés
unset($nombres[0], $nombres[2]); // Enleve le premier sans toucher aux clés
$nombres[] = 6;
array_push($nombres, 7, 8, 9); // Rajoute à la fin autant de valeurs que faire ce peux
array_unshift( $nombres, array_pop( $nombres));
array_splice($nombres, 1, 0, [10,11,12]);

var_dump($nombres);

$evenements = [
    'Oktoberfest',
    'Soirée privée',
    'VIP' => 'Cocktail',
    'Tournoi de Volley',
    'Rencontres sportives'
];

$replacement = [
    '1' => 'soirée déguisé',
    '2' => 'Evenements annulé'
];

$evenements = array_replace($evenements, $replacement);

var_dump($evenements);


$numbers = range(10, 20);

foreach ($numbers as  $key => $value) {
    echo '<ul>';
    echo '<li> Index ' . $key . ' : ' . $value . ' => ' . $value * $value . '</li>';
    echo '</ul>';
}

function affiche_carre($nombre, $index) {
    $carre = $nombre ** 2;
    echo '<li>Index '.$index.' : '.$nombre.' -> '.$carre.'</li>'.PHP_EOL;
}

array_walk($numbers, 'affiche_carre');















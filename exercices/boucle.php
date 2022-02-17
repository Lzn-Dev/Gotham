<?php
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

// Boucle while
echo  'Combat tant attendu entre le Major d\'homme et l\'inspecteur <br/>';
while ($james['pv'] > 0 && $alfred['pv'] > 0) {
    $james['pv'] -= $alfred['atk'];
    echo 'Pv de James ' . $james['pv'] . '<br/>';
    $alfred['pv'] -= $james['atk'];
    echo 'Pv de Alfred' . $alfred['pv'] . '<br/>';
}


foreach ($query as $value){
    echo '<table>';
    foreach ($value as $k => $v){
        echo '<th>' . $k . ' ';
        echo $v . ' | </th>';
    }
    echo '</table></br>';
}

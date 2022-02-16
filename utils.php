<?php

/** Function pour faire combatre deux personnages
 * @param array $attacker
 * @param array $victime
 * @return int
 */
function getCombat(array $attacker, array &$victime) :int {
    echo 'C\'est pas possible !! ' . formatName($attacker['name']) . ' attaque '
        . formatName($victime['name']) . ' ! <br/>';
    echo formatName($attacker['name']) . ' : ' . formatName($victime['name']) . ' en garde ma jolie <br/>';

    return $victime['pv'] -= $attacker['atk'];
}

/** Function pour avoir les pts de vie d'un personnage
 * @param array $personnage
 * @return void
 */
function getHealth(array $personnage) :void {
    if ($personnage['pv'] > 50) {
        echo ' <br />Tu peux y aller Alfred ! <br/>';
    } elseif ($personnage['pv'] <= 50 && $personnage['pv'] > 0) {
        echo ' <br /> Ménage toi ! <br/>';
    } else {
        echo '<br /> Je vous l\'avais bien dit </br>';
    }
}

/** Function de formattage de nom en Format Comme Ceci
 * @param string $name
 * @return string
 */
function formatName(string $name):string {
    return ucfirst(strtolower($name)); // Met la premiere lettre en MAJ > Met le reste en MIN
}
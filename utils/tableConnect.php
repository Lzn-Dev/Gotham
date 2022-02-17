<?php

require_once 'gothamConnect.php';
session_start();

/**
 * @param $dbconnect
 * @return array
 */
function connectAll ($dbconnect):array {
    return $dbconnect->query('SELECT * FROM gotham.personnages;')->fetchAll(PDO::FETCH_ASSOC);
}


function connectOne ($dbconnect, $param):array {
    $query = $dbconnect->prepare('SELECT * FROM gotham.personnages WHERE id = :param');
    $query->execute(
        [
            ':param' => $param
        ]
    );
    return $query->fetch();
}


/**
 * @param $dbconnect
 * @param array $personnage
 * @return bool
 */
function create ($dbconnect, array $personnage):bool {
    $request = $dbconnect->prepare(
        'INSERT INTO gotham.personnages (name, profession, pv, atk) VALUES (:name, :profession, :pv, :atk)'
    );
   return $request->execute(
        [
            ':name' => $personnage['name'],
            ':profession' => $personnage['profession'],
            ':pv' => $personnage['pv'],
            ':atk' => $personnage['atk']
        ]
    );
}

function delete ($dbconnect, $param):bool {
    $request = $dbconnect->prepare(
        'DELETE FROM gotham.personnages WHERE personnages.id = :param '
    );

    return $request->execute(
        [
            ':param' => $param
        ]
    );
}



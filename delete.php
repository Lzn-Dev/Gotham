<?php

require_once 'utils/tableConnect.php';

include_once 'includes/header.php';

$id = $_GET['id'];



if (delete($dbconnect, $id)) {
    $_SESSION['delete'] = 'succes';
} else {
    $_SESSION['delete'] = 'erreur';
}


header('Location: .');
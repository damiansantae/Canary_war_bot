<?php
include_once 'class_db.php';

if (isset($_POST['aid'])){

    if ($_POST['aid'] == "grancanaria"){
        $isla = 'Gran Canaria';
    } else if ($_POST['aid'] == "tenerife"){
        $isla = 'Tenerife';
    } else if ($_POST['aid'] == "fuerteventura"){
        $isla = 'Fuerteventura';
    } else if ($_POST['aid'] == "lanzarote"){
        $isla = 'Lanzarote';
    } else if ($_POST['aid'] == "hierro"){
        $isla = 'El Hierro';
    } else if ($_POST['aid'] == "gomera"){
        $isla = 'La Gomera';
    } else if ($_POST['aid'] == "palma"){
        $isla = 'La Palma';
    }
    $municipios= DataBase::getMunicipios($isla);
    echo json_encode($municipios);
}

?>
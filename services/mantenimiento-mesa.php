<?php
include '../services/connection.php';
include '../services/mesa.php';

$mesa = $_POST['mesa'];

if(isset($_POST['mantenimiento']))
{
    $stmt=$pdo->prepare("UPDATE `tbl_mesa` SET `status_mes` = 'Mantenimiento' WHERE `tbl_mesa`.`id_mes` = ?");
    $stmt->bindParam(1, $mesa);
    $stmt->execute();

}else{
    $stmt=$pdo->prepare("UPDATE `tbl_mesa` SET `status_mes` = 'Libre' WHERE `tbl_mesa`.`id_mes` = ?");
    $stmt->bindParam(1, $mesa);
    $stmt->execute();
}


//redirigir al sala.php desde donde se envio
$sala = $_POST['sala'];
header("Location:../View/{$sala}");
<?php
include_once '../services/connection.php';
include_once '../services/reserva.php';
$nombre = $_POST['nombre'];
$registro = $_POST['registro'];





$stmt=$pdo->prepare("UPDATE `tbl_reserva` SET `datos_res` = ? WHERE `tbl_reserva`.`id_res` = ?");
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $registro);
$stmt->execute();

//redirigir al sala.php desde donde se envio
header("Location:../view/sala.php");
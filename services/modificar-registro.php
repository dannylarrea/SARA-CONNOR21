<?php
include '../services/connection.php';
include '../services/reserva.php';
$nombre = $_POST['nombre'];
$registro = $_POST['registro'];




$stmt=$pdo->prepare("UPDATE `tbl_reserva` SET `datos_res` = ? WHERE `tbl_reserva`.`id_res` = ?");
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $registro);


$stmt->execute();

//redirigir al sala.php desde donde se envio
$sala = $_POST['sala'];
header("Location:../View/{$sala}");
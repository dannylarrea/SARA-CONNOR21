<?php
include '../services/connection.php';
include '../services/reserva.php';
include '../services/mesa.php';
$nombre = $_POST['nombre'];
$responsable = $_POST['responsable'];
$mesa = $_POST['mesa'];




$stmt=$pdo->prepare("INSERT INTO `tbl_reserva` (`id_res`, `horaIni_res`, `horaFin_res`, `datos_res`, `id_use_fk`, `id_mes_fk`) VALUES (NULL, CURDATE(), NULL, ?, ?, ?)");
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $responsable);
$stmt->bindParam(3, $mesa);
$stmt->execute();


$stmt2=$pdo->prepare("UPDATE `tbl_mesa` SET `status_mes` = 'Ocupado/Reservado' WHERE `tbl_mesa`.`id_mes` = ?");
$stmt2->bindParam(1, $mesa);
$stmt2->execute();





//redirigir al sala.php desde donde se envio
header("Location:../View/sala.php");
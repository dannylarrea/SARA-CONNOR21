<?php
include '../services/connection.php';
$registro = $_POST['registro'];




$stmt=$pdo->prepare("UPDATE `tbl_reserva` SET `horaFin_res` = CURDATE() WHERE `tbl_reserva`.`id_res` = ?");
$stmt->bindParam(1, $registro);
$stmt->execute();


$stmt2=$pdo->prepare("SELECT * from `tbl_reserva`WHERE `tbl_reserva`.`id_res` = ?");
$stmt2->execute();
$stmt2=$stmt2->fetchAll(PDO::FETCH_ASSOC);


foreach ($stmt2 as $stmt2)
{
    $stmt3=$pdo->prepare("UPDATE `tbl_mesa` SET `status_mes` = 'Ocupado/Reservado' WHERE `tbl_mesa`.`id_mes` = ?");
    $stmt3->bindParam(1, $stmt2['id_mes_fk']);
    $stmt3->execute();
}




//redirigir al sala.php desde donde se envio
$sala = $_POST['sala'];
header("Location:../View/{$sala}");
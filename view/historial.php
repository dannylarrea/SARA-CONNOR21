<!DOCTYPE html>
<?php include_once '../services/connection.php';?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas</title>
    <!-- librerias-->
    <script type="text/javascript" src="../js/jquery.js"></script><!-- jquery-->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2.2.0/src/js.cookie.min.js"></script><!-- cookie-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- sweetalert-->
    <script type="text/javascript" src="../js/iconos_g.js"></script><!-- iconos FontAwesome-->
    <script type="text/javascript" src="../js/js.js"></script>
    <link rel="icon" type="image/png" href="../img/icon.png">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="historial">
<?php 
    $reserva=$pdo->prepare("SELECT r.id_res, r.horaIni_res, r.horaFin_res, r.datos_res, u.nombre_use, m.id_mes, s.nombre_sal
    FROM tbl_reserva r
    INNER JOIN tbl_usuario u ON r.id_use_fk=u.id_use 
    INNER JOIN tbl_mesa m ON r.id_mes_fk=m.id_mes
    INNER JOIN tbl_sala s ON m.id_sal_fk=s.id_sal;");
    $reserva->execute();
    $data = $reserva->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="region-historial flex-cv">
    
        <table class="table-reservas">
            <thead>
                <tr>
                    <th>ID reserva</th>
                    <th>Inicio</th>
                    <th>Final</th>
                    <th>Nombre reserva</th>
                    <th>Responsable reserva</th>
                    <th>Mesa</th>
                    <th>Sala</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $datas) { ?>
                <tr>
                    <td><?php echo $datas['id_res'] ?></td>
                    <td><?php echo $datas['horaIni_res'] ?></td>
                    <td><?php echo $datas['horaFin_res'] ?></td>
                    <td><?php echo $datas['datos_res'] ?></td>
                    <td><?php echo $datas['nombre_use'] ?></td>
                    <td><?php echo $datas['id_mes'] ?></td>
                    <td><?php echo $datas['nombre_sal'] ?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
  
    
</div>
<div class="overlay" id="overlay">
<div class="abrirFiltro" id="abrirFiltro">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrarPop"><i class="fas fa-times"></i></a>
                <h3>Reservar mesa</h3>
                <form METHOD='POST' class="crearReserva" action="../services/reservar-mesa.php">
                    <input type="hidden" id="idMesa" class="idMesa" name="idMesa">
                    <label for="nombre">Nombre de la reserva</label>
                    <input type="text" id="nombre" name="nombre">

                    <input type="submit" value="Reservar" class="btn">
                </form>
            </div>
        </div>
</div>
</body>
</html>
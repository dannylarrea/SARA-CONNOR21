<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservas</title>
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

<body>
    <?php 
        include '../services/connection.php';
            //Query sala traer id y nombre
            //Para rellenar un mapa, la llave será el id de la sala y el valor el nombre 
            $reserva=$pdo->prepare("SELECT r.id_res, r.horaIni_res, r.horaFin_res, r.datos_res, u.nombre_use, r.id_mes_fk, s.nombre_sal
            FROM tbl_reserva r
            INNER JOIN tbl_usuario u ON r.id_use_fk=u.id_use 
            INNER JOIN tbl_sala s ON r.id_sal_fk=s.id_sal;");
            $reserva->execute();
            $data = $reserva->fetchAll(PDO::FETCH_ASSOC);

            echo "<table width='100%' border='1' cellpadding='0' cellspacing='0'>";
            echo "<tr>";
                echo "<th>Número reserva</th>";
                echo "<th>Hora inicio</th>";
                echo "<th>Fin reserva</th>";
                echo "<th>Datos de la reserva</th>";
                echo "<th>Responsable de reserva</th>";
                echo "<th>Mesa</th>";
                echo "<th>Sala</th>";
                echo "</tr>";
                //id_res, horaIni_res, horaFin_res, datos_res
        foreach ($data as $datas) {
            echo "<tr>";
                echo "<td>".$datas['id_res']."</td>";
                echo "<td>".$datas['horaIni_res']."</td>";
                echo "<td>".$datas['horaFin_res']."</td>";
                echo "<td>".$datas['datos_res']."</td>";
                echo "<td>".$datas['nombre_use']."</td>";
                echo "<td>".$datas['id_mes_fk']."</td>";
                echo "<td>".$datas['nombre_sal']."</td>";
            echo "</tr>";
        
        }
        echo "</table>";
    ?>

    <form action="./reservas.php" method="POST">
        <h1>Búsqueda de reservas</h1>
        <p>Referencia de reserva (Número de identificación)</p> 
        <input type="text" id="email" name="email" readonly=redonly value= "<?php echo $email ; ?>"><br><br>
        <input type="submit" value="Borrar">
    </form>
</body>
</html>

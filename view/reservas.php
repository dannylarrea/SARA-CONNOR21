<!DOCTYPE html>
<html lang="en">
<head>
    
</head>

<body>
    <?php 
        include '../services/connection.php';
            //Query sala traer id y nombre
            //Para rellenar un mapa, la llave será el id de la sala y el valor el nombre 
            $reserva=$pdo->prepare("SELECT r.id_res, r.horaIni_res, r.horaFin_res, r.datos_res, u.nombre_use, m.id_mes, m.id_sal_fk
            FROM tbl_reserva r
            INNER JOIN tbl_usuario u ON r.id_use_fk=u.id_use 
            INNER JOIN tbl_mesa m ON r.id_mes_fk=m.id_mes;");
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
                echo "<td>".$datas['id_mes']."</td>";
            echo "</tr>";
                //echo "<td>".$datas['id_sal_fk']."</td>"; //Esta línea se sustituirá por un get, utilizando el mapa Preguntar a Agnés

        }

            $obsala=$pdo->prepare("SELECT s.nombre_sal FROM tbl_mesa m 
            INNER JOIN tbl_sala s ON m.id_sal_fk=s.id_sal 
            INNER JOIN tbl_reserva r on r.id_mes_fk=m.id_mes");
            $obsala->execute();
            $dataobs = $obsala->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dataobs as $datasobs) {
            echo "<tr>";
                echo "<td>".$datasobs['nombre_sal']."</td>";
            echo "</tr>";
        }


        echo "</table><br>";
    ?>

    <form action="./reservas.php" method="POST">
        <h1>Búsqueda de reservas</h1>
        <p>Referencia de reserva (Número de identificación)</p> 
        <input type="text" id="email" name="email" readonly=redonly value= "<?php echo $email ?>"><br><br>
        <input type="submit" value="Borrar">
    </form>
</body>
</html>

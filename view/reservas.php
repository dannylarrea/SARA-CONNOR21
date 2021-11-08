<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
    <center>
        <h1>Historial de reservas</h1>
    </center>
    <form action="./reservas.php" method="POST">
        <h1>Búsqueda de reservas</h1>
        <p>Referencia de reserva (Número de reserva):</p> 
            <input type="number" id="" name="id_res" placeholder="Número de reserva"><br>
        <p>Hora de reserva:</p> 
            <input type="date" id="" name="horaIni_res" placeholder="Hora"><br>
        <p>Datos de reserva:</p>
            <input type="text" id="" name="datos_res" placeholder="Nombre, empresa, etc..."><br>
        <p>Responsable de reserva:</p>
            <input type="text" id="" name="nombre_use" placeholder="Empleado que ha reservado"><br>
        <p>Mesa:</p>
            <input type="number" id="" name="id_mes" placeholder="Número de mesa"><br>
        <p>Sala:</p>
        <input type="text" id="" name="nombre_sal" placeholder="Nombre sala"><br><br>
            <?php
                include '../services/connection.php';
                $salas=$pdo->prepare("SELECT nombre_sal FROM tbl_sala GROUP BY nombre_sal");
                $salas->execute();
                $data = $salas->fetchAll(PDO::FETCH_ASSOC);
                //Select con opciones de la BBDD
                echo "<label for='seleccion-sala'>Sala</label><br><br>";
                echo "<select name='nombre_sal' value=''>";
                    foreach ($data as $reg) {
                        echo "<option value='{$reg['nombre_sal']}'>{$reg['nombre_sal']}</option>";
                    }
                echo "</select><br><br>"

            ?>
        <input type="submit" value="Filtrar"><br>
    </form>
    <?php 
        //include '../services/connection.php';
        //Query sala traer id y nombre
        //Para rellenar un mapa, la llave será el id de la sala y el valor el nombre 
        $reserva=$pdo->prepare("SELECT r.id_res, r.horaIni_res, r.horaFin_res, r.datos_res, u.nombre_use, m.id_mes, s.nombre_sal
        FROM tbl_reserva r
        INNER JOIN tbl_usuario u ON r.id_use_fk=u.id_use 
        INNER JOIN tbl_mesa m ON r.id_mes_fk=m.id_mes
        INNER JOIN tbl_sala s ON m.id_sal_fk=s.id_sal;");
        $reserva->execute();
        $data = $reserva->fetchAll(PDO::FETCH_ASSOC);

        echo "<table width='100%' border='1' cellpadding='0' cellspacing='0'>";
        echo "<tr style='background-color:#FFDAA9';>";
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
        echo "<tr style='background-color:#E4EBFF';>";
            echo "<td>".$datas['id_res']."</td>";
            echo "<td>".$datas['horaIni_res']."</td>";
            echo "<td>".$datas['horaFin_res']."</td>";
            echo "<td>".$datas['datos_res']."</td>";
            echo "<td>".$datas['nombre_use']."</td>";
            echo "<td>".$datas['id_mes']."</td>";
            echo "<td>".$datas['nombre_sal']."</td>";
        echo "</tr>";
    }
    echo "</table><br>";
    //     $obsala=$pdo->prepare("SELECT s.nombre_sal 
    //     FROM tbl_mesa m 
    //     INNER JOIN tbl_sala s ON m.id_sal_fk=s.id_sal 
    //     INNER JOIN tbl_reserva r on r.id_mes_fk=m.id_mes");
    //     $obsala->execute();
    //     $dataobs = $obsala->fetchAll(PDO::FETCH_ASSOC);

    // foreach ($dataobs as $datasobs) {
    //     echo "<tr>";
    //         echo "<td>".$datasobs['nombre_sal']."</td>";
    //     echo "</tr>";
    // }

    //echo "</table><br>";
    ?> 
    </form>

</body>
</html>

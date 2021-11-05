<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SARA-CONNOR21</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="../js/js.js"></script>
    <script type="text/javascript" src="../js/iconos_g.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../img/icon.png">
    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/style.css">


</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['email']))
    {
    ?>
    <div class="region-salas">
        <div class="grid-salas flex-cv">
        <?php 
                    include '../services/sala.php';
                    include '../services/mesa.php';
                    include '../services/connection.php';
                    $salas=$pdo->prepare("SELECT * from tbl_sala");
                    $salas->execute();
                    $salas=$salas->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($salas as $salas) {

                        $capacidad_libre=$pdo->prepare("SELECT SUM(capacidad_mes) from tbl_mesa where status_mes = 'Libre' && id_sal_fk=?");
                        $capacidad_libre->bindParam(1, $salas['id_sal']);
                        $capacidad_libre->execute();
                        $capacidad_libre = $capacidad_libre->fetch(PDO::FETCH_NUM);


                        $mesas_libres=$pdo->prepare("SELECT * from tbl_mesa WHERE status_mes = 'Libre' && id_sal_fk = ?");
                        $mesas_libres->bindParam(1, $salas['id_sal']);
                        $mesas_libres->execute();
                        $mesas_libres=$mesas_libres->fetchAll(PDO::FETCH_ASSOC);


                        $mesas_ocupadas=$pdo->prepare("SELECT * from tbl_mesa WHERE status_mes = 'Ocupado/Reservado' && id_sal_fk = ?");
                        $mesas_ocupadas->bindParam(1, $salas['id_sal']);
                        $mesas_ocupadas->execute();
                        $mesas_ocupadas=$mesas_ocupadas->fetchAll(PDO::FETCH_ASSOC);
    
                ?>
            <div class="sala">
            <img src="../media/icons/<?php echo $salas['imagen_sal']?>" alt="">
                <h2><?php echo $salas['nombre_sal'] ?></h2>
                <table>
                    <tbody>
                        <tr>
                            <th>Capacidad total: </th>
                            <td><?php echo $salas['capacidad_sal'] ?> personas</td>
                        </tr>
                        <tr>
                            <th>Capacidad libre: </th>
                            <td><?php echo  $capacidad_libre[0]?> personas</td>
                        </tr>
                        <tr>
                            <th>Mesas Libres: </th>
                            <td><?php echo count($mesas_libres) ?> mesas</td>
                        </tr>
                        <tr>
                            <th>Mesas ocupadas: </th>
                            <td><?php echo count($mesas_ocupadas) ?> mesas</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php 
                    }
            ?>

    </div>
    <?php
    }else
    {
        header("Location:../View/login.php");
    }
    ?>
</body>
</html>
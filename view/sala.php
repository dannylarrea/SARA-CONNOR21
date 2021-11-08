<?php //mirar si esta la sesion iniciada
    include_once '../services/mesa.php';
    include_once '../services/connection.php';
        session_start();
    if (isset($_SESSION['email']))
    {
    ?>
<!DOCTYPE html>
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
<body class="salass">

    <div class="region-mesas flex-cv">
            
            <div class="grid-mesas">
                <?php
                $idsala = $_POST['hiddensala'];
                $mesa=$pdo->prepare("SELECT * from tbl_mesa WHERE id_sal_fk= $idsala");
                $mesa->execute();
                $mesa=$mesa->fetchAll(PDO::FETCH_ASSOC);

                foreach ($mesa as $mesa) {
                ?>
               <div class="mesa">
                    <?php
                    if($mesa['capacidad_mes'] ==2)
                    {
                        ?>
                        <img data-status="<?php echo $mesa['status_mes']; ?>" class="btn-abrirPop mesasvg mesa-2" src="../media/mesa2.svg" alt="mesa 2 personas">
                        <?php
                    }
                    elseif($mesa['capacidad_mes'] ==4)
                    {
                        ?>
                        <img data-status="<?php echo $mesa['status_mes']; ?>" class="btn-abrirPop mesasvg mesa-4" src="../media/mesa4.svg" alt="mesa 4 personas">
                        <?php    
                    }
                    elseif($mesa['capacidad_mes'] ==6)
                    {
                        ?>
                        <img data-status="<?php echo $mesa['status_mes']; ?>" class="btn-abrirPop mesasvg mesa-6" src="../media/mesa6.svg" alt="mesa 6 personas">
                        <?php
                    }
                    elseif($mesa['capacidad_mes'] ==10)
                    {
                        ?>
                        <img data-status="<?php echo $mesa['status_mes']; ?>" class="btn-abrirPop mesasvg mesa-10" src="../media/mesa10.svg" alt="mesa 10 personas">
                        <?php
                    }
                    else
                    {
                        ?>
                        <img data-status="<?php echo $mesa['status_mes']; ?>" class="btn-abrirPop mesasvg mesa-4" src="../media/mesa4.svg" alt="mesa 4 personas">
                        <?php
                    }
                    ?>
                </div>

                <?php
                }
                ?>

            </div>
      
    </div>

    <?php 
    /*
    falta enviar id_mes, el responsable en los popup, recibir el id_res en popup modificar
    */
    ?>
    <div class="overlay" id="overlay">
        <div class="abrirReserva" id="abrirReserva">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrarPop"><i class="fas fa-times"></i></a>
                <h3>Reservar mesa</h3>
                <form METHOD='POST' action="../services/reservar-mesa.php">
                    <label for="nombre">Nombre de la reserva</label>
                    <input type="text" id="nombre" name="nombre">
                    <input type="hidden" name="responsable" value="<?php echo $_SESSION['email'] ?>">
                    <input type="submit" value="Reservar" class="btn">
                </form>
            </div>
        </div>


        <div class="cerrarReserva" id="cerrarReserva">
            <div class="popup" id="popup2">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrarPop"><i class="fas fa-times"></i></a>
                <h3>Modificar reserva</h3>
                <form METHOD='POST' action="../services/modificar-registro.php">
                    <label for="nombre">Nombre de la reserva</label>
                    <input type="text" id="nombre" name="nombre" readonly>
                    <select name="accion">
                        <option value="finalizar">Finalizar</option>
                        <option value="cancelar">Cancelar</option>
                    </select>
                    <input type="submit" value="Guardar" class="btn">
                </form>
            </div>
        </div>
    </div>
    <?php
    }else
    {
        header("Location:../view/login.php");
    }
    ?>
</body>
</html>
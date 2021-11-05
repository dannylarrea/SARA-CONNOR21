<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SARA-CONNOR21</title>
    <!-- librerias-->
    <script type="text/javascript" src="../js/jquery.js"></script><!-- jquery-->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- sweetalert-->
    <script type="text/javascript" src="../js/iconos_g.js"></script><!-- iconos FontAwesome-->
    <script type="text/javascript" src="../js/js.js"></script>
    <link rel="icon" type="image/png" href="../img/icon.png">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['email']))
    {
    ?>
    <div class="region-mesas">
            
            <div class="grid-mesas flex-cv">
                <?php
                include '../services/mesa.php';
                include '../services/connection.php';
                $mesa=$pdo->prepare("SELECT * from tbl_mesa WHERE id_sal_fk=1");
                $mesa->execute();
                $mesa=$mesa->fetchAll(PDO::FETCH_ASSOC);

                foreach ($mesa as $mesa) {

                ?>
               <div class="mesa">
                    <?php
                    if($mesa['capacidad_mes'] ==2)
                    {
                        if($mesa['status_mes'] =="Libre")
                        {
                            ?> <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 2 personas libre"><?php
                        
                        }
                        elseif($mesa['status_mes'] =="Ocupado/Reservado")
                        {
                            ?> <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 2 personas ocupado"><?php
                        }
                        else {
                            ?> <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 2 personas mantenimiento"><?php
                        }
                        
                    }
                    elseif($mesa['capacidad_mes'] ==4)
                    {
                        if($mesa['status_mes'] =="Libre")
                        {
                            ?> <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 4 personas libre"><?php
                        
                        }
                        elseif($mesa['status_mes'] =="Ocupado/Reservado")
                        {
                            ?> <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 4 personas ocupado"><?php
                        }
                        else {
                            ?> <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 6 personas mantenimiento"><?php
                        }
                        
                    }
                    else
                    {
                        if($mesa['status_mes'] =="Libre")
                        {
                            ?> <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 6 personas libre"><?php
                        
                        }
                        elseif($mesa['status_mes'] =="Ocupado/Reservado")
                        {
                            ?> <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 6 personas ocupado"><?php
                        }
                        else {
                            ?> <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 6 personas mantenimiento"><?php
                        }
                        
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
                    <input type='hidden' name='sala' value=sala1.php>
                    <input type="submit" value="Reservar" class="btn">
                </form>
            </div>
        </div>


        <div class="cerrarReserva" id="cerrarReserva">
            <div class="popup" id="popup2">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrarPop"><i class="fas fa-times"></i></a>
                <h3>Modificar usuario</h3>
                <form METHOD='POST' action="../services/modificar-registro.php">
                    <label for="nombre">Nombre de la reserva</label>
                    <input type="text" id="nombre" name="nombre" readonly>
                    <input type='hidden' name='sala' value=sala1.php>>
                    <input type="submit" value="insertar" class="btn">
                </form>
            </div>
        </div>
    </div>
    <?php
    }else
    {
        header("Location:../View/login.php");
    }
    ?>
</body>
</html>
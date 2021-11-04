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
    <div class="region-mesas">
  
            <div class="grid-mesas flex-cv">
               <div class="mesa">
                   <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 4 personas">   
                </div>
                <div class="mesa">
                   <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 4 personas">   
                </div>
                <div class="mesa">
                   <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 4 personas">   
                </div>
                <div class="mesa">
                   <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 4 personas">   
                </div>
                <div class="mesa">
                   <img class="btn-abrirPop mesasvg mesa-3q"src="../media/mesa4.svg" alt="mesa 4 personas">   
                </div>

            </div>
      
    </div>
    <div class="overlay" id="overlay">
        <div class="abrirReserva" id="abrirReserva">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrarPop"><i class="fas fa-times"></i></a>
                <h3>Reservar mesa</h3>
                <form METHOD='POST' action="../insertar.php">
                    <label for="nombre">Nombre de la reserva</label>
                    <input type="text" id="nombre" name="nombre">
                    <label for="numper">Número de personas</label>
                    <input type="numeric" id="numper" name="numper">
                    <input type="submit" value="insertar" class="btn">
                </form>
            </div>
        </div>
        <div class="cerrarReserva" id="cerrarReserva">
            <div class="popup" id="popup2">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrarPop"><i class="fas fa-times"></i></a>
                <h3>Modificar usuario</h3>
                <label for="nombre">Nombre de la reserva</label>
                <input type="text" id="nombre" name="nombre" readonly>
                <label for="numper">Número de personas</label>
                <input type="numeric" id="numper" name="numper" readonly>
                <input type="submit" value="insertar" class="btn">
                <form METHOD='POST' action="../modificar.php">

                </form>
            </div>
        </div>
    </div>
</body>
</html>
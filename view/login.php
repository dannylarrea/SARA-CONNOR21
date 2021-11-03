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
    <div class="region-login">
  
            <div class="login flex-cv">
                <form action="../services/login.php" method="POST"class="login-form shadow1">
                    <label for="username">Correo</label>
                    <input type="email" placeholder="ej. pepito@gmail.com" id="login_username" class="login-input_username" name="username">
                    <label for="password">Contraseña</label>
                    <input type="password" placeholder="Password" id="login_password" class="login-input_password" name="password">
                    <span><input type="checkbox" name="showpass" onclick="showPass()"><label for="showpass">Mostrar contraseña</label></span>
                    <input type="submit" name="enviar" value="enviar" id="login_btn_enviar" class="login-btn_enviar">
                </form>
                
            </div>
      
    </div>
</body>
</html>
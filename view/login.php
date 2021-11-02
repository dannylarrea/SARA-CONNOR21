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
    <link rel="icon" type="image/png" href="../img/icon.png">
    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/style.css">


</head>
<body>
    <div class="region-login">
  
            <div class="login flex-cv">
                <form action="../services/login.php" method="POST"class="login-form shadow1">
                    <label for="username">Nombre de usuario</label>
                    <input type="text" placeholder="ej. Pepito" id="login_username" class="login-input_username" name="username">
                    <label for="password">Contraseña</label>
                    <input type="password" placeholder="Password" id="login_password" class="login-input_password" name="password">
                    <input type="submit" name="enviar" value="enviar" id="login_btn_enviar" class="login-btn_enviar">
                </form>
            </div>
      
    </div>
</body>
</html>
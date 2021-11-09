<?php
if(isset($_POST["enviar"])){
$idsala = $_POST['hiddensala'];
$sala="sala".$idsala;
setcookie("idsala", "", time() - 3153600000, "/");
setCookie('idsala', "$idsala", time()+30000, "/");
setcookie("sala", "", time() - 3153600000, "/");
setCookie('sala', "$sala", time()+30000, "/");
header("Location:../view/sala.php");
}else{
    header("Location:../view/menu.php");

}
?>
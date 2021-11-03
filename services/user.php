<?php 
class User{
  private $id_usu;
  private $nombre_usu;
  private $correo_usu;
  private $contra_usu;


 public function __construct($id_usu,$nombre_usu,$correo_usu,$contra_usu){
    $this->id_usu=$id_usu;
    $this->nombre_usu=$nombre_usu;
    $this->correo_usu=$correo_usu;
    $this->contra_usu=$contra_usu;
 }

}
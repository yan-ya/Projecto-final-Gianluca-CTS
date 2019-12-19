<?php
function retornarConexion() {
  $con=mysqli_connect("localhost","root","","informe_trimestral");
  return $con;
}
?>
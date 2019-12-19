<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  require("conexion.php");
  $con=retornarConexion();
$i=1;
if ($i==1) {
mysqli_query($con,"UPDATE `sustancias` SET `cantidad`=`cantidad`+`cantidad_comprada`-`usado_al_final_del_ciclo`");
sleep(1);
$i++;
}
if ($i==2) {

mysqli_query($con,"UPDATE `sustancias` SET `cantidad_comprada`= 0,`comprada_historial`= null, `usado_al_final_del_ciclo` = 0, `fecha_de_compra` = null, `tipo_documento` = null, `numero_de_proveedor_sedronar`= null");	# code...
}

class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'Ciclo Completado';

  header('Content-Type: application/json');
  echo json_encode($response);  
  ?>
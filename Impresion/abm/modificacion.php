<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

  
 $postdata = file_get_contents("php://input");
 $request = json_decode($postdata);

  require("conexion.php");
  $con=retornarConexion();

$i=0;
$count=count($request);
//inicio del while

$id = $request ->data; 
$comprado = $request->comprado; 
$usado = $request->usado; 
//fecha works
$fecha= $request ->fecha;
echo $fecha;
echo "   espacio   ";
if ($fecha=!"") {
$fecha_formateando = explode("-", $fecha); 
$fecha_string = $fecha_formateando[2]."/". $fecha_formateando[1]."/". $fecha_formateando[0];
echo "fecha cambiante";
}


//fecha works end
$documento = $request ->documento; 
$sedronar = $request ->sedronar; 

if ($comprado != "" && $fecha_string != "" && $documento != "" && $sedronar != "") {
if ($comprado != "0" && $fecha_string != "0" && $documento != "0" && $sedronar != "0") {

  echo "validado para usar material ";

  echo " validado para subir datos ";

  mysqli_query($con,"UPDATE `sustancias` SET `cantidad_comprada`=`cantidad_comprada` + $comprado,`fecha_de_compra`=CONCAT(`fecha_de_compra`,' <br> ','$fecha_string'),`tipo_documento`= CONCAT(`tipo_documento`,' <br> ','$documento') ,`numero_de_proveedor_sedronar`= CONCAT(`numero_de_proveedor_sedronar`,' <br> ','$sedronar')  WHERE `id_sustancia` = $id");
}
}
if ($usado != 0 && $usado != "") {
  mysqli_query($con, "UPDATE `sustancias` SET `usado_al_final_del_ciclo`= `usado_al_final_del_ciclo`+ $usado WHERE id_sustancia = $id");
  echo "validado para usar material ";
}


class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'Datos actualizados';

  header('Content-Type: application/json');
  echo json_encode($response);  
  ?>
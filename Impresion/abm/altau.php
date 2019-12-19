<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  
  require("conexion.php");
  $con=retornarConexion();
  
 $fecha_formatear = $params->fecha_de_compra;
 $fecha_de_compra="";
 if (isset($fecha_formatear)&&$fecha_formatear!="") {
    $fecha_formateando = explode("-", $fecha_formatear); 
 $fecha_de_compra = $fecha_formateando[2]."/". $fecha_formateando[1]."/". $fecha_formateando[0]; 
 }

$tipo_documento= $params->tipo_documento;
$numero_de_proveedor_sedronar=$params->numero_de_proveedor_sedronar;
echo$json;
mysqli_query($con,"UPDATE sustancias SET usado_al_final_del_ciclo=usado_al_final_del_ciclo+$params->usado_al_dia WHERE id_sustancia=$params->id_sustancia");
if ($fecha_de_compra!="" && $tipo_documento!=""&&$tipo_documento!="" &&$numero_de_proveedor_sedronar!="") {
mysqli_query($con,"UPDATE sustancias SET cantidad_comprada=cantidad_comprada+$params->cantidad_comprada WHERE id_sustancia=$params->id_sustancia");
mysqli_query($con,"UPDATE sustancias SET comprada_historial=CONCAT(comprada_historial,'$params->cantidad_comprada',', ',) WHERE id_sustancia=$params->id_sustancia");
mysqli_query($con,"UPDATE sustancias SET  fecha_de_compra=CONCAT(fecha_de_compra,', ','$fecha_de_compra') WHERE id_sustancia=$params->id_sustancia");
mysqli_query($con,"UPDATE sustancias SET  tipo_documento=CONCAT(tipo_documento,', ','$tipo_documento') WHERE id_sustancia=$params->id_sustancia");
mysqli_query($con,"UPDATE sustancias SET  numero_de_proveedor_sedronar=CONCAT(numero_de_proveedor_sedronar,', ','$numero_de_proveedor_sedronar') WHERE id_sustancia=$params->id_sustancia");
}

 
  class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'datos no modificados';

  header('Content-Type: application/json');
  echo json_encode($response);  
?>
<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  
  require("conexion.php");
  $con=retornarConexion();
   $cantidad_compradas = $params->cantidad_comprada;
   $usado_al_final_del_ciclo = $params->usado_al_final_del_ciclo;
  function truncateFloat($cantidad_compradas, $decimales)
{
    $raiz = 10;
    $multiplicador = pow ($raiz,$decimales);
    $resultado = ((int)($cantidad_compradas * $multiplicador)) / $multiplicador;
    return number_format($resultado, $decimales);
 
}
$sustancia = $params->sustancia;
$medicion = $params->medicion;
  $cantidad_comprada = truncateFloat($cantidad_compradas,3);
  $usado_al_final_del_ciclo = truncateFloat($usado_al_final_del_ciclo,3);
  $fecha_formatear = $params->fecha_de_compra;
  $fecha_formateando = explode("-", $fecha_formatear); 
  $fecha_string = $fecha_formateando[2]."/". $fecha_formateando[1]."/". $fecha_formateando[0]; 
  $tipo_documento_string = $params->tipo_documento;
  $numero_de_proveedor_sedronar_string = $params->numero_de_proveedor_sedronar;
if ($sustancia!=""&&$medicion!=""&&$cantidad_comprada!="0"&&$tipo_documento_string!=""&&$fecha_string!=""&&$numero_de_proveedor_sedronar_string!="") {
    mysqli_query($con,"INSERT  into sustancias(sustancia,medicion,cantidad,cantidad_comprada, comprada_historial ,usado_al_final_del_ciclo,fecha_de_compra,tipo_documento,numero_de_proveedor_sedronar) values ('$params->sustancia','$params->medicion',0,'$cantidad_comprada',$cantidad_compradas,'$usado_al_final_del_ciclo','$fecha_string','$tipo_documento_string','$numero_de_proveedor_sedronar_string')"); 
  class Result {}
   $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'Elemento Agregado Correctamente';
   header('Content-Type: application/json');
  echo json_encode($response);  
}else{
    class Result {}
   $response = new Result();
  $response->resultado = 'NO';
  $response->mensaje = 'Faltan completar datos';
   header('Content-Type: application/json');
  echo json_encode($response);  
}


 

 
?>
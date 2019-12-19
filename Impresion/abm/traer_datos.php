<?php header('Access-Control-Allow-Origin: *');header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
require("conexion.php");
$con=retornarConexion();
$registros = mysqli_query($con,"SELECT  id_sustancia, sustancia, medicion, REPLACE(CAST(cantidad AS FLOAT),'.',',') AS cantidad, REPLACE(CAST(cantidad_comprada AS FLOAT),'.',',') as cantidad_comprada,comprada_historial ,REPLACE(CAST(cantidad+cantidad_comprada AS FLOAT),'.',',') AS  suma_existencial, REPLACE(CAST(usado_al_final_del_ciclo AS FLOAT),'.',',') AS usado_al_final_del_ciclo, REPLACE(CAST(cantidad+cantidad_comprada-usado_al_final_del_ciclo AS float),'.',',') AS existencia_al_final_ciclo, fecha_de_compra, tipo_documento, numero_de_proveedor_sedronar FROM sustancias");
while ($reg=mysqli_fetch_array($registros)){$vec[]=$reg;}$cad=json_encode($vec);
header('Content-Type: application/json'); echo $cad;?>
<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

  
 $postdata = file_get_contents("php://input");
 $request = json_decode($postdata);
 require("abm/conexion.php");
 $con=retornarConexion();
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilos.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/bootstrap_v3-3-7/css/bootstrap.css"> 
<script src="plugins/bootstrap_v3-3-7/js/bootstrap.min.js"></script>
<script src="js/inner.js"></script>


	<title>Informe Trimstral</title>
	
</head>
<body>
<div id="informe-imprimible">
	<div class="completo"><h1 id="titulo">Informe Trimestral</h1>
	<table style="width: 100%; border: 4px solid black;
    border-collapse: collapse;">
	<tr>
		<td style="width: 22%; border: 4px solid black;
    border-collapse: collapse;">PRE COMPRA</td>
		<td style=" width: 88%; border: 4px solid black;
    border-collapse: collapse;"> POST COMPRA</td>
	</tr>
	</table>
	<table>
<tr>
<td class="tabla-de-9">Sustancia</td>
<td class="tabla-de-9">Cantidad</td>
<td class="tabla-de-9">Cantidad Total comprada</td>
<td class="tabla-de-9">Suma existencial al dia </td>
<td class="tabla-de-9">Usado al </td>
<td class="tabla-de-9">Existencia Final al dia </td>
<td class="tabla-de-9">Fecha de compra</td>
<td class="tabla-de-9">Tipo de documento F/T o R (2) - N° de documento</td>
<td class="tabla-de-9">Numero de Sedronar proveedor</td>
</tr>
<?php
//use the sacara method
?>

	</table></div>
	
</div>


<input id="Imprimir" type="button" onclick="printDiv('informe-imprimible')" value="Imprimir Informe" />
</body>
</html>

<?php
$permiso = $request ->permiso_impresion; 
if ( $permiso == 1) {
	echo "funciona";

?>
<script type="text/javascript">
	 printDiv('informe-imprimible');
</script>

<?php
}

 ?>
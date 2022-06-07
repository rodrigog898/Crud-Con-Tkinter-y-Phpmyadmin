<?php //Abrimos php
	//hacemos la conexion para la base de datos:
	$conectar=@mysql_connect('localhost', 'root', '');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Encontro El Servidor";
	}else{
		$baseDedatos=@mysql_select_db('cesfam');
	//verificamos la base de datos
		if(!$baseDedatos){
			echo"No Se Encontro La Base De Datos";
		}
	}
	//Se Hace la sentencia sql:
	$sql="SELECT * FROM medicamentos"; //->Donde * es igual a todos los campos entonces la sentencia seria esta-> seleccionamos todos los campos de la tabla datos
	//ejecutamos la sentencia de slq:
	$ejecutar=mysql_query($sql);
	//traenos todos los valores en un array:
	$datos=mysql_fetch_array($ejecutar);
	//imprimimos los datos de manera dinamica
	echo "<table border='1'>";
	echo"<tr>";
	echo "<th align='center'><b>id</th>";
	echo "<th align='center'><b>descripcion</th>";
	echo "<th align='center'><b>fabricante</th>";
	echo "<th align='center'><b>grameje</th>";
	echo "<th align='center'><b>cantidad</th>";
	echo"</tr>";
	for($i=0; $i<$datos; $i++){
		echo"<tr><td>$datos[0]</td>";
		echo"<td>$datos[1]</td>";
		echo"<td>$datos[2]</td>";
		echo"<td>$datos[3]</td>";
		echo"<td>$datos[4]</td>";
		echo"</tr>";
		$datos=mysql_fetch_array($ejecutar);
	}
	echo"</table>";
?>
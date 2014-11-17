<?php 
class arriendo{
	function ActualizarArriendo($v_id,$v_fechaArriendo,$v_fechaEntrega){
		$id = $v_id;
		$fechaArriendo = $v_fechaArriendo;
		$fechaEntrega = $v_fechaEntrega;
		
		include('../conexion/mysql.inc.php');
		
		$actualizaArriendo = "UPDATE `sakila`.`rental` SET `rental_date`='$fechaArriendo', `return_date`='$fechaEntrega' WHERE `rental_id`='$id';
";
 		$resultado_actualiza = $mysqli->query($actualizaArriendo);
		$mysqli->close();	
		}
	}


?>
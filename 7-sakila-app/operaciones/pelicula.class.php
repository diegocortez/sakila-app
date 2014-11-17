<?php 
class peliculas {
	
	function eliminarPeliculas($v_id){
		$idPelicula = $v_id;
		include('../conexion/mysql.inc.php');
		$eliminar_pelicula="DELETE FROM `sakila`.`film` WHERE `film_id`='$idPelicula';
";
		$resultado = $mysqli->query($eliminar_pelicula);
		$mysqli->close();
		}
	
	
	function actualizarPeliculas($v_id,$v_titulo,$v_descripcion,$v_lanzamiento,$v_diasArriendo,$v_costoArriendo,$v_clasificacion,$v_categoria){
		$idPelicula = $v_id;
		$tituloPelicula = $v_titulo;
		$descripcionPelicula = $v_descripcion;
		$lanzamientoPelicula = $v_lanzamiento;
		$diasArriendo = $v_diasArriendo;
		$costoArriendo = $v_costoArriendo;
		$clasificacionPelicula = $v_clasificacion;
		$categoriaPelicula = $v_categoria;
		
		include('../conexion/mysql.inc.php');
		
		$actualiza_Pelicula= "UPDATE `sakila`.`film` SET `title`='$tituloPelicula', `description`='$descripcionPelicula', `release_year`=$lanzamientoPelicula, `rental_duration`='$diasArriendo', `replacement_cost`='$costoArriendo', `rating`='$clasificacionPelicula', `special_features`='$categoriaPelicula' WHERE `film_id`='$idPelicula'
";

		$resultado = $mysqli->query($actualiza_Pelicula);
		$mysqli->close();
		}
	
	}


?>
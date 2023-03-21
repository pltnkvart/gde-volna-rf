<?php
	$mysqli = true;
    include 'properties.php';

	function closeDB(){
		global $mysqli;
		$mysqli -> close ();
	}
	//получение спотов региона по id региона
	function getSpots($id_region){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `spots_table` WHERE `id_region` = $id_region");
		closeDB();
		return $result;
	}
	//получить конкретный спот по id
	function get_spot_by_id($id){
		global $mysqli;
		connectDB();
		$spots = $mysqli->query("SELECT * FROM `spots_table` WHERE `id` = $id");
		foreach($spots as $spot){
			return $spot;
		}
		closeDB();
	}
	//получение регионов
	function get_regions(){
		global $mysqli;
		connectDB();
		$regions = $mysqli->query("SELECT * FROM `regions_table`");
		closeDB();
		return $regions;
	}
	//регион по id
	function get_region_by_id($id_region){
		global $mysqli;
		connectDB();
		$regions = $mysqli->query("SELECT * FROM `regions_table` WHERE `id_region` = $id_region");
		foreach($regions as $region){
			return $region;
		}
		closeDB();
	}

	function get_gallery(){
		global $mysqli;
		connectDB();
		$gallery = $mysqli->query("SELECT * FROM gallery");
		return $gallery;
		closeDB();
	}
	// function resultToArray($result){
	// 	$array = array();
	// 	while (($row = $result->fetch_assoc()) != false)
	// 		$array[] = $row;
	// 	return $array;
	// }
?>
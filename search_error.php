<?php
include "connection.php";

function get_error($conn , $term){
	$query = "SELECT NOME_ERRO FROM manual WHERE NOME_ERRO LIKE '%".$term."%' ORDER BY NOME_ERRO ASC";
	$result = mysqli_query($conn, $query);
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $data;
}

if (isset($_GET['term'])) {
	$getError = get_error($conn, $_GET['term']);
	$cityList = array();
	foreach($getError as $error){
		$errorList[] = $error['nome_error'];
	}
	echo json_encode($errorList);
}
?>

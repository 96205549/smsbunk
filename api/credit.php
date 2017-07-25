<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../bdinc.php';
	if(isset($_GET['idcompte'])){
	$id = $_GET['idcompte'];
	$data= $bdd->query("select * from credit where idcompte=".$id." order by idcredit desc;" )->fetchAll();;
	//$number= mysql_num_rows($query);
	$temp_array= array();
	if($data){
		
		foreach($data as $value){
		
			$temp_array[]=$value;
		}
	}
	header('Content-Type: application/json');
	echo json_encode(array("credit"=>$temp_array));
    }
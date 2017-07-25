<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$montant=  $bdd->query("select sum(montant)as som, sum(sms) as sms from credit where idcompte=".$id )->fetch();

include '../bdinc.php';
	if(isset($_GET['idcompte'])){
	$id = $_GET['idcompte'];
	$data=  $bdd->query("select  sum(montant)as som, sum(sms) as sms from credit where idcompte=".$id )->fetch();
	
	//$temp_array= array();
    $temp_array[]= $data;
	/*if($data){
		
		foreach($data as $value){
		
			$temp_array[]=$value;
		}
	}*/
	header('Content-Type: application/json');
	echo json_encode(array("soldein"=>$temp_array));
    }
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../bdinc.php';
	if(isset($_GET['idcompte'])){
	$id = $_GET['idcompte'];
	$data=  $bdd->query("select  sum(sms) as sms from debit where idcompte=".$id )->fetch();
	
	//$temp_array= array();
    $temp_array[]= $data;
	
	header('Content-Type: application/json');
	echo json_encode(array("soldeout"=>$temp_array));
    }
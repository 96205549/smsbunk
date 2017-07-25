<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../bdinc.php';
	if(isset($_POST)){
	$id =$_GET['idcompte'];
	$sms = $_GET['sms'];
	$date= time();
	$query=  $bdd->query("INSERT INTO `debit`(`date`, `sms`, `idcompte`) VALUES ('$date','$sms','$id')");
	
    }

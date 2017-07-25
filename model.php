<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './bdinc.php';
/*
 * affichage de tous les comptes
 */
$showAll = $bdd->query("select * from comptes")->fetchAll(); 







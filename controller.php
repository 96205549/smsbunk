<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './bdinc.php';


if (isset($_POST['compte'])) {
    $nom = $_POST['nomets'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $code = rand(100000, 10000000);

    $req = $bdd->query("INSERT INTO `comptes`(`nomEts`, `contact`, `email`, `code`) VALUES ('$nom','$contact','$email','$code')");

    if ($req == TRUE) {
        header('Location: index.php');
    } else {
        echo " erreur d'insertion";
    }
}
if (isset($_POST['credit'])) {
    $montant = $_POST['montant'];
    $date = time();
    $sms = (int)($montant/15);
    $idcompte = $_POST['idcompte'];

    $req = $bdd->query("INSERT INTO `credit`(`montant`, `date`, `sms`, `idcompte`) VALUES ('$montant','$date','$sms','$idcompte')");

    if ($req == TRUE) {
        header('Location: credit.php?id='.$idcompte);
    } else {
        echo " erreur d'insertion";
    }
}


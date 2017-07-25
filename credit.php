<?php include './model.php'; 

/*
 * 
 */
$id= $_GET['id'];

$showCredit = $bdd->query("select * from credit where idcompte=".$id )->fetchAll(); 
$montant=  $bdd->query("select sum(montant)as som, sum(sms) as sms from credit where idcompte=".$id )->fetch();
?>

<html>
    <head>
        <title>compte de recharge sms</title>
    </head> 

<form method="post" action="controller.php">
<table>
    <tr>
        <td>Montant:</td>
        <td><input type="text" name="montant"></td>
    </tr>   
    
    <tr>
        <td></td>
        <td><input type="hidden" name="idcompte" value="<?= $id ?>"></td>
    </tr>   
    
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="credit"> <a href="index.php">retour</a></td>
    </tr>
</table>
    
    
    
    <table border="1">
        <tr>
            <td><b>Date</b></td>
            <td><b>Montant</b></td>
            <td><b>sms</b></td>
            <!--td><b>Action</b></td-->
        </tr>
        <?php foreach ($showCredit as $credit): ?>
        <tr>
            <td><?= date("d-m-Y  H:i:s",$credit['date']);      ?></td>
            <td><?= $credit['montant']."F CFA"; ?></td>
            <td><?= $credit['sms'] ?></td>
            <!--td><a href="crediter.php?id=<?php// $user['idcompte'] ?>">crediter</a></td-->
        </tr>
        <?php endforeach; ?>
        <tr>
            <td><b>Solde:</b></td>
            <td style="color: red;"><?= $montant['som'] ."F CFA" ;?></td>
            <td style="color: red;"><?= $montant['sms'] ?></td>
        </tr>
    </table>
</form>
    </html>
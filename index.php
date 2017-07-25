<?php include './model.php'; ?>

<html>
    <head>
        <title>compte de recharge sms</title>
    </head> 

<form method="post" action="controller.php">
<table>
    <tr>
        <td>Nom Ets:</td>
        <td><input type="text" name="nomets"></td>
    </tr>   
    <tr>
        <td>Contact:</td>
        <td><input type="text" name="contact"></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="compte"></td>
    </tr>
</table>
    
    
    
    <table border="1">
        <tr>
            <td><b>Nom Ets</b></td>
            <td><b>Contact</b></td>
            <td><b>Email</b></td>
            <td><b>Code</b></td>
            <td><b>Action</b></td>
        </tr>
        <?php foreach ($showAll as $user): ?>
        <tr>
            <td><?= $user['nomEts']; ?></td>
            <td><?= $user['contact']; ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['code'] ?></td>
            <td><a href="credit.php?id=<?= $user['idcompte'] ?>">crediter</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</form>
    
    
    
    </html>
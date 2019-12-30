<?php
include('db.php');
$res = $bdd->query('SELECT * FROM message ORDER BY Id DESC ');
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title>Mini-Tchat !</title>
</head>
<body>
<h1>Bienvenue sur mon mini tchat !</h1>

<form action="message.php" method="post">
    <label for="pseudo">Pseudo :  </label>
    <br/>
    <input type="text" name="pseudo">
    <br/>
    <label for="message">Taper votre message :</label>
    <br/>
    <textarea name="message" id="" cols="20" rows="5"></textarea>
    <br/>
    <button type="submit" class="btn btn-primary">Envoyer le message</button>
</form>

<br/>
<table class="table table-striped">
<tr>
    <th>ID</th>
    <th>pseudo</th>
    <th>message</th>
</tr>
    <?php while ($data =$res->fetch() ) {?>
    <tr>
        <td><?php echo $data['Pseudo']?></td>
        <!--<td>polo</td>-->
        <td><?php echo $data['Message']?></td>
    </tr>
    <?php }    $res->closeCursor(); // Termine le traitement de la requête?>
</table>
</body>
</html>
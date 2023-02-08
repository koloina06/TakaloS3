<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takalo</title>
</head>
<body>
<?php $this->load->view("templates/headerAdmin") ?>
    <table class="table table-hover">
        <th>Statistiques</th>
        <th>Nombre</th>
        <tr>
           <td>Utilisateurs inscrits</td>
           <td><?php echo $inscrits['nbr']; ?></td>
        </tr>
        <tr>
            <td>Echange effectue</td>
           <td><?php echo $echange['nbr']; ?></td>
        </tr>
    </table>
</body>
</html>
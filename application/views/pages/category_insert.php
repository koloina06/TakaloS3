<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo site_url('assets/bootstrap2/vendor/bootstrap/css/bootstrap.css')?>" rel="stylesheet">
    <title>Takalo</title>
</head>
<body>
    <h3>Inserer une nouvelle categorie</h3>
    <form action="<?php echo site_url('Admin/insert') ;?>" method="get">
        <p><input type="text" name="categorie"></p>
        <p><input type="submit" value="Valider"></p>
    </form>
</body>
</html>
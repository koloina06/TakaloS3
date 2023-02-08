<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('objet/modify_product'); ?>" method="get">
        <input type="hidden" name="idObjet" id="" value="<?php echo $objet?>">
        <input type="text" name="descri" id="" placeholder="description">
        <input type="text" name="photo" id="" placeholder="photo">
        <input type="text" name="prix" id="" placeholder="prix">
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
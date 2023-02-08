<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <th>Categories</th>
    <?php for($i=0; $i<count($categ); $i++){?>
        <tr>
            <form action="<?php echo site_url('admin'); ?>" method="post">
                <input type="hidden" value=<?php echo $categ[$i]['idCategorie']; ?> name="idCategorie">
                <td name="categorie"><?php echo $categ[$i]['categorie'];  ?></td>
                <td><button type="submit">Modifier</button></td>
            </form>
        </tr>
    <?php } ?>
</body>
</html>
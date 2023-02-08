
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('objet/insert'); ?>" method="post">        
        <select name="idCategorie">
            <?php for($i=0; $i<count($data); $i++){?>
                <option value="<?php echo $data[$i]['idCategorie']?>"><?php echo $data[$i]['categorie']?></option>
            <?php } ?>
        </select>
        <input type="text" name="descri"  placeholder="description">
        <input type="text" name="photo"  placeholder="photo">
        <input type="text" name="prix"  placeholder="prix">
        <button type="submit">Inserer un nouveau produit</button>
    </form>
    <a href="<?php echo site_url('load')?>">Voir les listes des produits</a>
</body>
</html>
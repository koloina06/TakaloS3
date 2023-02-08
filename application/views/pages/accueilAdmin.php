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

<?php $this->load->view("templates/headerAdmin") ?>
    <h3>Liste des categories</h3>
    <table class="table table-hover">
        <th>Categorie</th>
        <tr>
            <?php for($i=0; $i<count($categ); $i++){ ?>
                    <td><?php echo $categ[$i]['categorie'] ?></td>
        </tr>
            <?php  } ?>
        <tr>
            <td><a href="<?php echo site_url('Admin/add_categ')?>" >Ajouter une nouvelle categorie</a></td>
        </tr>
    </table>
</body>
</html>